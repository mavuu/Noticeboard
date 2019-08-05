<?php
require 'config.php';
echo'<form action="" method="POST">';
echo"Enter the id of the announcement you wish to update <br>";
echo"<input type='number' id= 'iden' name='iden' required><br><br><br>";
echo" enter the updated text<br><br>";
echo"<input required type='text' id='update' name='update' style='height:400px; width:700px;'/><br>";
echo '<input type="submit" value="update" name="submit_btn">';
echo '</form>';
 /*$sql='UPDATE table noticeboard SET announcement=$update where id=$id';
$result=connection->query(sql);
if $result===TRUE{
echo "records updated successfully"
}
else{
echo "could not connect to the database".$connetion_error;
}
*/
if(isset($_REQUEST['submit_btn'])){

$update=$_POST['update'];
$id=$_POST['iden'];
$sql="UPDATE `noticeboard` SET `announcement` = '$update' WHERE `noticeboard`.`id` = $id";

$result=$connection->query($sql);
if ($result===TRUE){
	echo '<script>';
echo'Announcement updated successfuly';
    echo'</script>';
}

}

