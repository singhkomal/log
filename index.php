<?php 
include("db.php");
?>
<?php
 /*$arr=array("name"=>"komal","location"=>"sasaram");
 # print_r($arr);
 foreach ($arr as $key => $value) {
    echo "$key: $value";
    echo "<br>";

   
 }
  #print_r($conn);
  #print_r("hiie");
*/

 
//print_r($query);
/*if(!($query))
{
  echo "result not found";
}
else{
 echo "result founded";

}*/



?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ToDo</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Add</a></li>

    </ul>
  </div>
</nav>
<div class="container">
  
 <table class="table">

    <thead>

      <tr>
        <th>Name</th>
        <th>Start At</th>
        <th>Stop At</th>
        <th>Location</th>
        <th>Action</th>
    
      </tr>
    </thead>
    <tbody>

      <?php
      $sql="SELECT * FROM tasks";
      $query=mysqli_query($conn,$sql);//is funtion to used to connection in mysql.
      if(mysqli_num_rows($query)==0){

        echo "No rows in the that table";

       }
else{
  //echo "result found";
  while($row= mysqli_fetch_assoc($query))
  {
    echo "<tr>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["starttime"]."</td>";
    echo "<td>".$row["stoptime"]."</td>";
    echo "<td>".$row["location"]."</td>";
    echo "<td><button style='background-color: red;'><a href='delete.php?taskid=".$row["taskid"]."'>Delete</a></button></td>";
    echo "</tr>";

  }
}
   ?>
    </tbody>
  </table>
</div>   
  </body>
</html>