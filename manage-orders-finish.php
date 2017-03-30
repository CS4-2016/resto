<?php 
    session_start();
    
    require_once("dbconn.php");
    $db = new db();
    $db->Connect();

    $id = $_GET['id'];
    $SQL = "SELECT `table_id` FROM `trays` WHERE `id` = '$id'";
    $db->Query($SQL);
    if($db->result)
        $tbl_id = $db->result->fetch_assoc();
    
    $tbl = $tbl_id['table_id'];
    $SQL = "UPDATE `tables` SET `status` = 'unoccupied' WHERE `id` = '$tbl'";
    $db->Query($SQL);
    
    $SQL = "DELETE FROM `orders` WHERE `tray_id` = '$id'";
    $db->Query($SQL);

    $SQL = "DELETE FROM `trays` WHERE `id` = '$id'";
    $db->Query($SQL);

    $db->Close();
?>