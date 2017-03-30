<?php
    require_once("dbconn.php");
    $db = new db();
    $db->Connect();

    $id = $_GET['id'];
    $SQL = "SELECT * FROM `menu` WHERE `id` = '$id'";
    
    $db->Query($SQL);
    
    if($db->result)
        $row = $db->result->fetch_assoc();
    
?>
<div class="header">
    Dish Information
</div>
<article class="main-content">
    <form action="change-dish-info.php" enctype="multipart/form-data" method="POST">
    <div class="form-group image">
        <img class="img-responsive img-thumbnail" id="blah" src="menu-img/<?php echo $row['photo']; ?>" alt="your image" style="width: auto; max-height: 200px; margin-left: auto; margin-right: auto; text-align-center;"/>
    </div>
    <div class="form-group">
        <label class="btn btn-default btn-file" style="margin-left: auto; margin-right: auto; text-align-center;">
            Choose File... <input type="file" class="dish-change" id="dishImage" name="dish-image" onchange="readURL(this);" style="display: none;">
        </label>
    </div>    
    <div class="form-group">
      <label>Dish name</label>
      <input type="text" id="textDish" value="<?php echo $row['name']; ?>" name="textDish" class="input-control"/>
    </div>
    <div class="form-group">
      <label>Price</label>
      <input type="number" id="textPrice" value="<?php echo $row['price']; ?>" min="0" name="textPrice" class="input-control"/>
    </div>
    <div class="form-group">
      <label>Description</label>
      <textarea class="input-control" id="textAddress" name="description"><?php echo $row['description']; ?></textarea>
    </div>
    <input type="hidden" id="hiddenDishId" name="dish_id" value="<?php echo $id; ?>" />
    <center><input class="btn btn-primary" type="submit" id="sub" value="SAVE"></center>
        </form>  
</article>
  
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>  
<script>
    $("#textDish", "#textPrice", "#textAddress").on("change", function(){
       // $("#sub").prop("disabled", false);
    });
</script>