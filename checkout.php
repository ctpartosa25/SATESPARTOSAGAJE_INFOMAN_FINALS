<?php
include 'db.php';

$id = $_POST['id'];
$conn->query("UPDATE entries SET check_out = NOW() WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check-Out Success</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>Employee & Visitor Gate Pass</header>
    <div class="container">
        <h2>Check-Out Successful</h2>
        <p>ID <strong><?= $id ?></strong> has been checked out.</p>
        <p><a href="checkout.html">Back to Check-Out</a></p>
    </div>
</body>
</html>
