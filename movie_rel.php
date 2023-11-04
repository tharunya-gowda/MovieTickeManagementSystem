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
    $mname=$_GET["moviename"];
    $sel="CALL movie_by_name('$mname');";
    $result=$conn->query($sel) or die($conn->error);
}
    ?>
    <body>
                <h1 style="text-align:center;color:white;">Theatres Showing <?=$mname?></h1>
    </body>
        <?php while($row=$result->fetch_assoc()):?>
        <div class='container'>
           <p ><b><?= $row['theatre_name'] ?></b></p>
           <hr color="#000000"></hr>
           <p><b>Location:</b><?=$row['loc']?></p>
           <p><b>Show Date:<?=$row['show_date']?></b></p>
           <button class="button"><b><a href="seat.php?img=<?=$row['image']?> && mhid=<?=$row['movie_handling_id']?> && tid=<?=$row['theatre_id']?> && tname=<?=$row['theatre_name']?> && mname=<?=$row['movie_name']?> && sid=<?=$row['show_id']?> && sdate=<?=$row['show_date']?> && stime=<?=$row['show_time']?> &&mhid=<?=$row['movie_handling_id']?>" style="color:black"><?=$row['show_time']?></a></b></button>
           </div>
       <style>
            .container{
    
                width: 500px;
                margin: auto;
                background-color:grey;
               background-image:url("https://i.pinimg.com/564x/70/ca/f2/70caf2205237ec6a1e7bd305627e6660.jpg");
                background-size:cover;
                padding-left: 40px;
                padding-right: 150px;
                padding-top: 1px;
                padding-bottom: 5px;
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
                background-color:white;
                background-image:url("https://i.pinimg.com/564x/d6/73/55/d67355f37143ed03eb093a3807293a73.jpg");
                font-family: sans-serif;
                
            }
            