

<?php
    $server="remotemysql.com";
    $username="7odeIeTykd";
    $password="vfIvq9VueM";
    $dbname="7odeIeTykd";
    
    
    $conn=mysqli_connect($server,$username,$password,$dbname);
    
    if($conn->connect_error){
    
        die("connection failed".$conn->connect_error);
    }
    $sql="SELECT * FROM  xyz ";
    $result=mysqli_query($conn,$sql) or die("error");
    
    $query="SELECT MAX(bid_amt) as max1 FROM xyz ";
    $qu_result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($qu_result)){
        $output="Maximum Bidding Amount is "." ".$row['max1'];
    }

    $q="SELECT Name as name1 FROM xyz WHERE bid_amt=(SELECT MAX(bid_amt) FROM xyz) ";
    $test=mysqli_query($conn,$q);
    while($row3=mysqli_fetch_array($test)){
        $out="And Bidder Name is "." ".$row3['name1'];
    }
    $que="SELECT model_name as model FROM xyz WHERE bid_amt=(SELECT MAX(bid_amt) FROM xyz)";
    $response=mysqli_query($conn,$que);
    while($row1=mysqli_fetch_array($response)){
        $put="For Model Name "." ".$row1['model'];
    }
    echo"<table>";
    echo "<tr><th>Bidding Amount</th><th>Model Name</th><th>Name</th></tr>";
    
    if(mysqli_num_rows($result)){
    while($row=mysqli_fetch_array($result)){
       
        echo "<tr><td>";
        echo $row['bid_amt'];
        echo "</td><td>";
        echo $row['model_name'];
        echo "</td><td>";
        echo $row['Name'];
        echo "</td></tr>";
    }
    echo"</table>";
}
    ?>
    <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="td.css">
    <title>Top Deals</title>
</head>
<body>

<td width='80' class="center">
    <?php
    
    echo "<b>$output</b>";
    echo"   ";
    echo "<b>$out</b>";
    echo"   ";
    echo "<b>$put</b>";
    ?>
    </td>
    <button class="do" onclick="location.href='pay.php'"type="button">PAY NOW</button>

   
 <a style="margin-left:20px;" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
</body>
</html>
