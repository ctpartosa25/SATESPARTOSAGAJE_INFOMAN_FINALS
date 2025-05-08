<?php
include 'db.php';
$result = $conn->query("SELECT * FROM entries ORDER BY check_in DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gate Pass Log</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>Employee & Visitor Gate Pass</header>
    <nav>
        <a href="index.html">Check-In</a>
        <a href="checkout.html">Check-Out</a>
        <a href="view.php">Admin Log</a>
    </nav>
    <div class="container">
        <h2>Log Records</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Reason</th>
                <th>Contact</th>
                <th>Check-In</th>
                <th>Check-Out</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= ucfirst($row['type']) ?></td>
                <td><?= htmlspecialchars($row['reason']) ?></td>
                <td><?= htmlspecialchars($row['contact']) ?></td>
                <td><?= $row['check_in'] ?></td>
                <td><?= $row['check_out'] ?: '<em>Pending</em>' ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
