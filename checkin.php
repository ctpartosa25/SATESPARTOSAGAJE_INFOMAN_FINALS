<?php
include 'db.php';

$name = $_POST['name'];
$type = $_POST['type'];
$reason = $_POST['reason'];
$contact = $_POST['contact'];

$sql = "INSERT INTO entries (name, type, reason, contact) VALUES ('$name', '$type', '$reason', '$contact')";
$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check-In Success</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>Employee & Visitor Gate Pass</header>
    <div class="container">
        <h2>Check-In Successful</h2>
        <p><strong><?= htmlspecialchars($name) ?></strong> has been checked in.</p>
        <p><a href="index.html">Back to Check-In</a></p>
    </div>
</body>
</html>
