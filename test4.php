<?php ?>

<head>
    <style>
        /* For the function */
.msf_hide{
  display: none;
}
.msf_show{
  display: block;
}
.msf_bullet_o{
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
}
.msf_bullet_o > div{
  height: 15px;
  width: 15px;
  margin: 20px 10px;
  border-radius: 100px;
  z-index: 2;
}
.msf_bullet{
  background-color: lightgrey;
  
}
.msf_bullet_active{
  background-color: darkgrey !important;
}

/* Just for decoration */
body{
  background-color: #fff;
  display: flex;
  justify-content: center;
}
.msf_line{
  opacity: 0.3;
  background: lightgrey;
  height: 3px;
  width: 70px;
  display: block;
  left: 50%;
  margin-top: -29px;
  margin-left: -35px;
  position: absolute;
  z-index: 1;
}
.form_wrapper{
  min-width: 300px;
  position: absolute;
  top: 50%;
  margin-top: -160px;
}
fieldset{
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
  box-shadow: rgba(0,0,0,0.1) 0px 1px 30px;
  border-radius: 0px;
  border: none;
  padding: 10px 20px !important;
}
input{
  display: block;
  width: 100%;
  height: 20px;
  margin: 15px 0px;
}
input[type="text"], input[type="email"]{
  outline: none;
  border: none;
  background-color: lightgrey;
  padding: 5px 0px!important;
  text-align: center;
  transition: all 250ms;
}
input[type="text"]:focus, input[type="email"]:focus{
  opacity: 0.5;
}
input[type="button"], input[type="submit"]{
  margin-top: 20px !important;
  cursor: pointer;
  outline: none;
  border: none;
  padding: 15px !important;
  line-height: 0px;
  background-color: #fff;
  transition: all 150ms;
  box-shadow: rgba(0,0,0,0.2) 0px 1px 5px;
}
input[type="button"]:hover, input[type="submit"]:hover{
  background-color: darkgrey;
  color: white;
}
h2{
  text-align: center;
  font-size: 22px;
  font-family: opensans;
  font-weight: 400;
  display: block;
  margin-bottom: 25px !important;
}
    </style>
</head>





<body>

<div class="form_wrapper">
<fieldset class="msf_hide">
	<h2>The first form</h2>
  <div>
	  <input type="text" name="firstname" placeholder="First Name">
    <input type="text" name="lastname" placeholder="Last Name">
  </div>
  <div>
	<input type="email" name="email" placeholder=" Your Email">
  </div>
    <input type="button" name="back" value="Back"  onclick="msf_btn_back()">
	  <input type="button" name="next" value="Next"  onclick="msf_btn_next()">
  <div class="msf_bullet_o"></div>
  <div class="msf_line"></div>
</fieldset>

<fieldset class="msf_hide">
	<h2>This is form 2</h2>
	<input type="text" name="school" placeholder="School">
	<input type="date" name="date" placeholder="Birthdate">
  <div>
    <input type="radio" name="gender" value="male" checked> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="other"> Other
  </div>
  <input type="button" name="back" value="Back"  onclick="msf_btn_back()">
	<input type="button" name="next" value="Next"  onclick="msf_btn_next()">
  <div class="msf_bullet_o"></div>
  <div class="msf_line"></div>
</fieldset>

<fieldset class="msf_hide">
	<h2>The last form</h2>
	<input type="text" name="name" placeholder="Name">
	<input type="email" name="email" placeholder="Email">
  <input type="button" name="back" value="Back"  onclick="msf_btn_back()">
  <input type="button" name="next" value="Next"  onclick="msf_btn_next()">
	<input type="submit" name="submit" value="Submit Now!" onclick="">
  <div class="msf_bullet_o"></div>
  <div class="msf_line"></div>
</fieldset>
</div>

</body>


<script>
    console.log("Reloaded");

// dom variables
var msf_getFsTag = document.getElementsByTagName("fieldset");

// declaring the active fieldset & the total fieldset count
var msf_form_nr = 0;
var fieldset = msf_getFsTag[msf_form_nr];
fieldset.className = "msf_show";

// creates and stores a number of bullets
var msf_bullet_nr = "<div class='msf_bullet'></div>";
var msf_length = msf_getFsTag.length;
for (var i = 1; i < msf_length; ++i) {
    msf_bullet_nr += "<div class='msf_bullet'></div>";
};
// injects bullets
var msf_bullet_o = document.getElementsByClassName("msf_bullet_o");
for (var i = 0; i < msf_bullet_o.length; ++i) {
    var msf_b_item = msf_bullet_o[i];
    msf_b_item.innerHTML = msf_bullet_nr;
};

// removes the first back button & the last next button
document.getElementsByName("back")[0].className = "msf_hide";
document.getElementsByName("next")[msf_bullet_o.length - 1].className = "msf_hide";

// Makes the first dot active
var msf_bullets = document.getElementsByClassName("msf_bullet");
msf_bullets[msf_form_nr].className += " msf_bullet_active";

// Validation loop & goes to the next step
function msf_btn_next() {
    var msf_val = true;

    var msf_fs = document.querySelectorAll("fieldset")[msf_form_nr];
    var msf_fs_i_count = msf_fs.querySelectorAll("input").length;

    for (i = 0; i < msf_fs_i_count; ++i) {
        var msf_input_s = msf_fs.querySelectorAll("input")[i];
        if (msf_input_s.getAttribute("type") === "button") {
            // nothing happens
        } else {
            if (msf_input_s.value === "") {
                msf_input_s.style.backgroundColor = "pink";
                msf_val = false;
            } else {
                if (msf_val === false) {} else {
                    msf_val = true;
                    msf_input_s.style.backgroundColor = "lime";
                }
            }
        };
    };
    if (msf_val === true) {
        // goes to the next step
        var selection = msf_getFsTag[msf_form_nr];
        selection.className = "msf_hide";
        msf_form_nr = msf_form_nr + 1;
        var selection = msf_getFsTag[msf_form_nr];
        selection.className = "msf_show";
        // refreshes the bullet
        var msf_bullets_a = msf_form_nr * msf_length + msf_form_nr;
        msf_bullets[msf_bullets_a].className += " msf_bullet_active";
    }
};

// goes one step back
function msf_btn_back() {
    msf_getFsTag[msf_form_nr].className = "msf_hide";
    msf_form_nr = msf_form_nr - 1;
    msf_getFsTag[msf_form_nr].className = "msf_showhide";
};

console.log("loaded");
    </script>