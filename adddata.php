<?php
$mname=$_POST['MovieName'];
$tname=$_POST['TheatreName'];
$lang=$_POST['lang'];
$rating=$_POST['rating'];
$rdate=$_POST['rdate'];
$budget=$_POST['budget'];
$cast=$_POST['cast'];
$director=$_POST['director'];
$imgurl=$_POST['imgurl'];
$duration=$_POST['dur'];
$loc=$_POST['location'];
$loclink=$_POST['locationlink'];
$sdate=$_POST['Showdate'];
$stime=$_POST['stime'];

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
$sql = "INSERT INTO add_movie(movie_name,theatre_name,lang,rating,release_date,budget,cast,director,imgurl,duration,location,locationlink,showdate,show_time)
values ('$mname','$tname','$lang','$rating','$rdate','$budget','$cast','$director','$imgurl','$duration','$loc','$loclink','$sdate','$stime');";
if ($conn->query($sql)){
  echo '<script>alert("Record Inserted Successfully")</script>';
}else{
  echo "Error: ". $conn->error;
  }
}


?>