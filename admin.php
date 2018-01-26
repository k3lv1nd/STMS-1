<?php
session_start();
session_regenerate_id(true);
$page="Admin Login Panel";
include 'assets/connect.php';
include 'assets/functions.php'; 
    $regular_user="";
    $user_manager='';
    $admin='loginactive';
require 'assets/header.php';

 ?>   
      <div class="row" id="loginsection">      
        <form id="login" action="" method="post" class="form" onsubmit="return UserLogin();">
          <div class="form-group form-inline">
            <label style="width:27%; text-align: right;" for="email">Email</label>
            <input style="width:67%" type="email" name="email" class="form-control" placeholder="enter email" required id="email">
            
          </div>
          <div class="form-group form-inline">
            <label style="width:27%; text-align: right;" for="password">Password</label>
            <input style="width:67%" type="password" name="password" class="form-control" placeholder="enter password" required id="password">
            
          </div>
          <input type="hidden" name="role" value="regularUser">

          <div>
          <button type="submit" class="btn btn-primary">Login</button>  <hr>  
          <a href="assets/register.php" title="Register New Account" >Create Account</a>
          </div>  
        </form>
      </div>  
<?php 
$path='';
require 'assets/footer.php';


 ?>