<?php
include("db.php");
$taskid = $_GET["taskid"];
$sql = "DELETE FROM tasks WHERE taskid='$taskid'";

if(mysqli_query($conn,$sql)==0)
{
	echo "successfully deleted";
}else
{
	die(mysqli_error($conn));
}
?>