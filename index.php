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
		<div class="grad">
            <div class="login-wrapper">
                <center>
                    <div class="login-header">
                        <img src="img/el-banner.png" class="el-img login-banner">
                    </div>
                </center>
                <center>
                    <div class="container-resto">    
                        <form method="post" action="login-authentication.php">
                            <center>
                                <label style="margin-top: 30px;" for="username"><i class="fa fa-user"></i> Username</label>
                                <input class="login-text-box" type="text" id="username" name="username" <?php if(!empty($_SESSION['login-attempt']) && $_SESSION['login-attempt'] == 'username'){ echo "value='".$_SESSION['username-attempt']."'"; }?>>
                                <label style="margin-top: 15px;" for="password"><i class="fa fa-key"></i> Password</label>
                                <input class="login-text-box login-password-text-box" type="password" id="password" name="password"><i class="fa fa-eye show-off" id="showPassword"></i>
                                <a href="forgot-password.php" style="color:#e6b800;">Forgot password?</a>
                                <?php if(!empty($_SESSION['login-attempt']) && $_SESSION['login-attempt'] == 'username'){ ?>
                                    <span class="login-error">Password is incorrect.</span>
    <?php 
                                    unset($_SESSION['login-attempt']);
                                    unset($_SESSION['username-attempt']);
    } ?>
                            </center>
                            <center>
                                <input type="submit" value="LOGIN" class="btn-login">
                                <a href="register.php"><input type="button" value="REGISTER" class="btn-register"></a>
                            </center>
                        </form>
                </div>
                </center>
                
                <div class="login-footer">
                    <p><i class="fa fa-copyright"></i> First Asia Institute of Technology and Humanities - CCIT<br>
                    <i class="fa fa-power-off"></i> Powered by: CS4 2016-2017</p>
                </div>
            </div>
        </div>
    </div>
    </body>
    <?php require_once("scripts.php"); ?>
</html>