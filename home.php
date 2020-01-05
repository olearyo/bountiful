<?php session_start();
    include("includes/header.php");

?>
<head>
  <title>Home</title>
</head>


    <div class="hero-image">
        <div class="form-input">
          <h1 class="hero-title">share the love of food</h1>
          <div class="button-center">
            <button class="button smaller" onclick="window.location.href = 'register.php';">LET'S GO</button>
</div>
        </div>


				</div>
    </div>


  <main>

  <h1>How it works</h1>
       <div class="showcase">
            <div>
                <img class="icons" src="img/icons/menu.png"/>
                <h2>Choose your meal plan</h2>
                <!-- <p class="showcase-item">You can choose from a variety of meal plans as well as set your delivery times.</p> -->


            </div>
            
            <div>
                <img class="icons" src="img/icons/location-pin.png"/>
                <h2>Select a foodbank near you</h2>
                <!-- <p class="showcase-item">Based on your delivery location, we will provide several foodbanks to choose from.</p> -->

            </div>

            <div>
                <img class="icons" src="img/icons/credit-card.png"/>
                <h2>Donate! it's a win-win</h2>
                <!-- <p class="showcase-item">You get to either donate the same meal plan or its monetary value.</p> -->
            </div>
        </div>






<?php 

include("includes/db-config.php");

?>


<div class="gray-bg">

  <h1>Latest News</h1>

  <section class="boxy">
<?php
$stmt = $pdo->prepare("SELECT * FROM `news` ORDER BY `datePublished` DESC;");

$stmt->execute();
while($row = $stmt->fetch()) { ?>


    <article class="container-box">

    <img class="box-img" src="<?php echo($row["imgPath"]); ?>"/>
        <div class="box-hover"></div>
      <div class="box-content">
      <a href="<?php echo($row["link"]); ?>" class="box-link"><h3 class="box-title"><?php echo($row["title"]); ?></h3></a>
        <p><?php echo($row["description"]); ?></p>
        <p class="box-subheader"><?php echo($row["datePublished"]); ?></p>
      </div>
    </article>

<?php
}
?>



  </main>

  <?php
    include("includes/footer-home.php");

?>