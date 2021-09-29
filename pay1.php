
<?php
$server="remotemysql.com";
$username="7odeIeTykd";
$password="vfIvq9VueM";
$dbname="7odeIeTykd";


$conn=mysqli_connect($server,$username,$password,$dbname);

if($conn->connect_error){

	die("connection failed".$conn->connect_error);
}
$firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$Amount=mysqli_real_escape_string($conn,$_POST['Amount']);
$state=mysqli_real_escape_string($conn,$_POST['state']);
$zip=mysqli_real_escape_string($conn,$_POST['zip']);
$cardname=mysqli_real_escape_string($conn,$_POST['cardname']);
$cardnumber=mysqli_real_escape_string($conn,$_POST['cardnumber']);
$expmonth=mysqli_real_escape_string($conn,$_POST['expmonth']);
$expyear=mysqli_real_escape_string($conn,$_POST['expyear']);
$cvv=mysqli_real_escape_string($conn,$_POST['cvv']);

if(!empty($_POST['firstname']) && !empty($_POST['address']) 
	&& !empty($_POST['Amount']) && !empty($_POST['email']) 
    && !empty($_POST['state'])
     && !empty($_POST['zip'])
     && !empty($_POST['cardname']) 
     && !empty($_POST['cardnumber']) 
     && !empty($_POST['cvv'])
      && !empty($_POST['expmonth'])
      && !empty($_POST['expyear']))
      {

$sql="insert into payment(firstname,address,amount,email,state,zip,name_card,cvv,card_no,exp_month,exp_year) 
values('$firstname' ,'$address','$Amount','$email','$state','$zip','$cardname','$cvv','$cardnumber','$expmonth','$expyear')";
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