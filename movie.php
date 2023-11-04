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
    $sel="SELECT * FROM movie ORDER BY movie.movie_name";
    $result=$conn->query($sel) or die($conn->error);
}
?>
            <body>
                <h1 style="text-align:center;color:white;"> NOW SHOWING</h1>
            </body>
<?php while($row=$result->fetch_assoc()):?>
         <div class='container'>
            <p><b><a href="movie_rel.php?moviename=<?=$row['movie_name']?>" style="color:black;"><?= $row['movie_name'] ?></a></b><b>|</b><?=$row['lang']?><b>|</b><?=$row['release_date']?><b>|</b><?=$row['duration']?></p>
            <hr color="#000000"></hr>
            <div class="img">
            <img  src="<?=$row['image']?>" width='120' height='150' width:100% border='3px'><br>
            <p><span style="font-size:25px;">&#9733;<b> <?=$row['Rating']?>/10</b></span></p>  
            </div>
           <p style="padding:30px;"><br><b>Cast:</b><?=$row['Cast']?><br><b>Director:</b><?=$row['Director']?></p>
           
        </div>
      
        <style>
            .container{
    
                width: 500px;
                margin: auto;
                background-color: rgba(0,0,0,0.6);
                background-image:url("https://i.pinimg.com/564x/70/ca/f2/70caf2205237ec6a1e7bd305627e6660.jpg");
                background-size:cover;
                padding-left: 40px;
                padding-right: 150px;
                padding-top: 10px;
                padding-bottom: 100px;
                border-radius: 10px;
                font-family:sans-serif;
    
                }
                .img{
                    float:left;
                    padding:10px;
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
        </style>
        

    