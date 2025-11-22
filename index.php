<?php
require_once 'db.php';

$stmt = $pdo->query("SELECT * FROM messages ORDER BY created_at DESC");
$messages = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Guest book</title>
</head>
<body>
    <section id="form">
        <h1>Guest Book</h1>
        <form action="save.php" method="POST">
        <label for="name">Vaše jméno: </label>
        <input type="text" id="name" name="name" required>

        <label for="message">Vzkaz: </label>
        <textarea name="message" id="message" required></textarea>
        <button id="btn-submit">Odeslat</button>
    </form>
    </section>
    <section id="messages">
        <h2>Messages</h2>
        <?php
        foreach ($messages as $row){
            echo "<div>";
            echo "<p class = 'name'>".htmlspecialchars($row["name"])."</p>";
            echo "<p class = 'message'>".htmlspecialchars($row["message"])."</p>";
            echo "</div>";
        }
        ?>
    </section>
</body>
</html>