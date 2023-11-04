<?php 
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
    $seats=$_SESSION['seats'];
    $price=$_SESSION['price'];
    $tax=$_SESSION['tax'];
    $total=$_SESSION['total'];
    $sel=explode(",",$seats);
    $n=count($sel);
    ?>
    <body>
        <h1 style="text-align:center;">Lights Camera Movie</h1>
        <img src="<?=$img?>" width="150px" height="200px">
        <p><b>Movie:</b><?=$mname?></p>
        <p><b>Theatre:</b><?=$tname?></p>
        <p><b>Show Date:</b><?=$sdate?></p>
        <p><b>Show Timings:</b><?=$stime?></p>
        <p><b>Seats:</b><?=$seats?></p>
        <p><b>No. of Tickets:</b><?=$n?></p>
        <p><b>Price:Rs.</b><?=$price?>/Seat</p>
        <p><b>Internet Charges:</b><?=$tax * 100?></p>
        <p><b>Total:</b><?=$total?></p>
</body>
<button style="color:blue" onclick="window.print();">Print TIcket</button>
