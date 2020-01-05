<?php session_start();
    include("includes/header.php");

    include("includes/db-config.php");
    

    $stmt = $pdo->prepare("SELECT * FROM `users` WHERE `userId` = ?");
    
    $stmt->execute([$_SESSION['userId']]);
    $row = $stmt->fetch() ?>

<head>
  <title>Edit Profile</title>
</head>

<div class ="head">
<h1>Edit your profile</h1>
</div>



<div class="form-box">
<div class="form-container">
			<form action="process-edit-profile.php" method="POST">

            <div class="form-input">
				<label for="firstName">First Name</label>
					<input id="firstName" type="text" name="firstName"  value="<?php echo($row["firstName"]); ?>"/>
				</div>

				<div class="form-input">
				<label for="lastName">Last Name</label>
					<input id="lastName" type="text" name="lastName"  value="<?php echo($row["lastName"]); ?>"/>
				</div>

                <div class="form-input">
                    <h2>Edit login details</h2>
                    <hr>
                </div>

        		<div class="form-input">
				<label for="email">Email</label>
					<input id="email" type="email" name="email" value="<?php echo($row["email"]); ?>"/>
				</div>
				

				<div class="form-input">
				<label for="password">Password</label>
					<input id="password" type="password" name="password" value="<?php echo($row["password"]); ?>" />
				</div>


				<div class="button-center">
           			<input class="button" type="submit" name="submit" value="EDIT"/>
        		</div>


			</form>
		</div>


    <?php




?>


</div>
</main>


  <?php
    include("includes/footer.php");

?>