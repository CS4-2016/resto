<?php
  require_once("dbconn.php");
  $db=new db();
  $db->Connect();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Flexbox Admin Template</title>
    <?php
      require_once('head.php');
    ?>
    <script src="js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="css/style_godfrey.css">
    <link rel="stylesheet" href="css/style_alec.css">
</head>

<body style="height:100%;">
  <div class="wrapper">

  <nav>

    <header>
      <span></span>
      John Doe
      <a></a>
    </header>

    <ul>
      <li><span>Navigation</span></li>
      <li><a href="manage-category.php">Dashboard</a></li>
      <li><a href="manage-menu.php">Manage Menu</a></li>
      <li><a href="manage-users.php" class="active">Manage User</a></li>
      <li><a>Logout</a></li>
    </ul>

  </nav>

    <div class="content-wrapper">
        <div class="content-header">
            <h1>Manage Users</h1>
        </div>
            <div class="flex-container">
              <div class="flex-item">
                  <div class="header">
                      Users
                  </div>
                  <?php
                    $sql="SELECT * FROM users";
                    $db->Query($sql);

                    if($db->result)
                    {
                      while($row=$db->result->fetch_assoc()){
                    ?>
                       <span><a class="manage-user-link" href="javascript: void(0)" onclick="getUserDetails(<?php echo $row['id'] ?>)"><?php echo $row['firstname']." ".$row['lastname']; ?></a><a class="" href="delete-user.php?id=<?php echo $row['id'] ?>"><i class="fa fa-trash fa-fw delete-icon"></i></a></span><br><br>
                    <?php  }
                    }
                    ?>
              </div>  
              <div class="flex-information user-info">
              </div>
            </div>
    </div>
</div>
  <?php
    require_once('scripts.php');
  ?>


<script>
  function getUserDetails(id){
    $.post('users-info.php', {id: id}, function(o){
      $(".user-info").html(o);
    });
  }
</script>
</body>
</html>
