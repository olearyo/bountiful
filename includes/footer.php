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

.fab{
  font-size:30px;
  color:white;
  margin-left:10px;
  margin-right:10px;
}

.fab:hover {
  color: #FEA3A6;
}


    </style>
    

<footer>

<div class="top-1">
     <a id="logo" href="home.php">bountiful</a>

</div>


<div id="newsletter" class="top-2">

        <div class="form-container">
          <div class="form-input half">
            <i class="fab fa-facebook-square"></i>
          </div>
          <div class="form-input half">
            <i class="fab fa-instagram"></i>
          </div>
        </div>

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