<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Welcome <?php  echo $_SESSION['fname']; ?> </title>
        
        <!-- The stylesheets -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>

    <h1>User Page</h1>
        <div id="main">
      
      <?php if($_SESSION['user_check']):?>
        <div id="avatar" style="background-image:url(<?php echo $_SESSION['dp']?>)"></div>
        <p class="greeting">Welcome, <b><?php echo htmlspecialchars($_SESSION['fullname'])?></b></p>
        <p class="greeting">( <b><?php echo htmlspecialchars($_SESSION['user_check'])?> )</b></p>
              <a href="logout.php" class="logoutButton">Logout</a>

      <?php else:?>
             <?php header("location: index.php");?>
            <?php endif;?>

        </div>
    
        
    </body>
</html>