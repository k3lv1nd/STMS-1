<?php
require 'assets/header.php';

 ?>

    
      <div class="row" id="loginsection">
        <h1 style=" margin-left: 30px;margin-top: 0px;color: #415d08;">Login</h1>
        <form id="login" action="" method="post" class="form">
          <div class="form-group form-inline">
            <label style="width:15%;" for="email">Email</label>
            <input style="width:80%" type="email" name="email" class="form-control" placeholder="enter email" required>
            
          </div>
          <div class="form-group form-inline">
            <label style="width:15%;" for="password">Password</label>
            <input style="width:80%" type="password" name="password" class="form-control" placeholder="enter password" required>
            
          </div>
          <div>
          <button type="submit" class="btn btn-primary">Login</button>  <hr>  
          <a href="assets/register.php" title="Register New Account" >Create Account</a>
          </div>  
        </form>
      </div>


  
<?php 
require 'assets/footer.php';


 ?>