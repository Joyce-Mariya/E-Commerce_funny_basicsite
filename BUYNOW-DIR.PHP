<?php
$link=mysqli_connect("localhost","root","","Onlinemarket");
if(isset($_POST["username"])){
$username=$_POST["username"];
$phoneno=$_POST["phoneno"];
$address=$_POST["address"];
$city=$_POST['city'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST["confirm_password"];
$sql="INSERT INTO
Users(username,phoneno,address,city,email,password,confirmpassword)
VALUES('$username','$phoneno','$address','$city','$email','$password','$confirmp
assword')";
if(mysqli_query($link,$sql)){
 echo "<script>alert('Registered successfully!')</script>";
}
else{
 echo "Error: " . $sql . ":-" . mysqli_error($link);
 }
}

 mysqli_close($link);
?>
<?php
if(isset($_POST["clprice"])){
session_start();
$_SESSION["clprice"]=$_POST["clprice"];
$_SESSION["clquantity"]=$_POST["clquantity"];
$_SESSION["cdprice"]=$_POST["cdprice"];
$_SESSION["cdquantity"]=$_POST["cdquantity"];
$_SESSION["glprice"]=$_POST["glprice"];
$_SESSION["glquantity"]=$_POST["glquantity"];
$_SESSION["guprice"]=$_POST["guprice"];
$_SESSION["guquantity"]=$_POST["guquantity"];
$_SESSION["srprice"]=$_POST["srprice"];
$_SESSION["srquantity"]=$_POST["srquantity"];
$_SESSION["spprice"]=$_POST["spprice"];
$_SESSION["spquantity"]=$_POST["spquantity"];
$_SESSION["tcprice"]=$_POST["tcprice"];
$_SESSION["tcquantity"]=$_POST["tcquantity"];
$_SESSION["olprice"]=$_POST["olprice"];
$_SESSION["olquantity"]=$_POST["olquantity"];
$_SESSION["mkprice"]=$_POST["mkprice"];
$_SESSION["mkquantity"]=$_POST["mkquantity"];
$_SESSION["spprice"]=$_POST["spprice"];
$_SESSION["spquantity"]=$_POST["spquantity"];
$_SESSION["muprice"]=$_POST["muprice"];
$_SESSION["muquantity"]=$_POST["muquantity"];
$_SESSION["pdprice"]=$_POST["pdprice"];
$_SESSION["pdquantity"]=$_POST["pdquantity"];
$_SESSION["ccpprice"]=$_POST["ccpprice"];
$_SESSION["ccpquantity"]=$_POST["ccpquantity"];
$_SESSION["drprice"]=$_POST["drprice"];
$_SESSION["drquantity"]=$_POST["drquantity"];
$_SESSION["rlprice"]=$_POST["rlprice"];
$_SESSION["rlquantity"]=$_POST["rlquantity"];
$_SESSION["crprice"]=$_POST["crprice"];
$_SESSION["crquantity"]=$_POST["crquantity"];
$_SESSION["kzprice"]=$_POST["kzprice"];
$_SESSION["kzquantity"]=$_POST["kzquantity"];
$_SESSION["scprice"]=$_POST["scprice"];
$_SESSION["scquantity"]=$_POST["scquantity"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>THE RAPUNZEL STORE</title>
<style>
body{
background:url(fh5.jpg);
background-size:cover;
background-attachment:fixed;
}
a:link { text-decoration:none; }
a:visited { text-decoration:none; }
a:hover { text-decoration:none; }
a:active { text-decoration:none; }
.centerimg{
display:block;
margin-left:auto;
margin-right:auto;
}
h1 span{
background-color:#F8F8F8;
}
h3 span{
background-color:rgb(50,0,0);
color:#DCEDC1;
}
p span{
background-color:rgb(171,78,82);
}
td{
color:yellow;
}
</style>
</head>
<body>
<header id="header">
<button onclick="document.location='home.html'" style="float:left;fontsize:30px;margin-left:45px;color:rgb(100,100,100);">Home</button>
<button onclick="document.location='signup.html'" style="float:left;fontsize:30px;margin-right:45px;color:rgb(100,100,100);">Sign
Up</button> 
<button onclick="document.location='shopnow.html'" style="float:left;fontsize:30px;margin-right:45px;color:rgb(100,100,100);">Shop
Now</button>
</header>
<br><br><br><br>
<h1 style="text-align:center;color:purple;"><span>THE RAPUNZEL STORE</span></h1>
<br><br><br><br><br><br>
<form method="POST" action="http://localhost/ITE IRS/billing.php">
<table align="l</tr>
<td>Password</td>
<td><input type="password" name="passwordlog" required></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Pay Bill"><br></td>
</tr>
<tr>
<td colspan=2 align="center">Have not shopped Yet? <a href="shopnow.html"
style="color:red;">Shop Now</a></td>
</tr>
<tr>
<td colspan="2" align="center">
<p>New User? <a href="http://localhost/ITE IRS/sign.php"
style="color:rgb(171,78,82);">Sign Up</a></td>
</tr>
</table>
</form>
<br><br><br><br><br><br>
</body>
</html>

eft" cellpadding="5">
<tr>
<td>Username</td>
<td><input type="text" name="usernamelog" required> </td>
