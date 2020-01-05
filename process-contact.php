<?php session_start();  



$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phoneNum = $_POST['phoneNum'];
$subject = $_POST['subject'];
$message = $_POST['message'];

include("includes/db-config.php");

$stmt = $pdo->prepare("INSERT INTO `contact`( `firstName`, `lastName`, `email`, `phoneNum`, `subject`, `message`) 
VALUES (?,?,?,?,?,?)");
    
    
$row = $stmt->execute([$firstName, $lastName, $email, $phoneNum, $subject, $message ]);
echo json_encode($row);
// exit();


// var_dump($stmt->errorInfo());