<?php
require 'config.php';
echo '<form action="" method="POST">';
echo"ENTER THE ANNOUNCEMENT ID";
echo"<input type='text' name='iden'/>";
echo '<input type="submit" value="delete" name="submit_btn">';
echo '</form>';
if(isset($_REQUEST['submit_btn'])){

$id=$_POST['iden'];
$sql="DELETE FROM `noticeboard` WHERE `noticeboard`.`id` = $id";
$result=$connection->query($sql);
 if ($result===TRUE)
 {
	 echo '<script>';
 echo 'alert("deleted successfully")';
 echo '</script>';


}

}


