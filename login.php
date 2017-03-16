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
            <div class="login-resto">
                <div id="container-resto">
                    <form>
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password">
                        <div id="lower">
                            <center><input type="submit" value="Login"></center>
                        </div>
                        <!--/ lower-->
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
    <?php require_once("scripts.php"); ?>
</html>