<?php

$conn = new mysqli("localhost", "root", "", "haydog");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST["userId"];
    $itemIndex = $_POST["itemIndex"];

    $userDataQuery = $conn->prepare("SELECT cart FROM data WHERE id = ?");
    $userDataQuery->bind_param("s", $userId);
    $userDataQuery->execute();
    $userDataQuery->store_result();

    if ($userDataQuery->num_rows > 0) {
        $userDataQuery->bind_result($jsonString);
        $userDataQuery->fetch();

        $cartArray = json_decode($jsonString, true);

        $response = array();

        if (isset($cartArray[$itemIndex])) {
            unset($cartArray[$itemIndex]);

            $updatedJsonString = json_encode($cartArray);

            $updateQuery = $conn->prepare("UPDATE data SET cart = ? WHERE id = ?");
            $updateQuery->bind_param("ss", $updatedJsonString, $userId);
            $updateQuery->execute();
            $updateQuery->close();

            $totalCost = 0;
            $cartDetails = array();

            foreach ($cartArray as $itemIndex => $quantity) {
                $itemWithPrefix = "item" . $itemIndex;
                $stmt = $conn->prepare("SELECT item, price FROM items WHERE item = ?");
                $stmt->bind_param("s", $itemWithPrefix);
                $stmt->execute();
                $stmt->bind_result($itemName, $price);

                if ($stmt->fetch()) {
                    $totalCost += $price * $quantity;

                    $cartDetails[] = array(
                        "item" => $itemName,
                        "quantity" => $quantity
                    );
                }

                $stmt->close();
            }

            $response["totalCost"] = $totalCost;
            $response["cartDetails"] = $cartDetails;
            $response["message"] = "rimosso correttamente";

        } else {
            $response["message"] = "non rimosso";
            $response["item"] = $itemIndex;
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }
}

$conn->close();
?>
