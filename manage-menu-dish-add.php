<?php
    session_start();
    require_once("dbconn.php");
    $db = new db();
    $db->Connect();
    
    $category = $_SESSION['category'];
    $dish = $_GET['dish'];
        
    $SQL = "INSERT INTO `menu`(`name`, `category`,`photo`) VALUES ('$dish','$category', 'default.jpg')";
    $db->Query($SQL);
    
    $id = mysqli_insert_id($db->conn);
    
    $SQL = "SELECT * FROM `menu` WHERE `id` = $id";
    
    $db->Query($SQL);

    if($db->result){
         while($row = $db->result->fetch_assoc()){ ?>
            
            <div data-i="<?php echo $row['name']; ?>" onclick="dish.view('<?php echo $row['id']; ?>')" class="category-item unselectable"><?php echo $row['name']; ?>
            </div> <?php
        }
    }
?>