<?php 
session_start();

if (  isset($_SESSION['Username1']) || isset($_SESSION['username']) ) {

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  
  background-size: cover;
  background-repeat: no-repeat;
  margin-top:79px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
footer{
	position: static;
	bottom: 0;
}

@media (max-height:800px){
	footer { position: static; }
	header { padding-top:40px; }
}


.footer-distributed{
	background-color: #363538;
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 30px 30px 30px 30px;
    margin-top: auto;
    height: auto;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 30%;
}

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

/* The company logo */

.footer-distributed .footer-left img{
	width: 30%;
}

.footer-distributed h3 span{
	color:  #e0ac1c;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}


.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #e0ac1c;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 30%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}


@media (max-width: 880px) {

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}
.navbar {
  
  margin-left: 10%;
  background-color:#08233b;
  overflow: auto;
  height: 74px;
  margin-left: 0px;
  margin-top: -5%;
  width:100%;
  height: auto;
}

.navbar a {
  float: right;
  
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

@media screen and (max-width: 200px) {
  .navbar a {
    float: none;
    display: block;
    padding-top: 15px;
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
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="pay1.php" method="POST" onsubmit="event.preventDefault(); validation();" id="myForm">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input style="width: 200px;height: 40px;" type="email" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="Amount"><i class="fa fa-institution"></i> Amount</label>
            <input type="text" id="Amount" name="Amount">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
       
        <input type="submit" value="submit" class="btn">
      </form>
    </div>
  </div>
  
  </div>
</div>
<footer class="footer-distributed">

  <div class="footer-left">
<img src="images\\yu.jpg">
      <h3>About<span>Car Rebels</span></h3>

      <p class="footer-links">
          <a href="#">Home</a>
          |
          <a href="#">Blog</a>
          |
          <a href="#">About</a>
          |
          <a href="#">Contact</a>
      </p>

      <p class="footer-company-name">© 2019 car rebels</p>
  </div>

  <div class="footer-center">
      <div>
          <i class="fa fa-map-marker"></i>
            <p>Pune</p>
      </div>

      <div>
          <i class="fa fa-phone"></i>
          <p>+91 9689090097</p>
      </div>
      <div>
          <i class="fa fa-envelope"></i>
          <p><a href="car_rebels@gmail.com">car_rebels@ves.ac.in</a></p>
      </div>
  </div>
  <div class="footer-right">
      <p class="footer-company-about">
          <span>About the company</span>
          we offer various car for auction.</p>
      <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
      </div>
  
</footer>
<script>
    function validation(){
       var num=document.getElementById("ccnum").value;
       var safenum=document.getElementById("cvv").value;
      

  var cardno = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
  if(!(num.match(cardno)))
       
        {
        window.alert("Not a valid Visa credit card number!");
     
        }
  else if((safenum>1000) || (safenum<100)){
window.alert("invalid credit card safety number")
       }
else{
myForm.submit();
}
    }
    </script>
</body>
</html>
<?php 
}else{
     header("Location: index1.php");
     exit();
}
 ?>