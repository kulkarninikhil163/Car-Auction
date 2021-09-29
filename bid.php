<?php
$server="remotemysql.com";
$username="7odeIeTykd";
$password="vfIvq9VueM";
$dbname="7odeIeTykd";


$conn=mysqli_connect($server,$username,$password,$dbname);

if($conn->connect_error){

	die("connection failed".$conn->connect_error);
}
$fn=mysqli_real_escape_string($conn,$_POST['first_name']);
$ln=mysqli_real_escape_string($conn,$_POST['last_name']);
$un=mysqli_real_escape_string($conn,$_POST['uname']);
$pwd=mysqli_real_escape_string($conn,$_POST['password']);
$phn=mysqli_real_escape_string($conn,$_POST['phone']);
$db=mysqli_real_escape_string($conn,$_POST['dob']);
$ac=mysqli_real_escape_string($conn,$_POST['area_code']);
$h=mysqli_real_escape_string($conn,$_POST['hello']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$company=mysqli_real_escape_string($conn,$_POST['company']);
$hashed=hash('sha512',$pwd);



if(!empty($_POST['first_name']) && !empty($_POST['last_name']) 
    && !empty($_POST['company']) && !empty($_POST['uname'])  && !empty($_POST['password'])  && !empty($_POST['phone'])  && !empty($_POST['dob'])  
    && !empty($_POST['area_code'])  && !empty($_POST['hello']) 
	&& !empty($_POST['email']))
      {
$sql="insert into bidder(first_name,last_name,address,Username1,password,email_id,area_code,contact_no,dob,gender) 
values('$fn' ,'$ln','$company','$un','$hashed','$email','$ac','$phn','$db','$h')";
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
		header("Location:bidder.html?error=User Name is required&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location:bidder.html?error=Password is required&$user_data");
	    exit();
	}


	else{

		// hashing the password
      

	    

		if (mysqli_num_rows($result) === 0) {

			header("Location:bidder.html?error=The username is taken try another&$user_data");
	        exit();
		}else {
			$sql2 = "INSERT INTO users(username, password) VALUES('$uname', '$password')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
			
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

?>