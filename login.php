<?php session_start();
    include("includes/header.php");
?>


<div class="form-box">
        <h1>Login</h1>
        <div class="form-container">
			<form action="process-login.php" method="POST">

                <div class="form-input">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" required />
				</div>
				
				<div class="form-input">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required />
				</div>

        <div class="button-center">
           			<input class="button" type="submit" name="submit" value="LOGIN"/>
        		</div>

			</form>
		</div>
	</div>


  </main>

  <?php
    // include("includes/footer.php");

?>