<?php session_start();
    include("includes/header.php");

    include("includes/db-config.php");
    

    $stmt = $pdo->prepare("SELECT * FROM `users` WHERE `userId` = ?");
    
    $stmt->execute([$_SESSION['userId']]);
    $row = $stmt->fetch() ?>

<head>
  <title>Your profile</title>
</head>

<div class ="head">
<h1>Hi <?php echo($row["firstName"]); ?>,</h1>
<h2>You can find your menu of the week <a href="menu.php">here</a></h2>
</div>


<div class="form-box">
        <img class="profile-img" src="img/profile.png"/>

        <div class="form-input">
            <h2>Subscription Info</h2>
            <hr>
        </div>

    <?php


$stmt = $pdo->prepare("SELECT * FROM `mealPlanOrder` WHERE `userId` = ?"); 
$stmt->execute([$_SESSION['userId']]);

$row = $stmt->fetch();

if($stmt->rowCount()==1){?>
    <div class="subscription-info">
                <div class="form-input half strong">
                    <p>Plan<p>
                    <p>Meals<p>
                    <p>Delivery Time<p>
                    <p>Status<p>
                </div>

                <div class="form-input half">
<?php
        //show mealplan name
        $mealPlan = $pdo->prepare("SELECT * FROM `mealPlanType` WHERE `mealPlanId` = ? "); 
        $mealPlan->execute([$row["mealPlanId"]]); 
        $mealPlan = $mealPlan ->fetch();
?>
                    <p><?php echo($mealPlan["mealPlanName"]); ?><p>
                    <p><?php echo($row["mealNum"]); ?> meals per week<p>
                    <p><?php echo($row["deliveryTime"]); ?><p>
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
<?php
        //show foodbank name
        $foodPlan = $pdo->prepare("SELECT * FROM `foodbanks` WHERE `foodbankId` = ? "); 
        $foodPlan->execute([$row["foodbankId"]]); 
        $foodPlan = $foodPlan ->fetch();
?>
                <div class="form-input half">
                    <p><?php echo($foodPlan["foodbankName"]); ?><p>
                    <p><?php echo($row["donationType"]); ?><p>
                </div>

            </div>

            <div class="button-center">
                    <button class="button" onclick="window.location.href = 'edit-profile.php';">EDIT</button>
            </div>
    <?php
} else {?>


        <p>You have not subscribed to a meal plan yet, would you like to order?
        <div class="button-center">
            <button class="button" onclick="window.location.href = 'order.php';">ORDER</button>
        </div>
</div>


<?php
    }
    ?>


</div>
</main>


  <?php
    include("includes/footer.php");

?>



