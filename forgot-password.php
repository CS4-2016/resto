<?php
    session_start();
    if(!empty($_SESSION['username'])){
        unset($_SESSION['username']);
    }
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
		<div class="grad-forgot-password-page">
            <div class="login-wrapper">
                <center>
                    <div class="container-resto-forgotpassword">    
                        <form method="post" action="#">
                            <center>
                                <h1>Forgot Your Password ?</h1>
                                <p>Input your registered email to reset your password</p>

                                <label style="margin-top: 30px;" for="email"><i class="fa fa-user"></i> Email</label>
                                <input class="login-text-box" type="text" id="email" name="email" required>
                        
                            </center>
                            <center>
                                <input type="submit" value="SEND" class="btn-login">
                                <a href="index.php"><input type="button" value="CANCEL" class="btn-register"></a>
                            </center>
                        </form>
                        
                </div>
                </center>
                
          
            </div>
        </div>
    </div>
    </body>
    <?php require_once("scripts.php"); ?>
</html>