<?php
$link=new mysqli("localhost","root","","Onlinemarket");
if($link->connect_error){
 die("Connection failed" . $link->connect_error);
 }
$sql = "CREATE TABLE Users (
 username VARCHAR(50) NOT NULL PRIMARY KEY,
 phoneno VARCHAR(50) NOT NULL,
 address VARCHAR(50) NOT NULL,
 city VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
 password VARCHAR(50) NOT NULL,
 confirmpassword VARCHAR(50) NOT NULL
)";
$result=$link->query($sql);
if(!$result){
 die("Cant create table " . $link->error);
 }
?>
