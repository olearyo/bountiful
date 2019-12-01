<?php session_start();
    include("includes/header.php");

?>



    <div class="hero-image">
      <h1 class="hero-title">Food is best served together</h1>

    </div>


  <main>

  <h1>How it works:</h1>
       <div class="showcase">
            <div>
                <img class="icons" src="img/choose.svg"/>
            </div>
            <div>
                <img class="icons" src="img/deliver.svg"/>
            </div>
            <div>
                <img class="icons" src="img/donate.svg"/>
            </div>
        </div>

        <div class="showcase-title">
            <div class="choose">
                <h2>Choose your meal plan</h2>
            </div>
            <div class="deliver">
                <h2>Select a foodbank near you</h2>
            </div>
            <div class="donate">
                <h2>Donate! it's a win-win</h2>
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
      <a href="#" class="box-link">
        <div class="box-hover"></div>
      </a>
      <div class="box-content">
        <h3 class="box-title"><?php echo($row["title"]); ?></h3>
        <p><?php echo($row["description"]); ?></p>
        <p class="box-subheader"><?php echo($row["datePublished"]); ?></p>
      </div>
    </article>

<?php
}
?>

<!-- <div class="gray-bg">

  <h1>Latest news</h1>

  <section class="boxy">
        <article class="container-box">

          <img class="box-img" src="img/news1.jpg"/>
          <a href="#" class="box-link">
             <div class="box-hover"></div>
           </a>
          <div class="box-content">
            <h3 class="box-title">Ontario Needs List Updated</h3>
            <p>The needs list for Ontario has been updated for winter.</p>
            <p class="box-subheader">Published <a class="box-date" title="date">Nov 20th</a></p>
          </div>
        </article>


        <article class="container-box">

        <img class="box-img" src="img/news2.jpg"/>
          <a href="#" class="news-link">
             <div class="box-hover"></div>
           </a>
          <div class="box-content">
            <h3 class="box-title">Menu of The Week</h3>
            <p>Our updated menu for the coming week is here! </p>
            <p class="box-subheader">Published <a class="box-date" title="date">Nov 12th</a></p>
          </div>
        </article>



        <article class="container-box">

        <img class="box-img" src="img/news3.jpg"/>
          <a href="#" class="box-link">
             <div class="box-hover"></div>
           </a>
          <div class="box-content">
            <h3 class="box-title">HungerStrike 2019</h3>
            <p>An initiative launched by food banks Canada</p>
            <p class="box-subheader">Published <a class="box-date" title="date">Nov 20th</a></p>
          </div>
        </article>

    </section>
    
</div> -->

  </main>

  <?php
    include("includes/footer.php");

?>