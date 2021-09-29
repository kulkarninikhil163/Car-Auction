<?php
    $server="remotemysql.com";
    $username="7odeIeTykd";
    $password="vfIvq9VueM";
    $dbname="7odeIeTykd";
    
    
    $conn=mysqli_connect($server,$username,$password,$dbname);
    
    if($conn->connect_error){
    
        die("connection failed".$conn->connect_error);
    }
  

    $q="SELECT * FROM auctioneer ";
    $test=mysqli_query($conn,$q);
    
    $r="SELECT * FROM comment";
    $re=mysqli_query($conn,$r);
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    <link rel="stylesheet" href="admin.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <img src="icon.png" class="image">
        <h1> ADMIN </h1>
        <div id="details" class="item">
            <h3>DETAILS</h3>
            <form action="">
                <h1 class="name">NAME</h2>
                <h2>DEV ANAND</h2>
                <h1 class="name">D.O.B.</h2>
              <h2>16/09/2000</h2>
              <h1 style="font-color:white;"class="name">EMAIL ID</h2>
              <h2>dev_anand@gmail.com</h2>
               
            </form>
        </div>
        <div id="not" class="item">
            <h3>NOTIFICATIONS</h3>
            <button onclick="location.href='notify.html'" class="NOTIFICATIONS">NOTIFICATIONS</button>
           <hr><a href='admin1.html' class="NNOTIFICATIONS"><input type=button onclick="location.href='admin1login.php'" value=logout name=logout></a>
        </div>
        <div id="auctioneer" class="item">
            <h3>AUCTIONEER DETAILS</h3>
            <td width='80' class="center">
    <?php
   echo"<table>";
   echo "<tr><th>First Name</th><th>Last Name</th><th>Model Name</th><th>Actions</th></tr>";
   if(mysqli_num_rows($test)){
   while($row=mysqli_fetch_array($test)){
     
       echo "<tr><td>";
       echo $row['first_name'];
       echo "</td><td>";
       echo $row['last_name'];
       echo "</td><td>";
       echo $row['model_name'];
       echo "</td><td>";
       echo"<a href='process.php?ron= $row[model_name]'>DELETE</td>";
       echo"</td></tr>";
       
   }
   echo"</table>";
}
    ?>
   
                
            </table>
        </div>
        <div style="width:85%;"id="comment" class="item">
            <h3>COMMENTS</h3>
           
            <?php
                    echo"<table>";
                    echo "<tr><th>Name</th><th>Comment</th></tr>";
                    if(mysqli_num_rows($re)){
                    while($row=mysqli_fetch_array($re)){
                      
                        echo "<tr><td>";
                        echo $row['name_person'];
                        echo "</td><td>";
                        echo $row['comment'];
                        echo "</td></tr>";
                       
                       
                      
                        
                    }
                    echo"</table>";
                 }
                     ?>
        </div>
    </div>
    <script>
        function check(){
return Confirm("sure?");
        }
    </script>
</body>

</html>
