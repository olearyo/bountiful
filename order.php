<?php session_start();
    include("includes/header.php");

    include("includes/db-config.php");
?>
<head>
  <title>Order Meal Plan</title>
</head>



<div class="form-box">
<form action="process-order.php" method="POST">
<div class="form-container">

    <fieldset class="hidden">
            <h2 class="green">Select a meal plan</h2>
            

                    <div class="form-input">
                    <label for="mealPlanId">Choose your plan</label>

                    <select class="selectStye" name="mealPlanId">
                        <option name="mealPlanId" value="1">Quick N Easy</option>
                        <option name="mealPlanId" value="2">Family</option>
                        <option name="mealPlanId" value="3">Veggie</option>
                    </select>

                    <label for="mealNum">Meals per Week</label>
                            <div class="radio"><input type="radio" name="mealNum" value="2" checked><span>2</div>
                            <div class="radio"><input type="radio" name="mealNum" value="4"><span>4</div>
                            <div class="radio"><input type="radio" name="mealNum" value="6"><span>6</div>
                    </div>
                    <hr>
<?php

$stmt = $pdo->prepare("SELECT * FROM `mealPlanOrder`");
$stmt->execute();
$row = $stmt->fetch();
?>
                    <h2 class="green">$<?php echo($row["shipping"]); ?> shipping total</h2>
                    <hr>

                    <div class="continue">
                        <button class="button" onclick="next()">CONTINUE</button>
                    </div>
    </fieldset>

    <fieldset class="hidden">
        <h2 class="green">Delivery Details</h2>
                <div class="form-input half">
<?php
if(isset($_SESSION['userId'])){

$stmt = $pdo->prepare("SELECT * FROM `users` WHERE `userId` = ?");
$stmt->execute([$_SESSION['userId']]);
$row = $stmt->fetch();
}?>

                    <label for="firstName">First Name</label> 
                    <input id="firstName" type="text" name="firstName" value="<?php if(isset($_SESSION['userId'])){echo($row["firstName"]);} ?>" required />   
                </div>

                <div class="form-input half">
                    <label for="lastName">Last Name</label> 
                    <input id="lastName" type="text" name="lastName" value="<?php if(isset($_SESSION['userId'])){echo($row["lastName"]);} ?>" required />   
                </div>

                <div class="form-input">
                    <label for="address">Address</label> 
                    <input id="address" type="text" name="address" required />   
                </div>

                <div class="form-input half">
                    <label for="apartmentNo">Apartment No.</label> 
                    <input id="apartmentNo" type="text" name="apartmentNo"  />   
                </div>

                <div class="form-input half">
                    <label for="city">City</label> 
                    <input id="city" type="text" name="city" required />   
                </div>

                <div class="form-input half">
                    <label for="province">Province</label> 
                    <select name="province">
                        <option value="NS">Nova Scotia</option>
                        <option value="ON">Ontario</option>
                        <option value="PE">Prince Edward Island</option>
                    </select>
                </div>

                <div class="form-input half">
                    <label for="postalCode">Postal Code</label> 
                    <input id="postalCode" type="text" name="postalCode" placeholder="L5B1N8" required />   
                </div>

                <div class="form-input">
                    <label for="phoneNum">Mobile Number</label> 
                    <input id="phoneNum" type="text" name="phoneNum" required />   
                </div>

                <h2 class="green">Start Date</h2>

                <div class="form-input half">
                    <label for="startDate">Starting From</label> 
                    <input id="startDate" type="date" name="startDate" required />   
                </div>

                <div class="form-input half">
                    <label for="deliveryTime">Delivery Time</label> 
                    <input id="deliveryTime" type="time" name="deliveryTime" required/>   
                </div>


                    <div class="continue">
                        <button class="button button-center" onclick="back()">GO BACK</button>
                        <button class="button button-center" onclick="next()">CONTINUE</button>
                    </div>
    </fieldset>

    <fieldset class="hidden">
            <h2 class="green">Select a foodbank</h2>

                <div class="form-input">
                    <label for="foodbankId">Foodbanks near you</label>
<?php
$stmt = $pdo->prepare("SELECT * FROM `foodbanks`");
$stmt->execute();
while($row = $stmt->fetch()) { ?>
                            <input type="radio" name="foodbankId" value="<?php echo($row["foodbankId"]); ?>" checked><span><?php echo($row["foodbankName"]); ?></span>
                            <legend class="indented"><?php echo($row["foodbankAddress1"]); ?></legend>
                            <legend class="indented"><?php echo($row["foodbankAddress2"]); ?></legend>
                            <hr>
                            <?php
}?>
                </div>

                <div class="form-input">
                    <label for="donationType">How would you like to donate?</label> 
                    <select name="donationType">
                        <option value="Meal per Meal">Meal per Meal</option>
                        <option value="Monetary Value">Monetary Value</option>
                    </select>
                </div>


                <div class="continue">
                        <button class="button" onclick="back()">GO BACK</button>
                        <button class="button" onclick="next()">CONTINUE</button>
                    </div>

    </fieldset>

    <fieldset class="hidden">
            <h2 class="green">Enter payment details</h2>

                <div class="form-input">
                    <label for="cardName">Name on Card</label> 
                    <input id="cardName" type="text" name="cardName" required />   
                </div>


                <div class="form-input">
                    <label for="cardNum">Card Number</label> 
                    <input id="cardNum" type="text" name="cardNum" required />   
                </div>


                <div class="form-input half">
                    <label for="expDate">Expiry Date</label> 
                    <input id="expDate" type="month" name="expDate" required />   
                </div>

                <div class="form-input half">
                    <label for="cvvNum">CVV Number</label> 
                    <input id="cvvNum" type="text" name="cvvNum" placeholder="XXX" required/>   
                </div>


				<div class="form-input">
           			<input class="button" type="submit" name="submit" value="SUBMIT"/>
        		</div>
    </fieldset>

                
            </div>
</form>
</div>


  </main>
<script>
    console.log("connected");

// GET DOM TAG
var getForm = document.getElementsByTagName("fieldset");

// ACTIVE FIELDSET & FIELDSET COUNT
var formNum= 0;
var fieldset = getForm[formNum];
fieldset.className = "show";


// VALIDATION LOOP & GO NEXT FIELDSET FUNCTION
function next() {
    var validation = true;

    var form = document.querySelectorAll("fieldset")[formNum];
    var formCount = form.querySelectorAll("input").length;

    for (i = 0; i < formCount; ++i) {
        var formStyle = form.querySelectorAll("input")[i];
        if (formStyle.getAttribute("type") === "button") {
            //get active button on fieldset
        } else {
            if (formStyle.value === "") {
                formStyle.className = "error";
                validation = false;
                // goes red
            } else {
                if (validation === false) {} else {
                    validation = true;
                // goes green
                }
            }
        };
    };

    if (validation === true) {
        // goes to the next fieldset
        var selection = getForm[formNum];
        selection.className = "hidden";
        formNum = formNum + 1;
        var selection = getForm[formNum];
        selection.className = "show";
       
    }
};

// go back to previous fieldset
function back() {
    getForm[formNum].className = "hidden";
    formNum = formNum - 1;
    getForm[formNum].className = "show";
};

console.log("DONE");
</script>
  <?php
    include("includes/footer.php");

?>
