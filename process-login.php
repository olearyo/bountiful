<?php session_start();


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
	echo("Error, in login. Please re-enter username and password");
}



?>
