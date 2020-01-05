<?php session_start();
    include("includes/header.php");


?>
<head>
  <title>Contact Us</title>
</head>
<div class="hero-contact">
      <!-- <h1 class="hero-title">Food is best served together</h1> -->
      <img class="contact" src="img/contact.png"/>

    </div>

<h1>We're here to help</h1>
<div class="form-box">
<form action="process-contact.php" method="POST" onsubmit="return submitForm(this);">
<div class="form-container">
			

		<p id="confirmation"></p>

        <div class="contact">
        <fieldset>
            <h2 class="green">Contact Us</h2>

                <div class="form-input half">
                    <label for="firstName">First Name</label> 
                    <input id="firstName" type="text" name="firstName" required />   
                </div>
            
                <div class="form-input half">
                    <label for="lastName">Last Name</label> 
                    <input id="lastName" type="text" name="lastName" required />   
                </div>

                <div class="form-input half">
                    <label for="email">Email</label> 
                    <input id="email" type="text" name="email" required />   
                </div>

                <div class="form-input half">
                    <label for="phoneNum">Phone No.</label> 
                    <input id="phoneNum" type="text" name="phoneNum"  required/>   
                </div>

                <div class="form-input">
                    <label for="subject">Subject</label> 
                    <input id="subject" type="text" name="subject" required />   
                </div>

                <div class="form-input">
                    <label for="message">Message</label> 
                    <textarea id="message" name="message" rows="10" cols="30" required >Insert Message Here...</textarea>
                </div>

                <div class="form-input">
           			<input class="button" type="submit" name="submit" value="SUBMIT"/>
        		</div>
    </fieldset>



	</div>




</div>


</div>

<script>
console.log("contact connected");
	function submitForm(contactForm)
	{
	  var xhr = new XMLHttpRequest();
	  var confirm = document.getElementById("confirmation");
	  var conclass = document.getElementsByTagName("fieldset")[0];
	  xhr.onload = function(){ 
		if (xhr.responseText=="true"){
			var t = document.createTextNode("Thank you very much, we will get back to you shortly.");
			confirm.appendChild(t); 
			conclass.style.visibility='hidden';
		}else{
			var t = document.createTextNode("An Error Occured. Please contact the system administrator");
			confirm.appendChild(t); 
		}
		; }
	  xhr.open(contactForm.method, contactForm.getAttribute("action"));
	  xhr.send(new FormData(contactForm));
	  return false;
	}
</script>
  <?php
    include("includes/footer.php");

?>
</body>
</html>

		