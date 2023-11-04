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
    $sel="SELECT * FROM theatre";
    $result=$conn->query($sel) or die($conn->error);
}
?>
            <body>
                <h1 style="text-align:center;color:white;">THEATRES</h1>
            </body>
<?php while($row=$result->fetch_assoc()):?>
         <div class='container'>
            <p ><b><a href="theatre_rel.php?theatrename=<?=$row['theatre_name']?>" style="color:black;"><?= $row['theatre_name'] ?></a></b></p>
            <hr color="#000000"></hr>
            <?=$row['link']?>  
            <p style="padding:30px;"><br><b>Location:</b><?=$row['loc']?></p>
            <br>

           
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
                padding-top: 1px;
                padding-bottom: 1px;
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
        

    