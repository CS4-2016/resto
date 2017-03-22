<?php
    require_once("dbconn.php");
    $db = new db();
    $db->Connect();

    $SQL = "SELECT `category_name` FROM `menu_category`";
    $db->Query($SQL);

    if($db->result){
        while($row = $db->result->fetch_assoc()){ ?>
            
            <div data-i="<?php echo $row['category_name']; ?>" onclick="category.getAll('<?php echo $row['category_name']; ?>')" class="category-item"><?php echo $row['category_name']; ?>
            </div> <?php
        }
    }
?>