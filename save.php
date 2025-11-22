<?php
require_once "db.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = trim($_POST["name"]);
    $message = trim($_POST["message"]);

    if(!empty($name) && !empty($message)){
        $sql = "INSERT INTO messages (name, message) VALUES (?, ?)"; //SQL injection

        $stmt = $pdo->prepare($sql);

        $stmt->execute([$name, $message]);
    }
    header('Location: index.php');
}
?>
