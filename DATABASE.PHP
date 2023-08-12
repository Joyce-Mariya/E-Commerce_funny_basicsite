
<?php
$link=new mysqli("localhost","root","");
if($link->connect_error){
 die("Connection failed" . $link->connect_error);
 }
$sql="CREATE DATABASE Onlinemarket";
if($link->query($sql)===TRUE){
 echo "Database created succesfully";
 }
else{
 echo "Database creation failed" . $link->error;
 }
if(mysqli_select_db($link,"kyka")){
 echo "Connection to database established successfully" . "<br>";

}
$link->close();
?>
