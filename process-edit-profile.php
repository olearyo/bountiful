<?php 
ob_start();
session_start();

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];


include("includes/db-config.php");

$stmt = $pdo->prepare("UPDATE `users` SET `firstName` = ?, `lastName` = ?, `email` = ?, `password` = ? WHERE `users`.`userId` = ?;");

$row = $stmt->execute([$firstName, $lastName, $email, $password, $_SESSION['userId']]);

if ($row){
    header("Location: profile.php");



	
}else{
    // header("Location: register.php");

	echo "something went wrong, please try again.";
}



?>
