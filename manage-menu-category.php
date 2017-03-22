<?php
    require_once("dbconn.php");
    $db = new db();
    $db->Connect();

    $SQL = "SELECT DISTINCT `category` FROM `menu`";
    $db->Query($SQL);

    if($db->result){
        while($row = $db->result->fetch_assoc()){ ?>
            
            <div data-i="<?php echo $row['category']; ?>" onclick="category.getAll('<?php echo $row['category']; ?>')" class="category-wrapper"><?php echo $row['category']; ?>
            </div> <?php
        }
    }
?>