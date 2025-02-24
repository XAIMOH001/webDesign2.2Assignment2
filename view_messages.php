<?php
include 'config.php';

$sql = "SELECT * FROM contact ORDER BY submitted_at DESC";
$result = $conn->query($sql);

echo "<h2>Contact Messages</h2>";
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Full Name</th>
<th>Email</th>
<th>Message</th>
<th>Date</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['full_name']."</td>
    <td>".$row['email']."</td>
    <td>".$row['message']."</td>
    <td>".$row['submitted_at']."</td>
    </tr>";
}

echo "</table>";
$conn->close();
?>
