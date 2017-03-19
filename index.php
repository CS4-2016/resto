<?php
    require_once("dbconn.php");
?>

<!DOCTYPE html>
<html ng-app="resto">
    <head>
        <?php require_once("head.php"); ?>        
    </head>
    <body>
    
     <div class="body">
		<div class="grad">
            <div class="login-wrapper">
                <center>
                    <div class="login-header">
                        <img src="img/el-banner.png" class="el-img login-banner unselectable">
                    </div>
                </center>
                <center>
                    <div class="container-resto">    
                    <center>
                        <label style="margin-top: 30px;" for="username"><i class="fa fa-user"></i> Username</label>
                        <input class="login-text-box" type="text" id="username" name="username">
                        <label style="margin-top: 15px;"for="password"><i class="fa fa-key"></i> Password</label>
                        <input class="login-text-box login-password-text-box" type="password" id="password" name="password"><i class="fa fa-eye show-off" id="showPassword"></i>
                    </center>
                    <center><input type="submit" value="LOGIN" class="btn-login"></center>
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