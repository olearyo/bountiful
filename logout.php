<?php session_start();
    include("includes/header.php");

?>


<div class="form-box">
        <h1>Logout</h1>
        <div class="form-container">
            <p>Are you sure you want to log out?</p>
            <div class="button-center">
                        <button class="button" onclick="window.location.href = 'process-logout.php';">LOG OUT</button>
                    </div>

        </div>



</div>


  </main>

  <?php
    // include("includes/footer.php");

?>

