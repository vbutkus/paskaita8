<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../main.css">
    <title>Title</title>
</head>
<body>
<?php

$user1= ['vardas' => 'petras', 'pavarde' => 'petraitis', 'amzius' => 19];
$user2= ['vardas' => 'juozas', 'pavarde' => 'juozaitis', 'amzius' => 21];
$user3= ['vardas' => 'jonas', 'pavarde' => 'jonaitis', 'amzius' => 30];

$users = [$user1, $user2, $user3];

echo "<table>";
echo "<tr>";
echo "<th>vardas</th>";
echo "<th>pavarde</th>";
echo "<th>amzius</th>";
foreach ($users as $user) {
    echo '<tr>';
    echo "<td>". $user['vardas']. "</td>";
    echo "<td>". $user['pavarde']. "</td>";
    echo "<td>". $user['amzius']. "</td>";
    echo "<tr>";
}

echo "</table>";


?>
</body>
</html>