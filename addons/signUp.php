<?php
$conn = new mysqli("localhost", "root", "", "haydog");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uniqueId = md5(uniqid(rand(), true));
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repeatedPassword = $_POST["repeatedPassword"];
    $cart = json_encode([]);  // JSON vuoto

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO data (id, name, email, password, cart) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $uniqueId, $name, $email, $hashedPassword, $cart);

    if ($stmt->execute()) {
        echo "Registrazione avvenuta con successo.";
    } else {
        echo "Errore durante la registrazione: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>