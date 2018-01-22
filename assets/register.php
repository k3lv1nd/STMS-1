   <?php
   $path ='../';
   $page="Register for a New Account";
   include 'connect.php';
   include 'functions.php'; 
   require 'header.php'; 
   if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
     # code...
   }

    ?> 
      <div id="registersection" >
        
          <form id="register" action="" method="post" class="form">
            <div class="form-group form-inline">
              <label style="width:27%;" for="Username">username</label>
              <input style="width:67%" type="username" name="username" class="form-control" placeholder="enter Username" required>
              
            </div>
            <div class="form-group form-inline">
              <label style="width:27%;" for="email">Email</label>
              <input style="width:67%" type="email" name="email" class="form-control" placeholder="enter email" required>
              
            </div>
            <div class="form-group form-inline">
               <label style="width:27%;" for="role">Role</label>
               <select style="width:67%" name="role" class="form-control" required>
                <option value="">Select Role</option>
                 <option value="regularUser">ReqularUser</option>
                 <option value="userManager">User Manager</option>
                 <option value="Admin">Admin</option>
               </select>
            </div>
            <div class="form-group form-inline">
              <label style="width:27%;" for="password">Password</label>
              <input style="width:67%" type="password" name="password" class="form-control" placeholder="enter password" required>
              
            </div>
            <div class="form-group form-inline">
              <label style="width:27%;" for="Confirm Password">Confirm Password</label>
              <input style="width:67%" type="Confirm Password" name="confirmPassword" class="form-control" placeholder="Confirm Password" required>
              
            </div>
            <div>
            <button name='register' type="submit" class="btn btn-primary">Register</button>  <hr>  
            <a href="../index.php" title="Login">Go to Login</a>
            </div>  
          </form>    
      </div>


<?php require 'footer.php'; ?>