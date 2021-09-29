<?php 
$server="remotemysql.com";
$username="7odeIeTykd";
$password="vfIvq9VueM";
$dbname="7odeIeTykd";

$conn=mysqli_connect($server,$username,$password,$dbname);

if($conn->connect_error){

	die("connection failed".$conn->connect_error);
}
session_start(); 
$uname=mysqli_real_escape_string($conn,$_POST['uname']);
$pass=mysqli_real_escape_string($conn,$_POST['password']);
$passw = md5($pass);


if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index1.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index1.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT username FROM auctioneer WHERE username='$uname'  ";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname )  {
            	$_SESSION['username'] = $row['username'];
            
            	$_SESSION['Auctioneer_id'] = $row['Auctioneer_id'];
            	header("Location:welcome.php");
		        exit();
			}
		}
	
			else{
				$sql1 = "SELECT Username1 FROM bidder WHERE Username1='$uname' ";
				
				$result2 = mysqli_query($conn, $sql1);
				if (mysqli_num_rows($result2) === 1) {
					
					
					$row = mysqli_fetch_assoc($result2);
					if ($row['Username1'] === $uname )  {
						$_SESSION['Username1'] = $row['Username1'];
					
						$_SESSION['Bidder_id'] = $row['Bidder_id'];
						header("Location:welc.php");
						exit();
					}
					else{
						
						header("Location: index1.php?error=Incorect User name or password");
	        exit();
					}
				}
				else{
					header("Location: index1.php?error=Incorect User name or password");	
				}
			}
			
		} 
	}else{
		
			header("Location: index1.php?error=Incorect User name or password");
	        exit();
		}
	
	
	

	
