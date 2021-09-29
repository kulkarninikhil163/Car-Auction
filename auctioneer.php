
<?php
   $server="remotemysql.com";
   $username="7odeIeTykd";
   $password="vfIvq9VueM";
   $dbname="7odeIeTykd";
   
    
    $conn=mysqli_connect($server,$username,$password,$dbname);
    
    if($conn->connect_error){
    
        die("connection failed".$conn->connect_error);
    }
    
    $sql="SELECT * FROM  testdrive ";
    $result=mysqli_query($conn,$sql) or die("error");
    ?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="auctioneer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>
<body>
<div class="navbar">

<a href="in.php"><i class="fa fa-fw fa-search"></i> Search</a> 
<a href="contact.html"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
 
<a href="about.html"><i class="fa fa-fw fa-file"></i>About Us</a>
<a class="active" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>


</div>
    <div class="reg"><h1>Auctioneer Registration</h1></div>
    <div class="main">
        <form action="index.php" method="POST">
            <div id="name">
                <h2 class="name">Name</h2>
                <input class="firstname" type="text" name="first_name"><br>
                <label class="firstlabel">FirstName</label>
               
                <input  class="lastname" type="text" name="last_name"><br>
                <label   class="lastlabel">Lastname</label>

                </div>
                <h2 class="name">ADDRESS</h2>
                <input class="company" type="text" name="company">
                <h2 class="name">Model Name</h2>
                <input class="company" type="text" name="mn">
                <h2 class="name">EMAIL ID</h2> 
                <input class="email" type="text" name="email">
                <h2 class="name">MODEL NUMBER</h2>
                <input class="company" type="text" name="model">
                <h2 class="name">Minimum Bid Amount</h2>
                <input class="bid" type="number" name="bid">
                <h2 class="name">Auction name</h2>
                <input class="bid" type="text" name="auction">
                <h2 class="name">Username</h2>
                <input class="bid" type="text" name="uname">
                <h2 class="name">Password</h2>
                <input class="bid" type="password" name="password">
                <h2 class="name">Date Of Birth</h2>
                <input class="start" type="date" name="dob">
                <h2 class="name">Start Date</h2>
                <input class="start" type="date" name="start">
                <h2 class="name">End Date</h2>
                <input class="end" type="date" name="end">
                <h2 class="name">Enter PIC of Model</h2>
                <input class="file" type="file" name="file">
                
                <h2 class="name">CONTACT</h2> 
                <input class="code" type="text" name="area_code">
<label class="area-code">Area Code</label>
<input class="number" type="text" name="phone">
<label class="phone-number">CONTACT NUMBER</label>
<h2 class="name">HANDED</h2>
<select class="option" name="subject">
    <option disabled="disabled" selected="selected">--Choose Option</option>
    <option name="subject">1st</option>
    <option  name="subject">2nd</option>
    <option name="subject">3rd</option>
</select>    
<h2 id="student">GENDER</h2>   
<label class="radio">
       <input class="radio-one" type="radio" checked="checked" name="hello">
           <span class="checkmark"></span>
FEMALE
       </label>
       <label class="radio">
        <input class="radio-two" type="radio"  name="hello">
            <span class="checkmark"></span>
MALE
        </label>
        <label class="radio">
            <input class="radio-one" type="radio" name="hello">
                <span class="checkmark"></span>
   OTHER
            </label>
        <button class="button"  type="submit" name="submit"><b>REGISTER</b></button>
    </div>
        </form>
    
        <div>
            <div class="cont">
                <img src="https://www.parkmycloud.com/wp-content/uploads/cloud-scheduling.png" alt="Avatar" class="image" style="width:50%; height:auto;">
                <div class="middle">
                  <div class="text">
                    <?php
                    echo"<table>";
                    echo "<tr><th>Location</th><th>Testdrive_id</th><th>Date</th><th>Time</th></tr>";
                    if(mysqli_num_rows($result)){
                    while($row=mysqli_fetch_array($result)){
                      
                        echo "<tr><td>";
                        echo $row['location'];
                        echo "</td><td>";
                        echo $row['testdrive_id'];
                        echo "</td><td>";
                        echo $row['date'];
                        echo "</td><td>";
                        echo $row['timeslot'];
                        echo "</td></tr>";
                       
                      
                        
                    }
                    echo"</table>";
                 }
                     ?>
                  </div>
                </div>
              </div>
              
    
</body>
</html>
