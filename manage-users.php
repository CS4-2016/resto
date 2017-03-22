<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Flexbox Admin Template</title>
    <?php
    require_once('head.php');
    ?>
    <script src="js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
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
      <li><a class="active">Manage Menu</a></li>
      <li><a href="manage-user.php">Manage User</a></li>
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
              </div>  
              <div class="flex-information">
                  <div class="header">
                      User's Information
                  </div>
                    <article class="main-content">
                      <div class="form-group">
                        <label>First Name</label>
                        <input name="textFname" class="input-control" disabled/>

                        <label class="right-inline">Last Name</label>
                        <input name="textLname" class="input-control" disabled/>
                      </div>

                      <div class="form-group">
                        <label>Position</label>
                        <input name="textPosition" class="input-control" style="flex: 6" disabled/>  
                      </div>

                      <div class="form-group">
                        <label>Address</label>
                        <textarea class="input-control" name="textAddress" disabled> </textarea>
                      </div>

                      <div class="form-group">
                        <label>City,State,Zip</label>
                        <input name="textCity" class="input-control" style="flex: 6" disabled />    
                        <input name="textState" class="input-control" style="flex:1" disabled />    
                        <input name="textZip" class="input-control" style="flex:2" disabled />
                      </div>
                    </article>
              </div> 
            </div>
    </div>
</div>
</body>
</html>
