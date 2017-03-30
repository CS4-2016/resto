<?php
    require_once("dbconn.php");
    $db = new db();
    $db->Connect();

    $SQL = "SELECT * FROM `tables` WHERE `status` = 'occupied'";
    $db->Query($SQL);

    if($db->result){
        while($row = $db->result->fetch_assoc()){ ?>
            <div data-i="<?php echo $row['id']; ?>" onclick="manage_orders.view('<?php echo $row['id']; ?>')" class="user-item">Table #<?php echo $row['id']; ?>
            </div> <?php
        }
    }
?>