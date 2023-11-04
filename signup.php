<?php
$Firstname = filter_input(INPUT_POST, 'Firstname');
$Lastname = filter_input(INPUT_POST, 'Lastname');
$Email = filter_input(INPUT_POST,'email');
$Phone = filter_input(INPUT_POST,'Phone');
$Password = filter_input(INPUT_POST, 'password');
if (!empty($Firstname)){
if (!empty($Lastname)){
if (!empty($Email)){
if (!empty($Phone)){
if(!empty($Password)){
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
$sql = "INSERT INTO customer(first_name,last_name,mail,phone,password)
values ('$Firstname','$Lastname','$Email','$Phone','$Password')";
if ($conn->query($sql)){
    header("Location:login.html");
}

$conn->close();else{
echo "Error: ". $sql ."
". $conn->error;
}
}
}
else{
echo '<script>alert("Password field should not be empty")</script>';
die();
}
}
else{
echo '<script>alert("Phone field should not be empty")</script>';
die();
}
}
else{
echo '<script>alert("Email field should not be empty")</script>';
die();
}
}
else{
echo '<script>alert("Lastname should not be empty")</script>';
die();
}
}
else{
echo '<script>alert("Firstname should not be empty")</script>';
die();
}
?>