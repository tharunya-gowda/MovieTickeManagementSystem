<?php 
 $seatsel=$_POST['str'];
 $temp=explode(",",$seatsel);
 $seats=array_unique($temp);
 $seatstr=implode(",",$seats);
 $n=count($seats);
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
    session_start();
    $tid=$_SESSION['tid'];
    $tname=$_SESSION['tname'];
    $mname=$_SESSION['mname'];
    $sdate=$_SESSION['sdate'];
    $stime=$_SESSION['stime'];
    $mhid=$_SESSION['mhid'];
    $cid=$_SESSION['cust_id'];
    $sid=$_SESSION['sid'];
    $img=$_SESSION['img'];
    $_SESSION['tid']=$tid;
    $_SESSION['tname']=$tname;
    $_SESSION['mname']=$mname;
    $_SESSION['sdate']=$sdate;
    $_SESSION['stime']=$stime;
    $_SESSION['mhid']=$mhid;
    $_SESSION['cust_id']=$cid;
    $_SESSION['sid']=$sid;
    $_SESSION['img']=$img;
    $_SESSION['seats']=$seatstr;
    
    $price=100;
    $tax=0.1;
    $count=0;
    $total=($price*$n)+($price*$n*$tax);
    $_SESSION['price']=$price;
    $_SESSION['tax']=$tax;
    $_SESSION['total']=$total;
    for($i=0;$i<$n;$i++){
    $sql = "INSERT INTO ticket(price,Seat_name,movie_handling_id,cust_id,theatre_id,show_id) VALUES ('$price','$seats[$i]','$mhid','$cid','$tid','$sid')";
    if ($conn->query($sql)){
    $count=$count+1;
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    }?>
<body>
<h1 style="color:white;text-align:center">REVIEW YOUR ORDER</h1>
</body>
<div class='container'>
<p style="font-weight:bold;"><b><u><?=$mname?></u></b></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$tname?></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seats:<?=$seatstr?></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$sdate?></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?=$stime?></b></p>
<p style="text-align:right;position:relative;left:300px;bottom:260px;transform:rotate(90deg)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$tid?>&nbsp;<?=$mhid?>&nbsp;<?=$cid?></p>
</div><br>
<div class='container2'>
</div>
<div class='container3'>
<h2 style="color:lightsalmon;text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAYMENT</h2><br>
<form class="myform"method="POST" action="print.php">
<label style="color:white">Name On Card</label> 
<input type="text" id="name" placeholder="Card Holder's Name" size="70"><br><br>
<label style="color:white">Card Number</label>
<input type="text" id="cardnum" placeholder="Enter Your Card Number" size="70"><br><br>
<label style="color:white">Expiry Date</label>
<input type="date" id="exdate" size="70"><br><br>
<label style="color:white">CVV</label>
<input type="text" id="name" placeholder="CVV" size="70"><br><br><br><br>
<input type="submit" value="Pay Rs.<?=$total?>"

</div>

<style>
.container{
    position:relative;
    left:70px;
    top:70px;
    width: 400px;
    height:200px;
    margin: 0 left;
    background-color:grey;
   background-image:url("1.png");
    background-size:cover;
    padding-left: 40px;
    padding-right: 200px;
    padding-top: 1px;
    padding-bottom: 5px;
    border-radius: 10px;
    font-family:sans-serif;

    }
    body{
                margin:0;
                padding:0;
                background-color:white;
                background-image:url("https://i.pinimg.com/564x/d6/73/55/d67355f37143ed03eb093a3807293a73.jpg");
                font-family: sans-serif;
                
        }
.container2{
    position:relative;
    left:70px;
    top:70px;
    width: 400px;
    height:200px;
    margin: left;
    background-color:grey;
   background-image:url("3.png");
    background-size:cover;
    padding-left: 40px;
    padding-right: 200px;
    padding-top: 1px;
    padding-bottom: 5px;
    border-radius: 10px;
    font-family:sans-serif;
}
.container3{
    position:relative;
    left:350px;
    bottom:433px;
    width: 200px;
    height:500px;
    margin:auto;
    background-color:rgba(0,0,0,0.6);
    background-size:cover;
    padding-left: 40px;
    padding-right: 300px;
    padding-top: 20px;
    padding-bottom: 50px;
    border-radius: 10px;
    font-family:sans-serif;
}
input[type=text] {
    background: transparent;
    border: none;
    size:50;
    border-bottom: 1px solid white;
}
input[type="submit"]{
    height:30px;
    width:150px;
    padding:0;
    border-radius:10px;
    margin:center;
    display:block;
    text-align:center;
    font-size:15;
    font-weight:bold;
    background-color:lightblue;
            }
           
    
</style>

