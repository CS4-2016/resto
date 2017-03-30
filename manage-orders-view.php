<?php
    require_once("dbconn.php");
    $db=new db();
    $db->Connect();

    $id = $_GET['id'];

    $sql="SELECT * FROM `orders` WHERE tray_id='$id'";
    $db->Query($sql);
    $orderList = Array();
    
    if($db->result)
        while($row = $db->result->fetch_assoc())
            $orderList[] = $row;   
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
        
        <?php for($x = 0; $x<count($orderList); $x++){ 
                $menu_id = $orderList[$x]['menu_id'];
                $SQL = "SELECT `name` FROM `menu` WHERE `id` = '$menu_id'"; 
                
                $db->Query($SQL);
                if($db->result)
                    $name = $db->result->fetch_assoc();                
        ?>
                <tr>
                    <td><?php echo $name['name']; ?></td>
                    <td><?php echo $orderList[$x]['qty']; ?></td>
                    <td>
                        <?php if($orderList[$x]['status'] == 'not_yet_served'){ ?>
                            <center><button onclick="manage_orders.serve(<?php echo $orderList[$x]['id']; ?>)" style="text-align: center;" class="btn btn-warning">Serve</button>
                            &nbsp;&nbsp;
                            <button onclick="manage_orders.cancel(<?php echo $orderList[$x]['id']; ?>)" class="btn btn-danger">Cancel</button></td></center>
                        <?php } 
                              else if($orderList[$x]['status'] == 'served'){ ?>
                            <center><button class="btn btn-success">Served</button></center>
                        <?php } ?>
                </tr>
        <?php } ?>
    </tbody>
  </table>
</article>