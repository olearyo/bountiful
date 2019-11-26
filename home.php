<?php session_start();
    include("includes/header.php");

?>



    <div class="hero-image">
      <!-- <h1 class="hero-title">Food is best served together</h1> -->

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



<div class="gray-bg">

  <h1>Latest news</h1>

  <section class="news">
        <article class="news-box">

          <div class="news-img one"></div>
          <a href="#" class="news-link">
             <div class="news-hover"></div>
           </a>
          <div class="news-content">
            <h3 class="news-title">Ontario Needs List Updated</h3>
            <p>The needs list for Ontario has been updated for winter.</p>
            <p class="news-published">Published <a class="news-date" title="date">Nov 20th</a></p>
          </div>
        </article>


        <article class="news-box">

          <div class="news-img two"></div>
          <a href="#" class="news-link">
             <div class="news-hover"></div>
           </a>
          <div class="news-content">
            <h3 class="news-title">Menu of The Week</h3>
            <p>Our updated menu for the coming week is here! </p>
            <p class="news-published">Published <a class="news-date" title="date">Nov 12th</a></p>
          </div>
        </article>



        <article class="news-box">

          <div class="news-img three"></div>
          <a href="#" class="news-link">
             <div class="news-hover"></div>
           </a>
          <div class="news-content">
            <h3 class="news-title">HungerStrike 2019</h3>
            <p>An initiative launched by food banks Canada</p>
            <p class="news-published">Published <a class="news-date" title="date">Nov 20th</a></p>
          </div>
        </article>

    </section>
    
</div>

  </main>

  <?php
    include("includes/footer.php");

?>