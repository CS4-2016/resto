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
        <link rel="stylesheet" href="css/style_andrew.css">
    </head>
    <body>
     <div class="body">
		<div class="grad-forgot-password-page">
            <div class="login-wrapper">
                <center>
                    <div class="container-resto-forgotpassword">    
                        <center>
                            <h1>Success</h1>
                            <h4>Your password will be sent to the email provided. <a href="index.php">Back to Home</a></h4>
                        </center>
                    </div>
                </center>
                
          
            </div>
        </div>
    </div>
    </body>
    <?php require_once("scripts.php"); ?>
</html>