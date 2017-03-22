<?php
  require_once("dbconn.php");
  $db=new db();
  $db->Connect();

  $id = $_GET['id'];
  
  $sql="DELETE FROM users WHERE id='$id'";
  $db->Query($sql);

  if($db->result)
  {
    header("Location: manage-users.php");
  }
?>