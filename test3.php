<?php session_start();
    include("includes/header.php");

?>


<div class="form-box">
<form action="process-order.php" method="POST">
<div class="form-container">

    <fieldset class="hidden">
            <h2 class="green">Select a meal plan</h2>
            

                    <div class="form-input">
                    <label for="mealNum">Meals per Week</label>
                            <input type="radio" name="mealNum" value="2" checked> 2
                            <input type="radio" name="mealNum" value="4"> 4
                            <input type="radio" name="mealNum" value="6"> 6
                    </div>
                    <hr>
                    <h2>$6.99 per portion</h2>
                    <hr>

                    <div class="continue">
                        <button class="button" onclick="next()">CONTINUE</button>
                    </div>
    </fieldset>

    <fieldset class="hidden">
        <h2 class="green">Delivery Details</h2>
                <div class="form-input half">
                    <label for="firstName">First Name</label> 
                    <input id="firstName" type="text" name="firstName" required />   
                </div>

                <div class="form-input half">
                    <label for="lastName">Last Name</label> 
                    <input id="lastName" type="text" name="lastName" required />   
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
                    <input id="postalCode" type="text" name="postalCode" placeholder="XXXXXX" required />   
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
                        <button class="button" onclick="next()">CONTINUE</button>
                    </div>
    </fieldset>

    <fieldset class="hidden">
            <h2 class="green">Select a foodbank</h2>
            
                <div class="form-input">
                    <label for="foodbankId">Foodbanks near you</label>
                            <input type="radio" name="foodbankId" value="1" checked> The Mississauga Food Bank
                            <input type="radio" name="foodbankId" value="2"> Eden Community Food Bank
                            <input type="radio" name="foodbankId" value="3"> The Compass
                </div>

                <div class="form-input half">
                    <label for="donationType">How would you like to donate?</label> 
                    <select name="donationType">
                        <option value="meal">Meal per Meal</option>
                        <option value="monetary">Monetary Value</option>
                    </select>
                </div>


                    <div class="continue">
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
var getTag = document.getElementsByTagName("fieldset");

// ACTIVE FIELDSET & FIELDSET COUNT
var formNum= 0;
var fieldset = getTag[formNum];
fieldset.className = "show";


// VALIDATION LOOP & NEXT FUNCTION
function next() {
    var validation = true;

    var forms = document.querySelectorAll("fieldset")[formNum];
    var formsCount = forms.querySelectorAll("input").length;

    for (i = 0; i < formsCount; ++i) {
        var formStyle = forms.querySelectorAll("input")[i];
        if (formStyle.getAttribute("type") === "button") {
            // nothing happens
        } else {
            if (formStyle.value === "") {
                formStyle.className = "error";
                validation = false;
            } else {
                if (validation === false) {} else {
                    validation = true;
                }
            }
        };
    };
    if (validation === true) {
        // goes to the next step
        var selection = getTag[formNum];
        selection.className = "hidden";
        formNum = formNum + 1;
        var selection = getTag[formNum];
        selection.className = "show";
       
    }
};

// // goes one step back
// function back() {
//     getTag[formNum].className = "hidden";
//     formNum = formNum - 1;
//     getTag[formNum].className = "show";
// };

console.log("DONE");
</script>
  <?php
    // include("includes/footer.php");

?>
