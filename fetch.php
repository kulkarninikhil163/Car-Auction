<?php 
session_start();

if (  isset($_SESSION['Username1']) || isset($_SESSION['username']) ) {

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Document</title>
<script type="text/javascript" src="jquery-3.5.1.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

<style>
body {font-family: Arial, Helvetica, sans-serif;
background-image:url("https://static2.bigstockphoto.com/3/3/2/large1500/233273464.jpg");
width:100%;
height:auto;
overflow:auto;
}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #558;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  right: 28px;
  width: 280px;
}
.ope-button {
  background-color: #558;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  margin-top:180px;
  margin-left:620px;
  width: 285px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;

  right: 15px;
  border: 3px solid #f1f1f1;

}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}


/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.6;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}
.new{

  
  margin-top:370px;
  padding: 80px 100px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  right: 28px;
  width: 380px;
}
.new .searchbox{
    width: 100%;
  padding: 15px;
  margin: 25px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
.new .searchbtn{
    background-color:green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.6;
}
/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover ,.searchbtn:hover{
  opacity: 1;
}
.form1-popup {
  display: none;
position:fixed;
  bottom: 0;
  margin-top:380px;
  margin-left:620px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */


.form1-container {
  width: 650px;
  padding: 10px;
  position:fixed;
  margin-top:80px;
  margin-left:420px;
  background-color: white;
}

/* Full-width input fields */
.form1-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  
  border: none;
  background: #f1f1f1;
  position:fixed;
}

/* When the inputs get focus, do something */


/* Set a style for the submit/login button */
.form1-container .btnn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 60%;
  height: 30%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */


/* Add some hover effects to buttons */
.form1-container .btnn:hover {
  opacity: 1;
}

.navbar {
    
    margin-left: -2%;
    background-color:#08233b;
    overflow: auto;
    height: 25px;
    margin-top: -0.001%;
  }
  
  .navbar a {
    float: right;
    
    color: white;
    text-decoration: none;
    font-size: 22px;
    padding-top: 0px;
    padding-bottom: 0px;
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
      padding-top: 0px;
    }
  }
  
  
</style>
</head>
<body>
<div class="navbar">

  <a href="in.php"><i class="fa fa-fw fa-search"></i> Search</a> 
  <a href="contact.html"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
   
  <a href="about.html"><i class="fa fa-fw fa-file"></i>About Us</a>
  <a class="active" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>

  
</div>

                  <form action="testdrive.php" method="POST" class="form1-container" id="Form1">
                  <h1 style="margin-top:180px; margin-left:340px;position:fixed;color:orange;">TEST DRIVE<br>Details</h1><h1></h1>
                   
                
                    <label style="width:80px; margin-top:90px;" for="location"><h2><b>Location</h2></b></label>
                    <input style="width:250px; margin-left: 120px;
    margin-top: -50px;border:3px solid;" type="text" placeholder="Enter Location" name="location" required>
                    <br>
                    <br>
                    <label  style="width:100px; margin-top:60px;"for="date"><h2><b>Date</h2></b></label>
                    
                    <input  style="width:200px; margin-top:-50px; border:3px solid;margin-left: 100px;" type="text" name="date" required>
                    <br>
                    <br>
                    <label  style="width:100px; margin-top:70px;" for="time"><h2><b>Time</h2></b></label>
                    <input  style="width:200px; margin-top:-100px;border:3px solid;margin-left: 100px;" type="datetime" placeholder="enter time" name="time" required>
<br>
<br>
                
                    <button  style="width:130px; margin-top:50px;border:3px solid;" type="submit" name="submit" class="btnn">SUBMIT</button>
               
                  </form>
</div>
                
                <script>
                function openForm1() {
                  document.getElementById("Form1").style.display = "block";
                }
                
                function closeForm1() {
                  document.getElementById("Form1").style.display = "none";
                }
                </script>
                
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
<div class="card-body">
<button class="open-button" onclick="openForm()">BID POP-UP</button>

<div class="form-popup" id="form">
  <form action="pop.php" method="POST" class="form-container" id="form" >
  <label for="username"><b>Hii User !</b></label>
<br>
<br>

    <label for="bidding amount"><b>Bidding Amount</b></label>
    <input type="text" placeholder="Enter Amount" name="Bidding_amount"  id="Bidder_name" required>
    <label for="model name"><b>Model name</b></label>
    <input type="text" class="searchbox" name="model_name" id="model_name" placeholder="enter model name"  required>
    <label for=" name"><b>Name</b></label>
    <input type="text" class="hello" name="name" id="name" placeholder="enter name"  required>

    
    <button type="submit" class="btn">Place-bid</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
</div>
</div>

<script>
function openForm() {
  document.getElementById("form").style.display = "block";
}

function closeForm() {
  document.getElementById("form").style.display = "none";
}
</script>
<form action="" method="POST" class="new">
<input style="border:3px solid; "type="text" class="searchbox" name="id" placeholder="enter model name" id="id" required>
<button style="border:3px solid;" type="submit" class="searchbtn" name="search" id="search" onclick="ok()" >search</button>
<label style="margin-left:5px;margin-top:1685px;" for="Model-name"><b><h3>Minimum_bidding amount :</h3> <br></b></label>
</form>
<div class="card">
    <div class="card-body">

    
<?php

$server="remotemysql.com";
$username="7odeIeTykd";
$password="vfIvq9VueM";
$dbname="7odeIeTykd";
    

$conn=mysqli_connect($server,$username,$password,$dbname);

if($conn->connect_error){

	die("connection failed".$conn->connect_error);
}


if(isset($_POST['search']))
{
    $id=$_POST['id'];
  
    $query="SELECT min_bid_amt FROM auctioneer WHERE model_name='$id' ";
    $qrun=mysqli_query($conn,$query);
    if(mysqli_num_rows($qrun)){
     
while($row=mysqli_fetch_array($qrun)){
    
    ?>
    
    <input style="width:70px; height:50px;padding: 15px;
  margin: 3px 0 22px 0;
  border: none;
  background: #f1f1f1; margin-top:655px;position:fixed; right: 28px;
  width: 280px;margin-left:1400px;border:3px solid;" type="text" name="get" value="<?php  echo $row['min_bid_amt']; ?>" 
  placeholder=" min bid amt" id="text" required>
    <?php


}
    }
    else{
echo "record not found";
    }

}

?>

</div>
</div>
</div>


                


</body>
</html>
<?php 
}else{
     header("Location: index1.php");
     exit();
}
 ?>
