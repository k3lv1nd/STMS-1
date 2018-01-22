<?php
$page="Login Panel";
include 'assets/connect.php';
include 'assets/functions.php'; 
require 'assets/header.php';

 ?>

    
      <div class="row" id="loginsection">
      
        <form id="login" action="" method="post" class="form">
          <div class="form-group form-inline">
            <label style="width:27%; text-align: right;" for="email">Email</label>
            <input style="width:67%" type="email" name="email" class="form-control" placeholder="enter email" required>
            
          </div>
          <div class="form-group form-inline">
            <label style="width:27%; text-align: right;" for="password">Password</label>
            <input style="width:67%" type="password" name="password" class="form-control" placeholder="enter password" required>
            
          </div>
          <div>
          <button type="submit" class="btn btn-primary">Login</button>  <hr>  
          <a href="assets/register.php" title="Register New Account" >Create Account</a>
          </div>  
        </form>
      </div>


  
<?php 

require 'assets/footer.php';

$path='';
 ?>