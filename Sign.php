<!DOCTYPE html>
<html lang="en">
<head>
<title>RAPUNZEL-Sign Up</title>
<style>
h1 span
{ background-color:black;
}
body{
background:#014d4e;
background-size:1550px 770px;
}
td{a:link { text-decoration:none; }
a:visited { text-decoration:none; }
a:hover { text-decoration:none; }
a:active { text-decoration:none; }
.centering
{
display:block;
margin-left:auto;
margin-right:auto;
color:yellow;
}
</style>
</head>
<body>

<header id="header">
<button onclick="document.location='home.html'" style="float:left;fontsize:30px;margin-right:45px;color:rgb(100,100,100);">Home</button>
</header>
<br><br><br><br>
<h1 style="text-align:center;color:#2e4b91;font-family:vanada fontsize:80px;"><span>Register now to get the amazing products from Rapunzel store </span></h1>
<br><br><br><br><br><br>
<form method="POST" action="http://localhost/ITE IRS/buynow_dir.php">
<table align="center" cellpadding="2" width="50%" height ="90%" bgcolor="8076a3" font color="pink" cellspacing="3">
<tr>
<td>Username</td>
<td><input type="text" name="username" required> </td>
</tr>
<tr>
<td>PhoneNo</td>
<td><input type="tel" pattern="[0-9]{10}" name="phoneno" required></td>
</tr>
<tr>
<td>Address</td>
<td><textarea id="address" name="address" rows="9" cols="21" required>
</textarea> </td>
</tr>
<tr>
<td>City</td>
<td><input type="text" name="city" required></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email" required></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" id="password" name="password" required></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" id="confirm_password" name="confirm_password"
required></td>
</tr>
<tr><td colspan="2">
<input type="checkbox" id="terms" name="conditions" required>
<label for="terms">I agree the abobve details are true to my knowledge</label><br>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Sign Up!"><br></td>
</tr>
<td colspan="2" align="center">
<p>Already have registered? <a href="http://localhost/ITE IRS/shopnow.html"
style="color:yellow;">Shop Now!</a></td>
</tr>
</table>
</form>

</body>
</html>
