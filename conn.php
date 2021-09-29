<?php
$server="remotemysql.com";
$username="7odeIeTykd";
$password="vfIvq9VueM";
$dbname="7odeIeTykd";

$conn=mysqli_connect($server,$username,$password,$dbname);

if($conn->connect_error){

	die("connection failed".$conn->connect_error);
}
$for=mysqli_real_escape_string($conn,$_POST['for']);
$or=mysqli_real_escape_string($conn,$_POST['or']);
$forr=mysqli_real_escape_string($conn,$_POST['forr']);
$message=mysqli_real_escape_string($conn,$_POST['message']);



if(!empty($_POST['for']) && !empty($_POST['or']) 
	&& !empty($_POST['forr']) 
	&& !empty($_POST['message']))
      {
$sql="insert into contact(first_name,last_name,email,message) 
values('$for' ,'$or','$forr','$message')";
	  }
	  else{
		  echo "all fields are mandatory";
	  }
if($conn->query($sql)===TRUE){
	echo "form submitted";
}
else{
	echo "error" .$sql."<br/>".$conn->error;
}
$conn->close();
?>