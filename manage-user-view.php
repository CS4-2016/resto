<?php
  require_once("dbconn.php");
  $db=new db();
  $db->Connect();

  $id = $_GET['id'];
  
  $sql="SELECT * FROM users WHERE id='$id'";
  $db->Query($sql);

  if($db->result)
  {
    $row=$db->result->fetch_assoc();
  }
?>
<div class="header">
    User's Information
</div>
  <article class="main-content">
    <div class="form-group">
      <label>First Name</label>
      <input name="textFname" class="input-control" value="<?php echo $row['firstname']; ?>" disabled/>

      <label class="right-inline">Last Name</label>
      <input name="textLname" class="input-control" value="<?php echo $row['lastname']; ?>" disabled/>
    </div>

    <div class="form-group">
      <label>Position</label>
      <input name="textPosition" class="input-control" style="flex: 6" value="<?php echo $row['type']; ?>" disabled/>  
    </div>

    <div class="form-group">
      <label>Address</label>
      <textarea class="input-control" name="textAddress" disabled><?php echo $row['address']; ?></textarea>
    </div>

    <div class="form-group">
      <label>Email, Contact Number</label>
      <input name="textContact" class="input-control" style="flex: 6" value="<?php echo $row['email']; ?>" disabled />    
      <input name="textEmail" class="input-control" style="flex:1" value="<?php echo $row['contact']; ?>" disabled />    
    </div>
  </article>