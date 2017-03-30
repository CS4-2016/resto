                <div class="header">                    
                    Menu
                    <span class="category-flex-cheat" flex></span>
                    <i style="cursor: pointer" class="fa fa-plus fa-category" aria-hidden="true" type="button" data-toggle="modal" data-target="#modalDish"></i>
                </div>
<?php
    session_start();
    require_once("dbconn.php");
    $db = new db();
    $db->Connect();
    
    $category = $_GET['category'];
    
    $SQL = "SELECT `id`,`name` FROM `menu` WHERE `category` = '$category'";
    $db->Query($SQL);
    
    $_SESSION['category'] = $category;
?>
    <div class="dish-wrapper">
<?php
    if($db->result){
        while($row = $db->result->fetch_assoc()){ ?>

            <div data-i="<?php echo $row['name']; ?>" onclick="dish.view('<?php echo $row['id']; ?>')" class="dish-item">
                <table>
                    <tr>
                        <td style="width: 133px;"><?php echo ucwords(strtolower($row['name'])); ?></td>
                        <td style="position:relative; top: -15px;"><i style="cursor: pointer" class="fa fa-trash-o" aria-hidden="true" type="button" data-toggle="modal" data-target="#modalDeleteDish"></i></td>
                    </tr>
                </table>
            </div> <?php
        }
    } ?>
    </div>
