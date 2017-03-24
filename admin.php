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
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style_godfrey.css">
    <link rel="stylesheet" href="css/style_paul2.css">
    <link rel="stylesheet" href="css/style_alec.css">
 
</head>

<body style="height:100%;">
  <div class="wrapper">

  <nav>

    <header>
        <span class="admin-banner el-img"> El Siete </span>
        <span class="admin-username-header"><?php echo $_SESSION['username']; ?></span>
    </header>

    <ul>
      <li><span>Navigation</span></li>
      <li><a class="active" onclick="manage_menu.show()">Manage Menu</a></li>
      <li><a href="manage-user.php">Manage User</a></li>
      <li><a>Logout</a></li>
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