<!DOCTYPE html>
<html>
<head>
  <style>
    body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url("images/lbg.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-color: rgb(0,0,0,.8);
    background-blend-mode: overlay;
  }
  .login-box{
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: white;
  }
  .login-box h1{
    float: left;
    font-size: 40px;
    border-bottom: 6px solid orangered;
    margin-bottom: 50px;
    padding: 13px 0;
  }
  .textbox{
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid orangered;
  }
  .textbox i{
    width: 26px;
    float: left;
    text-align: center;
  }
  .textbox input{
    border: none;
    outline: none;
    background: none;
    color: white;
    font-size: 18px;
    width: 80%;
    float: left;
    margin: 0 10px;
  }
  .button{
    width: 100%;
    background: none;
    border: 2px solid orangered;
    color: white;
    padding: 5px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
  }
  .button:hover{
      background: rgb(41, 40, 40);
  }

  .error {
    background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    width: 100%;
    border-radius: 5px;
    margin: 20px auto;
  }
 
 .success {
  background: #D4EDDA;
  color: #40754C;
  padding: 10px;
  width: 95%;
  border-radius: 5px;
  margin: 20px auto;
  }

  .ca {
	font-size: 14px;
	display: inline-block;
	padding: 10px;
	text-decoration: none;
	color: white;
  }
  .ca:hover {
	text-decoration: underline;
  } 

  @media only screen and (max-width: 767px) {
    body {
      /* The file size of this background image is 93% smaller
       * to improve page load speed on mobile internet connections */
       width: 100%;
       height: 150vh;
      background-image: url("images/lbg.jpg");
      background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-color: rgb(0,0,0,.8);
    background-blend-mode: overlay;
      
    }
    .textbox, .btn {
      width:100%;
    }
      }
      .navbar {
  
  margin-left: 0%;
  background-color:#08233b;
  overflow: auto;
  height: 75px;
  margin-top: -0.001%;
}

.navbar a {
  float: right;
  margin-left:10px;
  
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

.active {
  background-color: #fcba03;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    padding-top: 15px;
  }
}

    </style>
	<title>LOGIN</title>
 
  <link rel="stylesheet" type="text/css" href="login.css">
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
<section class="container">
    <div class="login-box">

     <form action="login.php" method="POST">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
       <?php } ?>
       <div class="textbox">
       <i class="fa fa-fw  fa-user" aria-hidden="true"></i>
     	<input type="text" name="uname" placeholder="User Name"><br>
       </div>
       <div class="textbox">
      
       <i class="fa fa-fw fa-lock" aria-hidden="true"></i>
       <input type="password" name="password" placeholder="Password"><br>
       </div>

     	<button name="submit" type="submit" class="button">Login</button>
          <a href="auctioneer.php" class="ca">Create an account for auctioneer</a>
          <a href="bidder.html" class="ca">Create an account for bidder</a>

     </form>
       </div>
       </section>
</body>
</html>