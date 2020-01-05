console.log("contact connected");
	function submitForm(contactForm)
	{
	  var xhr = new XMLHttpRequest();
	  var confirm = document.getElementById("confirmation");
	  var conclass = document.getElementsByClassName("contact")[0];
	  xhr.onload = function(){ 
		if (xhr.responseText=="true"){
			var t = document.createTextNode("Thank you very much, we will get back to you shortly.");
			confirm.appendChild(t); 
			// conclass.style.visibility='hidden';
		}else{
			var t = document.createTextNode("An Error Occured. Please contact the system administrator");
			confirm.appendChild(t); 
		}
		; }
	  xhr.open(contactForm.method, contactForm.getAttribute("action"));
	  xhr.send(new FormData(contactForm));
	  return false;
	}