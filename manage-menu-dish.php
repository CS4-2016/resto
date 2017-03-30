<?php
    require_once("dbconn.php");
    $db = new db();
    $db->Connect();

    $id = $_GET['id'];
    $SQL = "SELECT * FROM `menu` WHERE `id` = '$id'";
    
    $db->Query($SQL);
    
    if($db->result){
        $row = $db->result->fetch_assoc();
    }
?>
<article class="main-content">
                    <div class="form-group image">
                      <div class="image-dish">
                        <img class="img-responsive img-thumbnail" id="blah" src="menu-img/<?php echo $row['photo']; ?>" alt="your image" style="max-width:200px; max-height:200px;"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="image-dish">
                        <input type='file' onchange="readURL(this);" class="dish-image" style=""/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Dish name</label>
                      <input type="text" value="<?php echo $row['name']; ?>" name="textDish" class="input-control"/>
                    </div>
                    <div class="form-group">
                      <label>Price</label>
                      <input type="number" value="<?php echo $row['price']; ?>" min="0" name="textPrice" class="input-control"/>
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="input-control" name="textAddress"><?php echo $row['description']; ?></textarea>
                    </div>
                  </article>