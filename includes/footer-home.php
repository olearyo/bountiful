<?php
?>

<style>

footer{
    background: #02967C;
    display:flex;
    bottom: 0;
    height:auto;
    flex-direction:column;
    padding-right:10%;
    padding-left:10%;


}

#newsletter{
  width:30%;
  text-align: center;
  display:flex;
  flex-direction:column;
  justify-content: flex-start;
}


.top-1{
    display:flex;
    flex-grow:1;
    text-align:center;
    margin-top:20px;
    align-self:center;
}

.top-2{
    display:flex;
    flex-grow:1;
    text-align:center;
    margin-top:10px;
    align-self:center;
}

.whiteLabel{
    color:white;
}

.top-3{
    text-align:center;
    color: white;
}

.subscribe-field, .subscribe-label{
  height:50px;
  width:150px;
  flex:1;
  margin-right: 10px;
}

.subscribe-button{
  width: 150px;
  height: 40px;
  border-radius: 8px;
  cursor: pointer;
  background-color: #FEA3A6;
  font-size: 1.2em;
  color: white;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  #newsletter{
      width:100%;
  }
  }


    </style>
    

<footer>

<div class="top-1">
     <a id="logo" href="home.php">bountiful</a>

</div>


<div id="newsletter" class="top-2">
<h3 class="whiteLabel" id="confirmation"></h3>
    <form action="process-subscribe.php" method="POST" onsubmit="return subscribe(this);">
        <div class="form-container subscribe">
        <label class="whiteLabel" for="subscribe-field">Subscribe for news & updates</label>
        <div class="form-input half">
            <input class="subscribe-field" name="email" placeholder=" Your Email" type="text">
        </div>
        <div class="form-input half">
            <input class="subscribe-button" value="subscribe" type="submit">
            </div>
        </div>
    </form>
</div>

<div class="top-3">
<p class="whiteLabel">Copyright ©2019</p>
</div>


</footer>

<script>
console.log("subscription connected");
	function subscribe(contactForm)
	{
	  var xhr = new XMLHttpRequest();
	  var confirm = document.getElementById("confirmation");
	  var conclass = document.getElementsByClassName("subscribe")[0];
	  xhr.onload = function(){ 
		if (xhr.responseText=="true"){
			var t = document.createTextNode("Thanks for subscribing!");
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




</body>
</html>


