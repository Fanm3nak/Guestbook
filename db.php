<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "guestbook_db";

try {

    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>