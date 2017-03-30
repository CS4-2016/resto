<?php 
    session_start();
    
    require_once("dbconn.php");
    $db = new db();
    $db->Connect();

    $id = $_GET['id'];
    $SQL = "UPDATE `orders` SET `status` = 'served' WHERE `id` = '$id'";
    
    $db->Query($SQL);
?>