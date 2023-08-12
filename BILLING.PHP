<!DOCTYPE html>
<html lang="en">
<head>
<title>The Rapunzel store-Billing</title>
<style>
body{
background:url(fh9.jpg);
background-size:1500px 900px;
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
</style>
</head>
<body>
<header id="header">
<button onclick="document.location='home.html'" style="float:left;fontsize:30px;margin-right:45px;color:rgb(100,100,100);">Home</button>
<button onclick="document.location='signup.html'" style="float:left;fontsize:30px;margin-right:45px;color:rgb(100,100,100);">Sign
Up</button> 
<button onclick="document.location='shopnow.html'" style="float:left;fontsize:30px;margin-right:45px;color:rgb(100,100,100);">Shop
Now</button>
</header>
<br><br><br><br>
<h1 style="text-align:center;color:rgba(0,67,67,0.6);"><span>RAPUNZEL STORE</span></h1>
<br><br><br><br><br><br>
<?php
$link=new mysqli("localhost","root","","Onlinemarket");
if($link->connect_error){
 die("Can't connect database" . $link->connect_error );
}
$user=$_POST['usernamelog'];
$sql="SELECT * FROM Users WHERE Username='$user'";
$result=$link->query($sql);
if(!$result) die("Username not found" . $link->error);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $passcode=$row['password'];
 }
if($passcode==$_POST['passwordlog']){
session_start();
echo "<table align='center' cellpadding='10'
background='https:// $cptot=$_SESSION["clprice"]*$_SESSION["clquantity"];
 echo "<tr> <td>Colours</td> <td>" . $_SESSION['clprice'] . "</td> <td>"
. $_SESSION['clquantity'] . "</td><td>" . $cltot . "</td></tr>";
 $total+=$cltot;
 $sql="SELECT * FROM items WHERE item='Colours'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['clquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Colours'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);

 }
images.pexels.com/photos/4057766/pexels-photo4057766.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'> <tr><th>Item
name</th> <th>Item price</th> <th>Quantity</th> <th>Total Item
Price</th></tr>";
$total=0;
if($_SESSION["clquantity"]!=0){
if($_SESSION["cdquantity"]!=0){
 $tstot=$_SESSION["cdprice"]*$_SESSION["cdquantity"];
 echo "<tr> <td>Conditioner</td> <td>" . $_SESSION['cdprice'] . "</td> <td>" .
$_SESSION['cdquantity'] . "</td><td>" . $cdtot . "</td></tr>";
 $total+=$cdtot;
 $sql="SELECT * FROM items WHERE item='Conditioner'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['cdquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Conditioner'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["glquantity"]!=0){
 $tomtot=$_SESSION["glprice"]*$_SESSION["glquantity"];
 echo "<tr> <td>Gel</td> <td>" . $_SESSION['glprice'] . "</td> <td>" .
$_SESSION['glquantity'] . "</td><td>" . $gltot . "</td></tr>";
 $total+=$gltot;
 $sql="SELECT * FROM items WHERE item='Gel'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['glquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Gel'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["guquantity"]!=0){
 $pottot=$_SESSION["guprice"]*$_SESSION["guquantity"];
 echo "<tr> <td>Glue</td> <td>" . $_SESSION['guprice'] . "</td> <td>" .
$_SESSION['guquantity'] . "</td><td>" . $gutot . "</td></tr>";
 $total+=$gutot;
 $sql="SELECT * FROM items WHERE item='Glue'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['guquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Glue'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["srquantity"]!=0){
 $onitot=$_SESSION["srprice"]*$_SESSION["srquantity"];
 echo "<tr> <td>Serum</td> <td>" . $_SESSION['srprice'] . "</td> <td>" .
$_SESSION['srquantity'] . "</td><td>" . $srtot . "</td></tr>";
 $total+=$srtot;
 $sql="SELECT * FROM items WHERE item='Serum'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['srquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Serum'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["spquantity"]!=0){
 $cftot=$_SESSION["spprice"]*$_SESSION["spquantity"];
 echo "<tr> <td>Spray</td> <td>" . $_SESSION['spprice'] . "</td> <td>" .
$_SESSION['spquantity'] . "</td><td>" . $sptot . "</td></tr>";
 $total+=$sptot;
 $sql="SELECT * FROM items WHERE item='Spray'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['spquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Spray'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["tcquantity"]!=0){
 $mstot=$_SESSION["tcprice"]*$_SESSION["tcquantity"];
 echo "<tr> <td>Tonic</td> <td>" . $_SESSION['tcprice'] . "</td>
<td>" . $_SESSION['tcquantity'] . "</td><td>" . $tctot . "</td></tr>";
 $total+=$tctot;
 $sql="SELECT * FROM items WHERE item='Tonic'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['tcquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Tonic'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["olquantity"]!=0){
 $awwtot=$_SESSION["olprice"]*$_SESSION["olquantity"];
 echo "<tr> <td>Aashirvad-Whole wheat(1kg)</td> <td>" .
$_SESSION['olprice'] . "</td> <td>" . $_SESSION['olquantity'] . "</td><td>" .
$oltot . "</td></tr>";
 $total+=$oltot;
 $sql="SELECT * FROM items WHERE item='Oil'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['olquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Oil'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["mkquantity"]!=0){
 $fgptot=$_SESSION["mkprice"]*$_SESSION["mkquantity"];
 echo "<tr> <td>Mask</td> <td>" . $_SESSION['mkprice'] .
"</td> <td>" . $_SESSION['mkquantity'] . "</td><td>" . $mktot . "</td></tr>";
 $total+=$mktot;
 $sql="SELECT * FROM items WHERE item='Mask'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['mkquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE
item='Mask'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["spquantity"]!=0){
 $actot=$_SESSION["spprice"]*$_SESSION["spquantity"];
 echo "<tr> <td>Shampoo</td> <td>" . $_SESSION['spprice'] . "</td>
<td>" . $_SESSION['spquantity'] . "</td><td>" . $sptot . "</td></tr>";
 $total+=$sptot;
 $sql="SELECT * FROM items WHERE item='Shampoo'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['spquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Shampoo'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["muquantity"]!=0){
 $dbtot=$_SESSION["muprice"]*$_SESSION["muquantity"];
 echo "<tr> <td>Mousse</td> <td>" . $_SESSION['muprice'] . "</td>
<td>" . $_SESSION['muquantity'] . "</td><td>" . $mutot . "</td></tr>";
 $total+=$mutot;
 $sql="SELECT * FROM items WHERE item='Mousse'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['muquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Mousse'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["pdquantity"]!=0){
 $fsftot=$_SESSION["pdprice"]*$_SESSION["pdquantity"];
 echo "<tr> <td>Pomade</td> <td>" . $_SESSION['pdprice'] .
"</td> <td>" . $_SESSION['pdquantity'] . "</td><td>" . $pdtot . "</td></tr>";
 $total+=$pdtot;
 $sql="SELECT * FROM items WHERE item='Pomade'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['pdquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Pomade'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["ccpquantity"]!=0){
 $cartot=$_SESSION["ccpprice"]*$_SESSION["ccpquantity"];
 echo "<tr> <td>comb,clip,pin</td> <td>" . $_SESSION['ccpprice'] .
"</td> <td>" . $_SESSION['ccpquantity'] . "</td><td>" . $ccptot . "</td></tr>";
 $total+=$ccptot;
 $sql="SELECT * FROM items WHERE item='Comb,clip,pin'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['ccpquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Comb,clip,pin'";
$result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["drquantity"]!=0){
 $drtot=$_SESSION["drprice"]*$_SESSION["drquantity"];
 echo "<tr> <td>Dryer</td> <td>" . $_SESSION['drprice'] . "</td> <td>"
. $_SESSION['drquantity'] . "</td><td>" . $drtot . "</td></tr>";
 $total+=$drtot;
 $sql="SELECT * FROM items WHERE item='Dryer'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['drquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Dryer'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["rlquantity"]!=0){
 $abtot=$_SESSION["rlprice"]*$_SESSION["rlquantity"];
 echo "<tr> <td>Roller</td> <td>" . $_SESSION['rlprice'] . "</td>
<td>" . $_SESSION['rlquantity'] . "</td><td>" . $rltot . "</td></tr>";
 $total+=$rltot;
 $sql="SELECT * FROM items WHERE item='Roller'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['rlquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Roller'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["crquantity"]!=0){
 $pcotot=$_SESSION["crprice"]*$_SESSION["crquantity"];
 echo "<tr> <td>Crunchies</td> <td>" . $_SESSION['crprice'] .
"</td> <td>" . $_SESSION['crquantity'] . "</td><td>" . $crtot . "</td></tr>";
 $total+=$crtot;
 $sql="SELECT * FROM items WHERE item='Crunchies'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['crquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE
item='Chrunchies'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["kzquantity"]!=0){
 $ootot=$_SESSION["kzprice"]*$_SESSION["kzquantity"];
 echo "<tr> <td>Kanzashi</td> <td>" . $_SESSION['kzprice'] . "</td> <td>" .
$_SESSION['kzquantity'] . "</td><td>" . $kztot . "</td></tr>";
 $total+=$kztot;
 $sql="SELECT * FROM items WHERE item='Kanzashi'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['kzquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Kanzashi'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
if($_SESSION["scquantity"]!=0){
 $pamtot=$_SESSION["scprice"]*$_SESSION["scquantity"];
 echo "<tr> <td>Shower cap</td> <td>" . $_SESSION['scprice'] . "</td>
<td>" . $_SESSION['scquantity'] . "</td><td>" . $sctot . "</td></tr>";
 $total+=$sctot;
 $sql="SELECT * FROM items WHERE item='Shower cap'";
 $result=$link->query($sql);
 $rows=$result->num_rows;
 for($i=0;$i<$rows;$i++){
 $result->data_seek($i);
 $row=$result->fetch_array(MYSQLI_ASSOC);
 $data=$row['Shop_quantity'];
 }
 $data-=$_SESSION['scquantity'];
 $sql="UPDATE items SET Shop_quantity=$data WHERE item='Shower cap'";
 $result=$link->query($sql);
 if(!$result) die("Failed" . $link->error);
 }
echo "<tr> <td colspan='4' align='center'>Rs.$total</td></tr>";
echo "</table>";
}
else{
 die("Incorrect password");
}
?>
<br><br><br><br><br><br>
</body>
</html>

