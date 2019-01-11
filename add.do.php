<?php
include("db.php");
error_reporting(E_ALL); ini_set('display_errors', 1);

print_r($_POST);

$name = $_POST["name"];
$description = $_POST["description"];
$starttime = $_POST["starttime"];
$stoptime = $_POST["stoptime"];
$location = $_POST["location"];

 //$sql = "INSERT INTO `unaux_23265832_todo`.`tasks` (`taskid`, `name`, `description`, `starttime`, `stoptime`, `location`, `status`) VALUES (NULL,\'task2\', \'sdfsdf\', \'2019-01-02\', \'2019-01-09\', \'asda\', \'0\');";

$sql = "INSERT INTO tasks(name,description, starttime, stoptime, location) VALUES ('$name','$description', '$starttime', '$stoptime', '$location')";
echo $sql;

if(mysqli_query($conn, $sql)){
  echo "sussessfully inserted";
}
else{
  die(mysqli_error($conn));
}
?>