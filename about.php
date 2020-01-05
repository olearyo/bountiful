<?php session_start();
    include("includes/header.php");

?>
<head>
  <title>About Us</title>
</head>


    <div class="hero-about">
      <!-- <h1 class="hero-title">Food is best served together</h1> -->

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


<div class="slideshow">

    <div class="slideshow-box">

        <div class="slides fade">
        <img src="img/slide1.jpg">
        </div>

        <div class="slides fade">
        <img src="img/slide2.jpg">
        </div>

        <div class="slides fade">
        <img src="img/slide3.jpg">
        </div>

    </div>


<i class="fas fa-chevron-circle-left" onclick="plusSlides(-1)"></i>
<i class="fas fa-chevron-circle-right" onclick="plusSlides(1)"></i>

</div>




<h1>Frequently Asked Questions</h1>

<section class="faq">


    <div class="faq">
        <div class="faq-box">
            <h2 class="green">So... How does it work?</h2>
            <p>Each time you order a weekly meal plan with us, we donate to a foodbank near your delivery location. The donation can either be a monetary value of your meal plan, or the same meal plan you ordered. Our goal at bountiful is to share the joy of food to everybody!</p>
        </div>

        <div class="faq-box">
            <h2 class="green">Can I skip weeks?</h2>
            <p>Absolutely! No commitment needed, we know no-one likes being locked into something, so we’ve designed our plan to let you choose exactly when you do—or don’t—want a box.</p>
        </div>


        <div class="faq-box">
            <h2 class="green">How often do you change your menu?</h2>
            <p>New menus are created weekly by our culinary team and feature seasonal, farm fresh ingredients. Once you register with us and order a meal plan, you get to see the full menu item along with your order</p>
        </div>

        <div class="faq-box">
            <h2 class="green">I'm not good at cooking.. are the dishes easy enough?</h2>
            <p>Most of our dishes don't need special equipment and don't take too much time to prep. If you're really unsure about how to cook some things, get our Quick & Easy meal plan, they take less than 30 mins to prepare!</p>

    </div>



</section>


<section class="cta">

      <div class="button-center hero">
      <h1 class="italic-title">Share the love of food</h1>
            <button class="button smaller" onclick="window.location.href = 'register.php';">LET'S GO</button>


    </div>


</section>










  </main>
</body>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(num) {
        showSlides(slideIndex += num);
    }

    function currentSlide(num) {
        showSlides(slideIndex = num);
    }

    function showSlides(num) {
        var i;
        var slides = document.getElementsByClassName("slides");
        if (num > slides.length) {slideIndex = 1}    
        if (num < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
    }

    slides[slideIndex-1].style.display = "block";  

    }
</script>
  <?php
    include("includes/footer.php");

?>