<?php session_start();

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];


include("includes/db-config.php");

$stmt = $pdo->prepare("INSERT INTO `users` 
	(`userId`, `firstName`, `lastName`, `email`, `password`) 
	VALUES (NULL, '$firstName', '$lastName', '$email', '$password');");

$row = $stmt->execute();

if ($row){
    header("Location: home.php");
    $_SESSION['userId'] = $row['userId'];
	$_SESSION['firstName'] = $row['firstName'];


	
}else{
    // header("Location: register.php");

	echo "something went wrong, please try again.";
}



?>
