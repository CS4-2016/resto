<?php
    require_once("dbconn.php");
    $db = new db();
    $db->Connect();
    
    $category = $_GET['category'];
    
    $SQL = "INSERT INTO `menu_category`(`category_name`) VALUES ('$category')";
    $db->Query($SQL);
    
    $id = mysqli_insert_id($db->conn);
    
    $SQL = "SELECT * FROM `menu_category` WHERE `id` = $id";
    
    $db->Query($SQL);

    if($db->result){
         while($row = $db->result->fetch_assoc()){ ?>
            
            <div data-i="<?php echo $row['category_name']; ?>" onclick="category.getAll('<?php echo $row['category_name']; ?>')" class="category-item unselectable"><?php echo $row['category_name']; ?>
            </div> <?php
        }
    }
?>