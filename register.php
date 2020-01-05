<?php session_start();
    include("includes/header.php");

?>
<head>
  <title>Register</title>
</head>


<div class="form-box">
        <h1>Register</h1>
        <div class="form-container">
			<form action="process-register.php" method="POST">

				<div class="form-input">
				<label for="firstName">First Name</label>
					<input id="firstName" type="text" name="firstName" required />
				</div>

				<div class="form-input">
				<label for="lastName">Last Name</label>
					<input id="lastName" type="text" name="lastName" required />
				</div>

        		<div class="form-input">
				<label for="email">Email</label>
					<input id="email" type="email" name="email" required />
				</div>
				

				<div class="form-input">
				<label for="password">Password</label>
					<input id="password" type="password" name="password" required />
				</div>


				<div class="button-center">
           			<input class="button" type="submit" name="submit" value="register"/>
        		</div>

			</form>
		</div>
	</div>


  </main>

  <?php
    include("includes/footer.php");

?>