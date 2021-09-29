<?php
$server="remotemysql.com";
$username="7odeIeTykd";
$password="vfIvq9VueM";
$dbname="7odeIeTykd";

$conn=mysqli_connect($server,$username,$password,$dbname);

if($conn->connect_error){

	die("connection failed".$conn->connect_error);
}

$location=mysqli_real_escape_string($conn,$_POST['location']);
$date=mysqli_real_escape_string($conn,$_POST['date']);
$time=mysqli_real_escape_string($conn,$_POST['time']);


if(!empty($_POST['location']) && !empty($_POST['date']) 
	&& !empty($_POST['time']))
      {

$sql="insert into testdrive(location,date,timeslot) 
values('$location','$date','$time')";
      }
      else{
          echo"all fields are required to be filled";
      }
      $sql="insert into scheduler(location,date,timeslot) 
values('$location','$date','$time')";

if($conn->query($sql)===TRUE){
	echo "form submitted";
}
else{
	echo "error" .$sql."<br/>".$conn->error;
}
$conn->close();
?>