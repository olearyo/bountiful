<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/core.css" />
    <script src="https://kit.fontawesome.com/b6261917b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/xqv5gtt.css">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">

</head>

<nav class="nav" id="greenNav">
  <a href="home.php" id="logo" class="active">bountiful</a>
        <a class="myLinks" href="about.php">about</a>
        <a class="myLinks" href="menu.php">menu</a>
        <a class="myLinks" href="contact.php">contact</a>
        <?php  if(! isset($_SESSION['userId'])): ?>
            <a class="myLinks" href="register.php">register</a>
            <a class="myLinks" href="login.php">login</a>
        <?php endif; ?>  

        <?php if(isset($_SESSION['userId'])): ?>
              <a class="myLinks" href="profile.php">profile</a>
              <a class="myLinks" href="logout.php">logout</a>
            <?php endif; ?>
        <a href="javascript:void(0);" class="icon" onclick="mobileNav()"><i class="fa fa-bars"></i></a>
        </nav>


<script>
function mobileNav() {
  var getNav = document.getElementById("greenNav");
  if (getNav.className === "nav") {
    getNav.className += " responsive";
  } else {
    getNav.className = "nav";
  }
}
</script>

</body>
</html>