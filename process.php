<?php
$server="remotemysql.com";
$username="7odeIeTykd";
$password="vfIvq9VueM";
$dbname="7odeIeTykd";


$conn=mysqli_connect($server,$username,$password,$dbname);

if($conn->connect_error){

	die("connection failed".$conn->connect_error);
}
$fn=$_GET['ron'];
$query="DELETE model_name FROM auctioneer WHERE model_name=$fn";
$data=mysqli_query($conn,$query);

if($data){
    
    echo "record deleted from database";
}
else{
    echo "Failed to delete data from database";
}
?>