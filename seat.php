<?php
session_start();
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
    $tid=$_GET["tid"];
    $tname=$_GET["tname"];
    $mname=$_GET["mname"];
    $sdate=$_GET["sdate"];
    $stime=$_GET["stime"];
    $mhid=$_GET["mhid"];
    $sid=$_GET["sid"];
    $img=$_GET["img"];
    $sql="SELECT * FROM seat where theatre_id=$tid && show_id=$sid";
    $result=$conn->query($sql) or die($conn->error);
}
?>   
<?php $count=0?>
<?php $c2=0;?>
<script>
var seats=[];
var x="";
function sample(id){
    document.getElementById(id).src="https://image.flaticon.com/icons/png/512/24/24868.png";
    seats.push(id); 
    x=seats.toString();
    document.getElementById('sendstr').value=x;
    
}
</script>
<body><title>Seat Selection</title>
<h1 style="text-align:center;color:black">SELECT YOUR SEATS</h1>
<div class="container">
            <p style="color:black;"><b>Booking For <?=$mname?> In <?=$tname?> At <?=$stime?> On <?=$sdate?></b></p>
          
</div>
<p><img src="https://cdn3.iconfinder.com/data/icons/movie-entertainment-flat-style/64/13_seat-movie-cinema-chair-theater-512.png" width='25' height='25'> Available &nbsp;&nbsp;&nbsp; <img src="https://cdn3.iconfinder.com/data/icons/movie-entertainment-outline-style/64/13_seat-movie-cinema-chair-theater-512.png" width='25' height='25'> Booked  &nbsp;&nbsp;&nbsp; <img src="https://image.flaticon.com/icons/png/512/24/24868.png" width='25' height='25'>Selected</p>

<p align="center">
    <?php while($row=$result->fetch_assoc()):?>
    
           <?php if($row['availability']==0):?>
           <img title="<?=$row['Seat_name']?>" id="<?=$row['Seat_name']?>" src="https://cdn3.iconfinder.com/data/icons/movie-entertainment-flat-style/64/13_seat-movie-cinema-chair-theater-512.png" onclick="sample(this.id)" alt="<?=$row['Seat_name']?>" width='25' height='25'> &nbsp;&nbsp;&nbsp;
           <?php endif;?>
           <?php if($row['availability']==1):?>
            <img id="booked" src="https://cdn3.iconfinder.com/data/icons/movie-entertainment-outline-style/64/13_seat-movie-cinema-chair-theater-512.png"  alt="<?=$row['Seat_name']?>" width='25' height='25'> &nbsp;&nbsp;&nbsp;
            <?php endif;?>
            <?php $count=$count+1;?>
            <?php $c2=$c2+1;?>
            <?php if($count%8==0):?>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php endif;?>
            <?php if($c2%16==0):?>
                <br><br>
                <?php endif;?>
                <?php 
                $_SESSION['tid']=$tid;
                $_SESSION['tname']=$tname;
                $_SESSION['mname']=$mname;
                $_SESSION['sdate']=$sdate;
                $_SESSION['stime']=$stime;
                $_SESSION['mhid']=$mhid;
                $_SESSION['sid']=$sid;
                $_SESSION['img']=$img;
                ?>
        <?php endwhile;?>
        
</p>
<p align="center"><img src="screen-trans.png" width='800' height='35'><br>(ALL EYES THIS WAY PLEASE)</p><br>

<div class="form"><form method="POST" action="booking.php">
<input type="hidden" name="str" id="sendstr"/>
<input type="submit" value="Continue" >
</form></div>


</body>



<style>
            body{
                margin:0;
                padding:0;
                background-color:white;
                font-family: sans-serif;
                
            }
            .container{
                background-color:rgba(0,0,0,0);
            }
            .button{
                margin:auto;
                padding:0;
                border-radius:5px;
            }
            form input[type="submit"]{
                height:30px;
                width:120px;
                padding:0;
                border-radius:10px;
                margin:0 auto;
                display:block;
                text-align:center;
                font-size:15;
                font-weight:bold;
                background-color:lightblue;
            }
</style>



    