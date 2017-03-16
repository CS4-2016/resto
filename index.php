<?php
    require_once("dbconn.php");
?>

<!DOCTYPE html>
<html ng-app="resto">
    <head>
        <?php require_once("head.php"); ?>        
    </head>
    <body>
        
        <div ng-controller="TestAngular as names">
            <h3 ng-repeat="x in names.names">{{x.name}}</h3>
        </div>
        
    </body>
    <?php require_once("scripts.php"); ?>
</html>