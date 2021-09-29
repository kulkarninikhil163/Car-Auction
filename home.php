<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styless.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

<head>
    <title>CASH</title>
    <style>
        .title {
    
    color:rgba(233, 162, 10, 0.815);
    font-size:50px;
    stroke-width: 50%;
    text-shadow: #424647;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
   margin-top:49px;
    border-color: #000;
    background-repeat: no-repeat;
    width:68%;
    height: auto;
    background-position: 100%;
    size: cover ;
  }
 
  .rutu{
      text-align:center;
  }
    </style>
</head>
<body>

    <h1 style="font-size: 4vw;" class="headw"><b>WHERE CASH TURN INTO ASSETS</b></h1>
<img class="logo" src="images//yu.jpg" alt="hy">

    <div class="title">
    <img class="title" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/carbon-fiber-shelby-mustang-1600685276.jpg?crop=0.9988636363636364xw:1xh;center,top&resize=480:*">
    </div>
    
   
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fa fa-bars fa-2x" aria-hidden="true" id ="btn" ></i>
        <i class="fa fa-close fa-2x" aria-hidden="true" id ="cancel"></i>
    </label>

<div class="sidebar">
    <header>BIDDER'S BUDDY</header>
    <ul>
        
        <li>
            <a href="view.html"><i class="fa fa-gavel fa-2x" aria-hidden="true"></i><i>BIDDER-CORNER</i></a>
        </li>
        <li>
            <a href="td.php"><i class="fa fa-usd fa-2x" aria-hidden="true"></i><i>TOP DEALS</i></a>
        </li>
        <li>
            <a href="notify.html"><i class="fa fa-bell fa-2x" aria-hidden="true"></i><i>NOTIFICATIONS</i></a>
        </li>
     
    </ul>
</div>

<div class="navbar">
<a href="registermain.html"><i class="fa fa-user-circle" aria-hidden="true"></i>Register</a>
<a href="index1.php"><i class="fa fa-sign-in " aria-hidden="true"></i>Login</a>
  <a href="contact.html"><i class="fa fa-fw fa-envelope"></i> Contact</a>  
  <a href="about.html"><i class="fa fa-fw fa-file"></i>About Us</a>
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>

</div>
<div class="container">
    <div class="form-box">
        
            <form action="" method="POST">
    <input style="width:200px;
    height:40px;
    margin-left:34px;
            font-size:20px;
            border:3px solid;
        " type="text" name="search" placeholder="enter your search here"/><hr>
    <input style=" width:60px;
            height:40px;
            margin-left:120px;
            border:5px solid;" class="hy" type="submit" value=">>"/>
    </form>
    <?php
$server="remotemysql.com";
$username="7odeIeTykd";
$password="vfIvq9VueM";
$dbname="7odeIeTykd";



$conn=mysqli_connect($server,$username,$password,$dbname);

if($conn->connect_error){

	die("connection failed".$conn->connect_error);
}
$output='';
if(isset($_POST['search'])){
    $searchq=$_POST['search'];
    $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
    $query="SELECT model_name FROM auctioneer WHERE model_name LIKE '%$searchq%' ";
    $qrun=mysqli_query($conn,$query);
    if(mysqli_num_rows($qrun)){
 
     while($row = mysqli_fetch_array($qrun)){
         $mname=$row['model_name'];
        
         $output .='<div> '.$mname.' </div>';
     }
    }
}
?>
<div class="rutu">
    <?php
    echo"<h1>";
    print("$output");
    echo "</h1>";
    
    ?>
   </div>
  

    
    <button type="button" class="tog" onclick="document.location.href='logout.php'"><h3><b>Logout</b></h3></button>  
    
     
    </button>
    </div>
    </div>
</div>
</div>
<div class="containerr">
    <div class="section-title line row">
        <div class="col">
            <div class="strikethrough-title">
                <div class="border"></div>
                <h3>Why choose CAR REBELS?</h3>
            </div>
        </div>
    </div>
    <div class="section contain-section col-sm-4">
        <h3>High-quality vehicles</h3>
        <p>We ensure only high-quality vehicles exclusively and directly to car dealers and traders.&nbsp; 
        All cars come with quality car descriptions and inspections.</p>
    </div>
    <div class="section contain-section col-sm-4">
            <h3>
            One secure platform</h3>
            <p>We offer one EU-wide platform to access all our vehicles, one partner to deal with, 
                one way of working and a solid expertise in cross-border sales. 
                </p>
    </div>
    <div class="section contain-section col-sm-4">
                <h3>We take care of you</h3>
                <p>Your single contact person speaks your 
                    language. We offer transport, delivery and financing solutions with reliability. We deliver what we promise.
                </p>
    </div>
</div>
<div class="line narrow row" style="width: 100%"><div class="col"><div class="slider " 
style="box-sizing: border-box; display: block; height: auto; position: relative; visibility: hidden; width: 100%;">
<div aria-live="polite" aria-atomic="true" tabindex="-1" style="position: absolute; left: -10000px; top: auto; 
width: 1px; height: 1px; overflow: hidden;">Slide 1 of 3</div><div class="slider-frame" style="box-sizing: border-box; 
display: block; height: 100%; margin: 0px; overflow: hidden; padding: 0px; position: relative; touch-action: pan-y pinch-zoom;
 transform: translate3d(0px, 0px, 0px);"><ul class="slider-list" style="transform: translate3d(0px, 0px, 0px); position: relative; 
 display: block; margin: 0px; padding: 0px; height: 0px; width: 0px; cursor: pointer; box-sizing: border-box; touch-action: pan-y 
 pinch-zoom;"><li class="slider-slide slide-visible" style="box-sizing: border-box; display: inline-block; height: auto; left: 0px; 
 list-style-type: none; margin: auto 0px; position: absolute; top: 0px; transform: scale(1); transition: transform 0.4s linear 0s; 
 vertical-align: top; width: 0px;"><div class="section" aria-hidden="false" tabindex="0"><h3>High-quality second-hand vehicles</h3>
 <p>We sell high-quality second-hand vehicles exclusively and directly to car dealers and traders.&nbsp; 
     All cars come with quality car descriptions and inspections.</p></div></li>
     <li class="slider-slide" style="box-sizing: border-box; display: inline-block; height: auto; left: 
     0px; list-style-type: none; margin: auto 0px; position: absolute; top: 0px; transform: scale(1); transition: transform 0.4s linear 0s; vertical-align: top; width: 0px;">
<div class="section" aria-hidden="true"><h3>One secure platform</h3><p>
    We offer one EU-wide platform to access all our vehicles, one partner to deal with
    , one way of working and a solid expertise in cross-border sales. It's all about being fast, easy and hassle-free.
    </p></div></li><li class="slider-slide" style="box-sizing: border-box; display: inline-block; height: auto; l
    left: 0px; list-style-type: none; margin: auto 0px; position: absolute; top: 0px; transform: scale(1);
     transition: transform 0.4s linear 0s; vertical-align: top; width: 0px;"><div class="section" aria-hidden="true"><h3>
         We take care of you</h3><p>Your single contact person speaks your language. We offer transport, delivery and f
             inancing solutions. We deliver what we promise.
            </p></div></li></ul></div>
            <div class="slider-control-centerleft" 
             style="position: absolute; top: 50%; left: 0px; transform: translateY(-50%);"><div></div></div>
             <div class="slider-control-centerright"
              style="position: absolute; top: 50%; right: 0px; transform: translateY(-50%);"><div></div></div><div 
              class="slider-control-bottomcenter" style="position: absolute; bottom: 0px; left: 50%; transform: translateX(-50%);">
              <ul style="position: relative; margin: 0px; top: -10px; padding: 0px;"><li style="list-style-type: none; display:
               inline-block;"><button aria-label="slide 1 bullet" style="border: 0px; background: transparent; color: black;
                cursor: pointer; padding: 10px; font-size: 24px; opacity: 1;">•</button></li><li style="list-style-type: none; 
                display: inline-block;"><button aria-label="slide 2 bullet" style="border: 0px; background: transparent; color:
                 black; cursor: pointer; padding: 10px; font-size: 24px; opacity: 0.5;">•</button></li><li style="list-style-type:
                  none; display: inline-block;"><button aria-label="slide 3 bullet" style="border: 0px; background: transparent; 
                  color: black; cursor: pointer; padding: 10px; font-size: 24px; opacity: 0.5;">•</button></li></ul></div><style
                   type="text/css">.slider-slide > img { width: 100%; display: block; }
  .slider-slide > img:focus { margin: auto; }</style></div></div></div>
                    
  <div class="line row"><div class="col-md-6">
      </div><div class="col-md-6"></div></div></div>
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
                        <p><a href="carrebels@gmail.com">carrebels@ves.ac.in</a></p>
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
</body>
</html> 
