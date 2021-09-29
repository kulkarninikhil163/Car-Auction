<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<style>
.navbar {
    width:218vh;
    margin-left: 0%;
    background-color:#08233b;
    overflow: auto;
    height: 75px;
    margin-top: -0.001%;
  }
  
  .navbar a {
    float: right;
    
    color: white;
    text-decoration: none;
    font-size: 20px;
    padding-top: 22px;
    padding-bottom: 25px;
    padding-left: 14px;
    padding-right: 14px;
  }
  
  .navbar a:hover {
    background-color: #000;
  }
  
  .active {
    background-color: #fcba03;
  }
  
  @media screen and (max-width: 500px) {
    .navbar a {
      float: none;
      display: block;
      padding-top: 15px;
    }
  }
    </style>
    <body>
    <div class="navbar">

<a href="in.php"><i class="fa fa-fw fa-search"></i> Search</a> 
<a href="contact.html"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
 
<a href="about.html"><i class="fa fa-fw fa-file"></i>About Us</a>
<a class="active" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>


</div>
</body>
</head>
    </html>
<?php
$server="remotemysql.com";
$username="7odeIeTykd";
$password="vfIvq9VueM";
$dbname="7odeIeTykd";



$conn=mysqli_connect($server,$username,$password,$dbname);

if($conn->connect_error){

	die("connection failed".$conn->connect_error);
}
$output='';
if(isset($_POST['search'])){
    $searchq=$_POST['search'];
    $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
    $query="SELECT model_name FROM auctioneer WHERE model_name LIKE '%$searchq%' ";
    $qrun=mysqli_query($conn,$query);
    if(mysqli_num_rows($qrun)){
 
     while($row = mysqli_fetch_array($qrun)){
         $mname=$row['model_name'];
        
         $output .='<div> '.$mname.' </div>';
     }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-image:url("https://wallpaperheart.com/wp-content/uploads/2018/07/plain-background-images-for-powerpoint-presentation-14-300x225.jpg");
            background-size:cover;
       width:100%;
       height:auto;
       max-width:680px;
        }
        .hi{
            width:820px;
            font-size:80px;
            border:3px solid;
            margin-left:250px;
            margin-top:300px;
        }
        .hy{
            width:90px;
            height:50px;
            border:5px solid;
            margin-left:250px;
        }
        .img{
            text-align:center;
            margin-left:300px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
</head>
<body>
  <div class="img">


    <form action="in.php" method="POST">
    <input class="hi" type="text" name="search" placeholder="enter your search here"/><hr>
    <input class="hy" type="submit" value=">>"/>
    </form>
   
    <?php
    echo"<h1>";
    print("$output");
    echo "</h1>";
    
    ?>
     </div>
</body>
</html>
