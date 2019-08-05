<?php
require'config.php';
$sql="SELECT * FROM `noticeboard`";#ORDER BY id DESC LIMIT 0, 5";
$result=$connection->query($sql);

echo"<table border='1'.";
echo "<tr><td>Announcements for today</td><td>Announcement ID</tr>";
while($row = mysqli_fetch_assoc($result)){#recipe for iterating through the results
$annu=$row['announcement'];
$iden=$row['id'];
echo "<tr><td>$annu</td><td>$iden</td></tr>";
}

echo"</table>";