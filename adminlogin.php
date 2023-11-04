<?php
$host = "localhost";
$dbusername = "id16647474_suchith";
$dbpassword = "Suchithsj@1537";
$dbname = "id16647474_localhost";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
    $name=$_POST["adminname"];
    $password=$_POST["password"];


    $fetch="SELECT admin_id,password FROM admin WHERE admin_name='".$name."'";
    $result1=$conn->query($fetch) or die($conn->error);
    if(mysqli_num_rows($result1)>0){
    $row1=$result1->fetch_assoc();
    $id=$row1["admin_id"];
    $pass=$row1["password"];
    if($pass==$password){
        header("Location:adminpage.html");
    }
    else{
        echo '<script>alert("Wrong password")</script>';
    }
    }
    else{
        echo '<script>alert("Admin does not exist")</script>';
        exit();
    }



}
?>