<?php
$server="remotemysql.com";
$username="7odeIeTykd";
$password="vfIvq9VueM";
$dbname="7odeIeTykd";


$conn=mysqli_connect($server,$username,$password,$dbname);

if($conn->connect_error){

	die("connection failed".$conn->connect_error);
}
$Bidding_amount=mysqli_real_escape_string($conn,$_POST['Bidding_amount']);
$model_name=mysqli_real_escape_string($conn,$_POST['model_name']);
$name=mysqli_real_escape_string($conn,$_POST['name']);
$sql="insert into vehicle_details(x) values('$Bidding_amount')";
$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);

while($er=mysqli_fetch_array($result)){
	echo $er['x'];
}

$qu="SELECT min_bid_amt FROM auctioneer WHERE model_name='$model_name' ";
$qrun=mysqli_query($conn,$qu);
    if(mysqli_num_rows($qrun)){
     
while($row=mysqli_fetch_array($qrun)){
	echo $row['min_bid_amt'];

		  if($Bidding_amount<$row['min_bid_amt']){
			  echo " please enter bidding amount greater than the minimum bidding amount";
			break;
		  }
		
		 
		  if(!empty($_POST['Bidding_amount']) && !empty($_POST['model_name']))
      {
		  
     
	$sql="insert into xyz(bid_amt,model_name,name) 
values('$Bidding_amount' ,'$model_name','$name')";
	  
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
		 
		
	
	}
}	


	  

	  
$conn->close();
?>