<?php 
ob_start();
session_start();
include("includes/header.php");



$email = $_POST['email'];
$password = $_POST['password'];


include("includes/db-config.php");


$stmt = $pdo->prepare("SELECT * FROM `users` 
	WHERE `email` = '$email'
	AND `password` = '$password'
	");

$stmt->execute();

$row = $stmt->fetch();
if($stmt->rowCount()==1){
	header("Location: home.php");
	$_SESSION['userId'] = $row['userId'];
	$_SESSION['firstName'] = $row['firstName'];


	
}else{
	?>
	<div class="form-box">
        <h1>Login</h1>
        <div class="form-container">
			<form action="process-login.php" method="POST">
                <div class="form-input">
					<p>Error, in login. Please re-enter username and password</p>
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
	<?php
	// echo("Error, in login. Please re-enter username and password");
}



?>
