<?php 
   include 'connect.php';
   include 'functions.php'; 
   if (($_SERVER['REQUEST_METHOD']  == 'POST')) {
     $username =mysqli_escape_string($conn,validate($_POST['username']));
     $email =mysqli_escape_string($conn,validate($_POST['email']));
     $role =mysqli_escape_string($conn,validate($_POST['role']));
     $password =mysqli_escape_string($conn,validate($_POST['password']));
     echo $username."/".$email."/".$role."/".$password;

     // $sql=

     // if (mysqli_num_rows(mysqli_query($conn,"SELECT email FROM users WHERE email ='$email'"))>0) {
     //   // $notification['type']='error';
     //   // $notification['message']='error';
     //   // $notification['type']='error';

     // }else{

     // }
     
   }

 ?>