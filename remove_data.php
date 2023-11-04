<?php 
$mname=$_POST['MovieName'];
$tname=$_POST['TheatreName'];
$host = "localhost";
$dbusername = "id16647474_suchith";
$dbpassword = "Suchithsj@1537";
$dbname = "id16647474_localhost";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO remove_data(movie_name,theatre_name)
values ('$mname','$tname');";
if ($conn->query($sql)){
  echo '<script>alert("Record Inserted Successfully")</script>';
}else{
  echo "Error: ". $conn->error;
  }
}