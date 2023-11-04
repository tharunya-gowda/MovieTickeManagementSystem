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
    $tname=$_GET["theatrename"];
    $sel="CALL theatre_by_name('$tname');";
    $result=$conn->query($sel) or die($conn->error);
}
    ?>
    <body>
                <h1 style="text-align:center;color:white;"> Now Showing In <?=$tname?></h1>
    </body>
<?php while($row=$result->fetch_assoc()):?>
         <div class='container'>
            <p><b><?= $row['movie_name'] ?></b><b>|</b><?=$row['lang']?><b>|</b><?=$row['release_date']?><b>|</b><?=$row['duration']?></p>
            <hr color="#000000"></hr>
            <div class="img">
            <img  src="<?=$row['image']?>" width='120' height='150' width:100% border='3px'><br>
            <p><span style="font-size:25px;">&#9733;<b> <?=$row['rating']?>/10</b></span></p>  
            </div>
           <p style="padding:30px;"><br><b>Cast:</b><?=$row['cast']?><br><b>Director:</b><?=$row['director']?></p>
           <p><b>Show Date:<?=$row['show_date']?></b></p>
           <button class="button"><b><a href="seat.php?img=<?=$row['image']?> && mhid=<?=$row['movie_handling_id']?> && tid=<?=$row['theatre_id']?> && tname=<?=$row['theatre_name']?> && mname=<?=$row['movie_name']?> && sdate=<?=$row['show_date']?> && sid=<?=$row['show_id']?> && stime=<?=$row['show_time']?> &&mhid=<?=$row['movie_handling_id']?>" style="color:black"><?=$row['show_time']?></a></b></button>
           
        </div>
      
        <style>
            .container{
    
                width: 500px;
                margin: auto;
                background-color: rgba(0,0,0,0.6);
                background-image:url("https://i.pinimg.com/564x/70/ca/f2/70caf2205237ec6a1e7bd305627e6660.jpg");
                background-size:cover;
                padding-left: 40px;
                padding-right: 100px;
                padding-top: 10px;
                padding-bottom: 30px;
                border-radius: 10px;
                font-family:sans-serif;
    
                }
                .img{
                    float:left;
                    padding:10px;
                }
                .button{
                    color:black;
                    background-color:lightsalmon;
                    padding-left: 2px;
                padding-right: 2px;
                padding-top: 1px;
                padding-bottom: 1px;
                border-radius: 5px;
                }
        </style>
        <br>
        <br>
        <?php endwhile; ?>
        <style>
            body{
                margin:0;
                padding:0;
                background-image:url("https://i.pinimg.com/564x/d6/73/55/d67355f37143ed03eb093a3807293a73.jpg");
                font-family: sans-serif;
                
            }