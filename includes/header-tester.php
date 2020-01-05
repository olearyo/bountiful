<?php
?>


<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="css/core.css" />
    <script src="https://kit.fontawesome.com/b6261917b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/xqv5gtt.css">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">

</head>
<body>

  <header>
    <nav>
    <a id="logo" href="home.php">bountiful</a>

        <p class="menu" id="menu">
            <!-- <a href="home.php">HOME</a> -->
            <a href="about.php">ABOUT</a>
            <a href="menu.php">MENU</a>
            <a href="contact.php">CONTACT</a>

            <?php  if(! isset($_SESSION['userId'])): ?>
              <a href="register.php">REGISTER</a>
              <a href="login.php">LOGIN</a>
            <?php endif; ?>  
            <a href="javascript:void(0);" class="burgerIcon" onclick="showBurger()"><i class="fa fa-bars"></i></a>


          
<!--           
            <a href="register.php">REGISTER</a>
            <a href="login.php">LOGIN</a> -->
            <?php if(isset($_SESSION['userId'])): ?>
              <a href="profile.php">PROFILE</a>
              <a href="logout.php">LOGOUT</a>
            <?php endif; ?>
        </p>
    </nav>
  </header>


  <script>
function showBurger() {
  var getMenu = document.getElementById("menu");
  if (getMenu.className === "menu") {
    getMenu.className += " responsive";
  } else {
    getMenu.className = "menu";
  }
}
</script>