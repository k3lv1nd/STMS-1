   <?php
   $path ='../';
   $page="Register for a New Account";
   include 'connect.php';
   include 'functions.php'; 
   require 'header.php'; 
    ?> 
      <div id="registersection" >
        
          <form id="register" class="form" onsubmit="return RegisterNewUser();">
            <div class="form-group form-inline">
              <label style="width:27%;" for="Username">username</label>
              <input id="username" style="width:67%" type="username" name="username" class="form-control" placeholder="enter Username" required>
              
            </div>
            <div class="form-group form-inline">
              <label style="width:27%;" for="email">Email</label>
              <input id="email" style="width:67%" type="email" name="email" class="form-control" placeholder="enter email" required>
              
            </div>
            <div class="form-group form-inline">
               <label style="width:27%;" for="role">Role</label>
               <select id="role" style="width:67%" name="role" class="form-control" required>
                <option value="">Select Role</option>
                 <option value="regularUser">ReqularUser</option>
                 <option value="userManager">User Manager</option>
                 <option value="Admin">Admin</option>
               </select>
            </div>
            <div class="form-group form-inline">
              <label style="width:27%;" for="password">Password</label>
              <input id="password" style="width:67%" type="password" name="password" class="form-control" placeholder="enter password" min="6" required>
              
            </div>
            <div class="form-group form-inline">
              <label style="width:27%;" for="Confirm Password">Confirm Password</label>
              <input id="confirmPassword" style="width:67%" type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password" required min="6">

              <small id="error" style="margin-left: 28%; color: red;"></small>
            </div>
            <div>
            <button name='register' type="submit" class="btn btn-primary">Register</button>  <hr>  
            <a href="../index.php" title="Login" id="a_login" 
            style="color: #0015ff;padding: 7px;text-decoration: none;">Go to Login</a>
            </div>  
          </form>    
      </div>


<?php require 'footer.php'; ?>