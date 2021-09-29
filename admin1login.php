<?php

$uname="admin";
$pwd="admin";

session_start();

if(isset($_SESSION['uname'])){
    echo "<h1>Welcome ".$_SESSION['uname']."</h1>";

    echo "<a href='admin.php'>ADMIN PANEL</a><br>";

    echo "<br><a href='admin1.html'><input type=button value=logout name=logout</a>";
}
else{
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
        $_SESSION['uname']=$uname;
        echo "<script>location.href='admin.php'</script>";

    }

    else{
        echo "<script>alert('Admin credentials are invalid')</script>";
        echo "<script>location.href='admin1.html'</script>";
    }
}
session_destroy();

?>
