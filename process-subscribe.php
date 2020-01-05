<?php session_start();  



$email = $_POST['email'];

include("includes/db-config.php");

$stmt = $pdo->prepare("INSERT INTO `subscribe`(`email`) VALUES (?)");
    
    
$row = $stmt->execute([$email]);
echo json_encode($row);
// exit();


// var_dump($stmt->errorInfo());