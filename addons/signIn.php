<?php
session_start();

$conn = new mysqli("localhost", "root", "", "haydog");

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM data WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    if ($user && password_verify($password, $user["password"])) {
        
        $response["id"] = $user["id"];
        $response["name"] = $user["name"];

        $totalCost = 0;
        $cartArray = json_decode($user["cart"], true);
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

        $response["status"] = "success";
        $response["message"] = "Login avvenuto con successo.";
    } else {
        $response["status"] = "error";
        $response["message"] = "Credenziali non valide.";
        
        error_log("Login fallito per l'email: $email");
    }
} else {
    $response["status"] = "error";
    $response["message"] = "Metodo di richiesta non valido.";
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
?>
