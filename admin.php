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
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style_godfrey.css">
    <link rel="stylesheet" href="css/style_paul2.css">
 
</head>

<body style="height:100%;">
  <div class="wrapper">

  <nav>

    <header>
        <?php echo $_SESSION['username']; ?> 
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

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/prefixfree.min.js"></script>
<script type="text/javascript" src="js/admin.js"></script>