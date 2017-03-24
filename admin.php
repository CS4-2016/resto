<?php 
    session_start();
    require_once("dbconn.php"); 
?>

<!DOCTYPE html>
<html style="height:100%;">
<head>
    <?php 
        require_once("head.php"); 
    ?>
    <link rel="stylesheet" href="css/style_godfrey.css">
    <link rel="stylesheet" href="css/style_paul2.css">
 
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
      <li><a class="admin-sidebar-a" onclick="manage_order.show();">Manage Orders</a></li>
      <li><a class="admin-sidebar-a" onclick="manage_user.show()">Manage Users</a></li>
      <li><a class="admin-sidebar-a">Logout</a></li>
    </ul>
  </nav>

    <div class="content-wrapper">
        
    </div>
</div>
   
  
</body>
</html>

<?php 
    require_once("scripts.php");
?>