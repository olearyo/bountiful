<?php session_start();
    include("includes/header.php");

?>

<div class ="head">
<h1>Hi Nella,</h1>
<h2>You can find your menu of the week <a href="menu.php">here</a></h2>
</div>

<div class="form-box">
        <img class="profile-img" src="img/profile.png"/>

        <div class="form-input">
            <h2>Subscription Info</h2>
            <hr>
        </div>
            
            <div class="subscription-info">
                <div class="form-input half strong">
                    <p>Plan<p>
                    <p>Meals<p>
                    <p>Delivery Time<p>
                    <p>Status<p>
                </div>

                <div class="form-input half">
                    <p>Family Plan<p>
                    <p>4 meals per week<p>
                    <p>8:00 AM<p>
                    <p>Active<p>
                </div>

            </div>


        <div class="form-input">
            <h2>Donation Info</h2>
            <hr>
        </div>
            
            <div class="subscription-info">
                <div class="form-input half strong">
                    <p>Donation To<p>
                    <p>Donation Type<p>
                </div>

                <div class="form-input half">
                    <p>Mississauga Food Bank<p>
                    <p>Meals<p>
                </div>

            </div>

            <div class="button-center">
                    <button class="button" onclick="window.location.href = 'edit-profile.php';">EDIT</button>
            </div>
</div>


  </main>

  <?php
    // include("includes/footer.php");

?>