<?php 
ob_start();
session_start();
    include("includes/header.php");
    include("includes/db-config.php");


    $stmt = $pdo->prepare("SELECT * FROM `mealPlanOrder` WHERE `userId` = ?");
    $stmt->execute([$_SESSION['userId']]);
    $row = $stmt->fetch();

?>
<head>
  <title>Order Receipt</title>
</head>


<h1>Thanks for your order!</h1>

<div class="form-box">
<div class="form-container">


            <h2 class="green">Subscription Summary</h2>
            
            <div class="form-input half">

                    <label>Plan</label>

                    <label>Meals</label>

                    <label>First delivery</label> 

                    <label>Delivery time</label>
                    
                    <label>Order total</label>

                    <label>Donation to</label> 

                    <label>Donation type</label>

                    <label>Shipping</label> 

            </div>
<?php
    $stmt = $pdo->prepare("SELECT * FROM `mealPlanType`, `mealPlanOrder` WHERE `mealPlanType`.`mealPlanId`=`mealPlanOrder`.`mealPlanId` and `mealPlanOrder`.`userId` = ?");
    $stmt->execute([$_SESSION['userId']]);
    $row = $stmt->fetch();
?>
            <div class="form-input half">

                    <p><?php echo($row["mealPlanName"]); ?></p>

                    <p><?php echo($row["mealNum"]); ?> meals per week</p>

                    <p><?php echo($row["startDate"]); ?></p> 

                    <p><?php echo($row["deliveryTime"]); ?></p>

                    <p><?php echo "$ ".(($row["price"]*$row["mealNum"])+$row["shipping"]); ?></p>

<?php
        //show foodbank name
        $foodPlan = $pdo->prepare("SELECT * FROM `foodbanks` WHERE `foodbankId` = ? "); 
        $foodPlan->execute([$row["foodbankId"]]); 
        $foodPlan = $foodPlan ->fetch();
?>

                    <p><?php echo($foodPlan["foodbankName"]); ?></p> 

                    <p><?php echo($row["donationType"]); ?></p>

                    <p>$ <?php echo($row["shipping"]); ?></p> 
                    

            </div>
                
            </div>

              <div class="button-center">
                  <button class="button" onclick="window.location.href = 'profile.php';">PROFILE</button>
              </div>
</form>
</div>


  </main>
  <?php
    include("includes/footer.php");

?>