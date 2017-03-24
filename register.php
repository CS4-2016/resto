<?php
    require_once("dbconn.php");
?>

<!DOCTYPE html>
<html ng-app="resto">
  <head>
        <?php require_once("head.php"); ?>    
        <link rel="stylesheet" href="css/style_jae.css">
        <link rel="stylesheet" href="css/style_paul.css">
    </head>
    <body>
    <div class="body">
		<div class="grad">
            <div class="login-wrapper">
                <center>
                    <div class="login-header-register">
                        <img src="img/el-banner.png" class="el-img login-banner">
                    </div>
                </center>
                <div class="body-content">
                  <div class="module">
                      <div class="register-p">Create an account</div>
                    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="alert alert-error"></div>
                    <input type="text" class="register-form-name" placeholder="First Name" name="firstname" required />
                    <input  class="register-form-name" type="text" placeholder="Last Name" name="lastname" required />
                    <input class="register-form" type="text" placeholder="User Name" name="username" required />
                    <input class="register-form" type="email" placeholder="Email" name="email" required />
                    <input  class="register-form" type="email" placeholder="Contact Number" name="contactnumber" required />
                    <input  class="register-form" type="password" placeholder="Password" name="password" autocomplete="new-password" required />
                    <input class="register-form" type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required /><br>
                    <input type="submit" value="Register" name="register" class="btnregister" />
                    </form>
                  </div>
                </div> 
            </div>         
        </div> 
    </div>
    </body>
    <?php require_once("scripts.php"); ?>
</html>