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
    $mail=$_POST["mail"];
    $password=$_POST["password"];

    $fetch="SELECT cust_id,password FROM customer WHERE mail='".$mail."'";
    $result1=$conn->query($fetch) or die($conn->error);
    if(mysqli_num_rows($result1)>0){
    $row1=$result1->fetch_assoc();
    $id=$row1["cust_id"];
    $pass=$row1["password"];
    session_start();
    $_SESSION['cust_id']=$id;
    if($pass==$password){
        header("Location:home.html");
    }
    else{
        echo "Wrong password";
    }
    }
    else{
        header("Location:signup.html");
        exit();
    }



}
?>