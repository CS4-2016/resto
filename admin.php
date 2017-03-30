<?php 
    session_start();
    require_once("dbconn.php"); 

    if(empty($_SESSION['username'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html style="height:100%;">
<head>
    <?php 
        require_once("head.php"); 
    ?>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style_godfrey.css">
    <link rel="stylesheet" href="css/style_paul2.css">
    <link rel="stylesheet" href="css/style_alec.css">
 
</head>

<body style="height:100%;">
  <div class="wrapper">

  <nav class="admin-header-el-siete">
    <header>
        <span class="admin-banner el-img"> El Siete </span>
        <p class="admin-username-header"><i class="fa fa-user" aria="hidden"></i><?php echo $_SESSION['username']; ?></p>
    </header>
    <ul>
      <li><span class="admin-navigation-span">NAVIGATION</span></li>
      <li><a class="admin-sidebar-a" onclick="manage_menu.show()">Manage Menu</a></li>
      <li><a class="admin-sidebar-a" onclick="manage_orders.show()">Manage Orders</a></li>
      <li><a class="admin-sidebar-a" onclick="manage_users.show()">Manage Users</a></li>
      <li><a class="admin-sidebar-a" href="logout.php">Logout</a></li>
    </ul>
  </nav>

    <div class="content-wrapper">
        
    </div>
</div>
   
<div class="modal fade" id="modalCategory" role="dialog">
    <div class="modal-dialog">
    
      <!-- Category Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Category</h4>
        </div>
        <div class="modal-body">
            <table style="width:100%;">
                <tr style="width:inherit;">
                    <td style="width: 150px; margin-right: 30px;">Category name:</td>
                    <td style="width: calc(100% - 150px)"><input style="width:100%; padding:5px;" type="text" id="add_category"></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer" style="border:none">
          <button type="button" class="btn btn-primary" onclick="category.add()" data-dismiss="modal">Add</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>

<div class="modal fade" id="modalDish" role="dialog">
    <div class="modal-dialog">
    
      <!-- Dish Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Dish</h4>
        </div>
        <div class="modal-body">
            <table style="width:100%;">
                <tr style="width:inherit;">
                    <td style="width: 150px; margin-right: 30px;">Dish name:</td>
                    <td style="width: calc(100% - 150px)"><input style="width:100%; padding:5px;" type="text" id="add_category"></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer" style="border:none">
          <button type="button" class="btn btn-primary" onclick="dish.add()" data-dismiss="modal">Add</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>
    
</body>
</html>

<?php 
    require_once("scripts.php");
?>