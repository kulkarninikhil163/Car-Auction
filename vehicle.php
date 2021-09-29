<!DOCTYPE html>
<html>
<head>
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
<style type="text/css">
.navbar {
  
  margin-left: 0%;
  background-color:#08233b;
 
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


@import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

*{
	padding:0;
	margin:0;
}

html{
	background-color: #b6dbd9;
}

body{
	font:16px/1.6 Arial,  sans-serif;
}

header{
	text-align: center;
	padding-top: 100px;
	margin-bottom:190px;
}

header h1{
	font: normal 32px/1.5 'Open Sans', sans-serif;
	color: #3F71AE;
	padding-bottom: 16px;
}

header h2{
	color: #F05283;
}

header span{
	color: #3F71EA;
}


/* The footer is fixed to the bottom of the page */

footer{
	position: static;
	bottom: 0;
}

@media (max-height:800px){
	footer { position: static; }
	header { padding-top:40px; }
}


.footer-distributed{
	background-color: #2c292f;
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 50px 50px 60px 50px;
	margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 30%;
}

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

/* The company logo */

.footer-distributed .footer-left img{
	width: 30%;
}

.footer-distributed h3 span{
	color:  #e0ac1c;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}


.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #e0ac1c;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 30%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}


@media (max-width: 880px) {

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}


	
input[type=text]
 {
  width: 50;
  padding: 12px 15px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid rgb(10, 10, 10);
  border-radius: 4px;
  text-align: center;
  font-family:Verdana, Geneva, sans-serif;
}
.center {
   font-family: 'Times New Roman', serif;
}
body {
  background-color: rgba(201, 76, 76, 0.3);
}
#container{
	width:100%;
	padding:10px;
	margin:20px;
	margin-left:auto;
	margin-right:auto;
	color: black;
}
.page_content{
	margin:15px;
	padding:5px;
	border-bottom:1px solid #CCC;
}
.comment_input{
	margin:10px;
	padding:10px;
	border:1px solid #CCC;
}
#comment{
	width:635px; 
	height:100px;
}
.button{
	padding:5px 15px 5px 15px;
    background:#567373;
    color: #FFF;
	border-radius: 3px;
}

.button:hover{
	background:#4D9494;
}

a{
	text-decoration:none;
}

.comment_logs{
	margin:5px;
	padding:5px;
	border:1px solid #CCC;
}

.comments_content{
	margin:10px;
	padding:5px;
	border:1px solid #CCC;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}

h1{
	font-size:16px;
	font-family:Verdana, Geneva, sans-serif;
	color:#4040E6;
	padding-bottom:0px;
	margin-bottom:0px;
}
h2{
	font-size:10px;
	font-family:Verdana, Geneva, sans-serif;
	color:#CECED6;
}
h3{
	font-size:12px;
	font-family:Verdana, Geneva, sans-serif;
	color:#75A3A3;
	padding-bottom:5px;
	margin-bottom:5px
}
h4{
	font-size:14px;
	font-family:Verdana, Geneva, sans-serif;
	color:#CECED6;
	text-decoration:none;
	float:right;
}

@media (max-width: 880px){
.container{
	display: block;
	width: 100%;
	text-align: center;
  }

  #name, .submit{

	width: 60%;
  }

  #comment{ 
	  width: 90%;
  }
}

</style>

<h1 style="margin-left: 700px; font-size:50px;">Vehicle Details</h1>
<div class="center" >
<form style="text-align: center;margin-top: 20px;" action="/action_page.php">
  <label style="font-family:Verdana, Geneva, sans-serif;"for="Mname" class="center">Model Name:</label>
  <input style="margin-left: 50px; font-family:Verdana, Geneva, sans-serif;" type="text" id="Mname" name="Mname" value="Maruti"><br><br>
  <label  style="font-family:Verdana, Geneva, sans-serif;" for="Mileage" class="center">Mileage:</label>
  <input style="margin-left: 70px;" type="text" id="Mileage" name="Mileage" value="12kmpl"><br><br>
  <label  style="font-family:Verdana, Geneva, sans-serif;" for="Tfacility" class="center">Transportation Facility:</label>
  <input style="margin-left: 10px;" type="text" id="Tfacility" name="Transpportation Facility" value="by Truck"><br><br>
  <label  style="font-family:Verdana, Geneva, sans-serif;" for="fuel" class="center">Fuel:</label>
  <input style="margin-left: 100px;" type="text" id="fuel" name="fuel" value="Petrol"><br><br>
  <label style="font-family:Verdana, Geneva, sans-serif;" for="Cno." class="center">Car Plate no.:</label>
  <input style="margin-left: 30px;" type="text" id="Cno." name="Cno." value="MH43CV1011"><br><br>
  <label  style="font-family:Verdana, Geneva, sans-serif;" for="Mbid" class="center">Expected Min bid:</label>
  <input style="margin-left: 30px;" type="text" id="Mbid" name="Mbid" value="9,89,000"><br><br>

</form>
</div>
<div id="container">	
    <div class="page_content" style="font-size: 24px;">Comment Box...</div>
    <div id="demo"></div>
    <div class="comment_input">
        <form name="form"  id="form" method="POST">
            <input type="text" name="name" placeholder="Name..." id="name"></br></br>
            <textarea name="comments" placeholder="Leave Comments Here..." id="comment"></textarea></br></br>
            <button style="width:100px; height:55px; type="submit" name="submit" id="submit" class="button" style="outline: none;border:none;">Post</button></br>
        </form>
    </div>
    <div id="comment_logs">
        </div>
    </div>

</body>
</html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />

	

	<link rel="stylesheet" href="">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>
	<body>
				<footer class="footer-distributed">

			<div class="footer-left">
          <img src="images/yu.jpg">
				<h3>About<span>bidders buddy</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					|
					<a href="#">Blog</a>
					|
					<a href="#">About</a>
					|
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">© 2019 bidders buddy</p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p>Mumbai</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 9689090097</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="vishaltulsani5@gmail.com">vishaltulsani5@ves.ac.in</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					we offer various car for auction.</p>
				<div class="footer-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</footer>
	</body>
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

$first_name=mysqli_real_escape_string($conn,$_POST['name']);
$dob=mysqli_real_escape_string($conn,$_POST['comments']);

if(!empty($_POST['name']) && !empty($_POST['comments']))
      {

$sql="insert into comment(name_person,comment) 
values('$first_name' ,'$dob')";
      }
      else{
          echo"all fields are required to be filled";
      }

if($conn->query($sql)===TRUE){
	echo "form submitted";
}
else{
	echo "error" .$sql."<br/>".$conn->error;
}
$conn->close();
?>
