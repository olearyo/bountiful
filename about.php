<?php session_start();
    include("includes/header.php");

?>



    <div class="hero-about">
      <!-- <h1 class="hero-title">Food is best served together</h1> -->

    </div>


  <main>

  <h1>How it works</h1>
       <div class="how-it-works">
            <div class="first">
                <img class="icons" src="img/choose.svg"/></div>
                <div class="choose">
                    <h2>Choose your meal plan and delivery days</h2>
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


    <div class="faq-1">
        <div class="faq-box">
            <h2 class="green">So... How does it work?</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <div class="faq-box">
            <h2 class="green">So... How does it work?</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

    <div class="faq-2">
        <div class="faq-box">
            <h2 class="green">So... How does it work?</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <div class="faq-box">
            <h2 class="green">So... How does it work?</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>



</section>


<section class="cta">

<h1>Food is best served together</h1>
<h2>Don't you reckon?</h2>

</section>










  </main>
</body>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
    }

    slides[slideIndex-1].style.display = "block";  

    }
</script>
  <?php
    // include("includes/footer.php");

?>