<?php
    require_once("dbconn.php");
    $db = new db();
    $db->Connect();

    $SQL = "SELECT * FROM `users` WHERE `type` != 'admin'";
    $db->Query($SQL);

    if($db->result){
        while($row = $db->result->fetch_assoc()){ ?>
            <div data-i="<?php echo $row['username']; ?>" onclick="manage_users.view('<?php echo $row['id']; ?>')" class="user-item"><?php echo $row['username']; ?>
            </div> <?php
        }
    }
?>