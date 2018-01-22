<?php 
   include 'connect.php';
   include 'functions.php'; 
   if (($_SERVER['REQUEST_METHOD']  == 'POST')) {
     $username =mysqli_escape_string($conn,validate($_POST['username']));
     $email =mysqli_escape_string($conn,validate($_POST['email']));
     $role =mysqli_escape_string($conn,validate($_POST['role']));
     $password =mysqli_escape_string($conn,validate($_POST['password']));
     $password=sha1($password);
     $result=mysqli_query($conn,"SELECT email FROM users WHERE email ='$email' AND 
      role='$role'");
     $count=mysqli_num_rows($result);

     if ($count==0) {
        $sql="INSERT INTO `users` (`username`, `email`, `password`, `role`) VALUES ( '$username', 
        '$email', '$password', '$role')";
        if (mysqli_query($conn,$sql)) {
          echo "1";
        }else{
          echo "2";
        }
     }else{
        echo "3";
     }
     
   }

 ?>