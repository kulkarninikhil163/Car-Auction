<?php
/*$server="remotemysql.com";
$username="7odeIeTykd";
$password="vfIvq9VueM";
$dbname="7odeIeTykd";


$conn=mysqli_connect($server,$username,$password,$dbname);

if($conn->connect_error){

	die("connection failed".$conn->connect_error);
}
$first_name=mysqli_real_escape_string($conn,$_POST['first_name']);
$last_name=mysqli_real_escape_string($conn,$_POST['last_name']);
$company=mysqli_real_escape_string($conn,$_POST['company']);
$mn=mysqli_real_escape_string($conn,$_POST['mn']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$bid=mysqli_real_escape_string($conn,$_POST['bid']);
$area_code=mysqli_real_escape_string($conn,$_POST['area_code']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$subject=mysqli_real_escape_string($conn,$_POST['subject']);
$model=mysqli_real_escape_string($conn,$_POST['model']);
$start=mysqli_real_escape_string($conn,$_POST['start']);
$end=mysqli_real_escape_string($conn,$_POST['end']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$pic=mysqli_real_escape_string($conn,$_POST['file']);
$gender=mysqli_real_escape_string($conn,$_POST['hello']);
$uname=mysqli_real_escape_string($conn,$_POST['uname']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$hashed=hash('sha512',$password);
$name=mysqli_real_escape_string($conn,$_POST['auction']);

if(!empty($_POST['first_name']) && !empty($_POST['last_name']) 
			&& !empty($_POST['company']) && !empty($_POST['email']) 
			&& !empty($_POST['area_code'])
			  && !empty($_POST['phone']) && !empty($_POST['mn']) && !empty($_POST['uname']) && !empty($_POST['password']))
			  {
		$sql="insert into auctioneer(first_name,last_name,address,model_name,email_id,min_bid_amt,contact_no,model_no,area_code,dob,start_date,end_date,pic,gender,auction_name,username,password) 
		values('$first_name' ,'$last_name','$company','$mn','$email','$bid','$phone','$model','$area_code','$dob','$start','$end','$pic','$gender','$name','$uname','$hashed')";
			 
		
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
if (isset($_POST['uname']) && isset($_POST['password']))
    {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$password = validate($_POST['password']);

	

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: auctioneer.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location: auctioneer.php?error=Password is required&$user_data");
	    exit();
	}


	else{

		// hashing the password
        $password = md5($password);

	    $sql1 = "SELECT * FROM auctioneer WHERE username='$uname' ";
		$result = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result) === 0) {
			header("Location:auctioneer.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
			$sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$password', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
			echo"hu";
			header("Location: index1.php?error=successfully created your account&$user_data");
				exit();
		   }
		   	
				
	       
          
		
	}
	
}
	}
else{
	header("Location: index1.php");
	exit();
}



$conn->close();
*/

$server="remotemysql.com";
$username="7odeIeTykd";
$password="vfIvq9VueM";
$dbname="7odeIeTykd";


$conn=mysqli_connect($server,$username,$password,$dbname);

if($conn->connect_error){

	die("connection failed".$conn->connect_error);
}
$first_name=mysqli_real_escape_string($conn,$_POST['first_name']);
$last_name=mysqli_real_escape_string($conn,$_POST['last_name']);
$company=mysqli_real_escape_string($conn,$_POST['company']);
$mn=mysqli_real_escape_string($conn,$_POST['mn']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$bid=mysqli_real_escape_string($conn,$_POST['bid']);
$area_code=mysqli_real_escape_string($conn,$_POST['area_code']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$subject=mysqli_real_escape_string($conn,$_POST['subject']);
$model=mysqli_real_escape_string($conn,$_POST['model']);
$start=mysqli_real_escape_string($conn,$_POST['start']);
$end=mysqli_real_escape_string($conn,$_POST['end']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$pic=mysqli_real_escape_string($conn,$_POST['file']);
$gender=mysqli_real_escape_string($conn,$_POST['hello']);
$uname=mysqli_real_escape_string($conn,$_POST['uname']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$hashed=hash('sha512',$password);
$name=mysqli_real_escape_string($conn,$_POST['auction']);

if(!empty($_POST['first_name']) && !empty($_POST['last_name']) 
			&& !empty($_POST['company']) && !empty($_POST['email']) 
			&& !empty($_POST['area_code'])
			  && !empty($_POST['phone']) && !empty($_POST['mn']) && !empty($_POST['uname']) && !empty($_POST['password']))
			  {
		$sql="insert into auctioneer(first_name,last_name,address,model_name,email_id,min_bid_amt,contact_no,model_no,area_code,handed,dob,start_date,end_date,pic,gender,auction_name,username,password) 
		values('$first_name' ,'$last_name','$company','$mn','$email','$bid','$phone','$model','$area_code','$subject','$dob','$start','$end','$pic','$gender','$name','$uname','$hashed')";
		
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

			
if (isset($_POST['uname']) && isset($_POST['password']))
    {
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$password = validate($_POST['password']);

	
	

	$user_data = 'uname='. $uname. '&name='. $name;

	

	if (empty($uname)) {
		header("Location: auctioneer.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location: auctioneer.php?error=Password is required&$user_data");
	    exit();
	}
	else{

		// hashing the password
       

	    
			 
		$sql2 = "insert into users(usersname, password) values('$uname', '$hashed')";	
		$result2 = mysqli_query($conn, $sql2);
           if ($result2) {
			echo"hu";
			header("Location: index1.php?error=successfully created your account&$user_data");
				exit();
		   }
		
		
	}

	
	       
          
		
	
	
}
	
else{
	header("Location: index1.php");
	exit();
}



$conn->close();

?>