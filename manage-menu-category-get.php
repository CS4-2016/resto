<?php
    require_once("dbconn.php");
    $db = new db();
    $db->Connect();
    
    $category = $_GET['category'];
    
    $SQL = "SELECT `name` FROM `menu` WHERE `category` = '$category'";

    $db->Query($SQL);

    if($db->result){
        while($row = $db->result->fetch_assoc()){ ?>

            <div data-i="<?php echo $row['name']; ?>" onclick="category.getAll('<?php echo $row['name']; ?>')" class="category-wrapper"><?php echo $row['name']; ?>
            </div> <?php
        }
    }
?>