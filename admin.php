<?php include "includes/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - LawFirmPHP</title>
    <link rel="stylesheet" href="css/style.css">
    <base href="http://localhost/LawFirmPHP/">
</head>
<body>
    <h1>Contact Messages</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date</th>
        </tr>
        <?php
        $stmt = $conn->query("SELECT * FROM contacts ORDER BY created_at DESC");
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['message']."</td>";
            echo "<td>".$row['created_at']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>