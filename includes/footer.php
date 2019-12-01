<?php
?>


<footer>

<a id="footer-logo" href="home.php">bountiful</a>

<div class="newsletter sticky">
    <form action="process-subscribe.php" method="POST">
        <div class="subscribe-label"><h2 class="white">Subscribe to stay in the loop!</h2></div>

        <div class="subscribe-field"><input type="email" name="email" placeholder="email" required /></div>
        <input class="subscribe-button" type="submit" name="submit" value="SUBSCRIBE"/>
        <i id="closeSticky" class="fas fa-times" onclick="close()"></i>

    </form>

</div>


</footer>

<script>
    console.log("connected");

// GET DOM TAG
var getSticky = document.getElementbyClassName("sticky");
var newsletterBtn = document.getElementbyClassName("subscribe-button");
var closeSticky = document.getElementbyId("closeSticky");

// ACTIVE FIELDSET & FIELDSET COUNT
var formNum= 0;
var fieldset = getForm[formNum];
fieldset.className = "show";


// VALIDATION LOOP & NEXT FUNCTION
function next() {
    var validation = true;

    var form = document.querySelectorAll("fieldset")[formNum];
    var formCount = form.querySelectorAll("input").length;

    for (i = 0; i < formCount; ++i) {
        var formStyle = form.querySelectorAll("input")[i];
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
        var selection = getForm[formNum];
        selection.className = "hidden";
        formNum = formNum + 1;
        var selection = getForm[formNum];
        selection.className = "show";
       
    }
};

console.log("DONE");
</script>



</body>
</html>