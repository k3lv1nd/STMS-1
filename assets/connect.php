<?php 
$servername="localhost";
$username="root";
$password="";
$database="stms";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("Error: Check Your Database Configurations!!");
}



 ?>