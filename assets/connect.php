<?php 
$servername="localhost";
$username="root";
$password="";
$database="stms";

$conn=mysqli_connect($servername,$username,$password,$database);
$notification=array(
	'type'=>'',
	'message'=>'',
	'display'=>'none',
);
if(!$conn){
	die("Error");
	// $notification['type']='danger';
	// $notification['message']="connected";
}



 ?>