<?php
    require_once("dbconn.php");
    $db = new db();
    $db->Connect();
    
    $category = $_GET['category'];
    
    $SQL = "SELECT `id`,`name` FROM `menu` WHERE `category` = '$category'";
    $db->Query($SQL);

    if($db->result){
        while($row = $db->result->fetch_assoc()){ ?>

            <div data-i="<?php echo $row['name']; ?>" onclick="dish.get('<?php echo $row['id']; ?>')" class="dish-item"><?php echo $row['name']; ?>
            </div> <?php
        }
    }
?>