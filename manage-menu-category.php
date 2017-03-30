<?php
    require_once("dbconn.php");
    $db = new db();
    $db->Connect();

    $SQL = "SELECT `category_name` FROM `menu_category`";
    $db->Query($SQL);

    if($db->result){
        while($row = $db->result->fetch_assoc()){ ?>
            <div data-i="<?php echo $row['category_name']; ?>" onclick="category.getAll('<?php echo $row['category_name']; ?>')" class="category-item unselectable">
                <table>
                    <tr>
                        <td style="width: 133px;"><?php echo $row['category_name']; ?></td>
                        <td style="position:relative; top: -15px;"><i style="cursor: pointer" class="fa fa-trash-o" aria-hidden="true" type="button" data-toggle="modal" data-target="#modalDeleteCategory"></i></td>
                    </tr>
                </table>
            </div> <?php
        }
    }
?>