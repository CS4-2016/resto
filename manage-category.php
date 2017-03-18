<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flexbox Admin Template</title>

    <script src="js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style_godfrey.css">
</head>

<body>
  <div class="wrapper">

  <nav>

    <header>
      <span></span>
      John Doe
      <a></a>
    </header>

    <ul>
      <li><span>Navigation</span></li>
      <li><a href="manage-category.php" class="active">Dashboard</a></li>
      <li><a href="manage-menu.php">Manage Menu</a></li>
      <li><a>Manage User</a></li>
      <li><a>Logout</a></li>
    </ul>

  </nav>

  <main>

    <h1>Dashboard</h1>

    <div class="flex-grid">
      <div class="manage-category">
          <a href="manage-menu.php">
            <h2>Manage Menu</h2>
            <div class="icon" style="padding-bottom:35px;"><i class="fa fa-cutlery fa-4x"></i></div>
          </a>
      </div>
     <div class="manage-user" >
         <a href="#"><h2>Manage User</h2>
             <div class="icon"><i class="fa fa-user fa-4x" aria-hidden="true"></i></div></a>
      </div>
     <div class="logout" >
         <a href="#"><h2>Log Out</h2>
             <div class="icon"><i class="fa fa-sign-out fa-4x" aria-hidden="true"></i></div></a>
      </div>
    </div>

    

    

  </main>

</div>
  
  
</body>
</html>
