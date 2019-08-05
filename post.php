<?php
include "config.php";

echo"Type your announcement here <br>";
echo '<form action="" method="POST">';
echo'<input type="text" id="iden" name="announcement" style="height:400px; width:700px;" required/>';
echo '<input type="submit" value="submit" name="submit_btn">';
echo '</form>';
if(isset($_REQUEST['submit_btn'])){

$announcement=$_POST['announcement'];
$sql="INSERT INTO noticeboard (announcement) VALUES('$announcement')";
$result=$connection->query($sql);
if ($result===TRUE){
	echo '<script>';
echo'Announcement posted';
    echo'</script>';
}

}