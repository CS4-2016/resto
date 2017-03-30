<?php
    require_once("dbconn.php");
    $db=new db();
    $db->Connect();

    $id = $_GET['id'];

    $sql="SELECT * FROM `orders` WHERE tray_id='$id'";
    $db->Query($sql);

    $orderList = Array();
?>
<div class="header">
    Orders 
</div>
<article class="main-content">
    <table class="table">
    <thead>
      <tr>
        <th>Order</th>
        <th>Qty</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php if($db->result)
            while($row = $db->result->fetch_assoc()){
                $orderList[] = $row; ?>
                <tr>
                    <td>Default</td>
                    <td>Defaultson</td>
                    <td>def@somemail.com</td>
                </tr>      
        } ?>
<!--
      <tr class="success">
        <td>Success</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="danger">
        <td>Danger</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="info">
        <td>Info</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr class="warning">
        <td>Warning</td>
        <td>Refs</td>
        <td>bo@example.com</td>
      </tr>
      <tr class="active">
        <td>Active</td>
        <td>Activeson</td>
        <td>act@example.com</td>
      </tr>
-->
    </tbody>
  </table>
</article>

  