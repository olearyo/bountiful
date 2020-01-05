<?php 
ob_start();
session_start();
include("includes/db-config.php");

$mealPlanId = (int)$_POST['mealPlanId'];
$mealNum = (int)$_POST['mealNum'];

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$address = $_POST['address'];
$apartmentNo = (int)$_POST['apartmentNo'];
$city = $_POST['city'];
$province = $_POST['province'];
$postalCode = $_POST['postalCode'];
$phoneNum = (int)$_POST['phoneNum'];
$startDate = $_POST['startDate'];
$deliveryTime = $_POST['deliveryTime'];

$foodbankId = (int)$_POST['foodbankId'];
$donationType = $_POST['donationType'];
$cardName = $_POST['cardName'];
$cardNum = $_POST['cardNum'];
$expDate = $_POST['expDate'];
$cvvNum = (int)$_POST['cvvNum'];





$stmt = $pdo->prepare("INSERT INTO `mealPlanOrder`( `userId`, `mealPlanId`, `mealNum`, `firstName`, `lastName`, `address`, `apartmentNo`, `postalCode`, `city`, `province`, `phoneNum`, `startDate`, `deliveryTime`, `foodbankId`, `donationType`, `cardName`, `cardNum`, `expDate`, `cvvNum`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$row = $stmt->execute([$_SESSION['userId'], $mealPlanId, $mealNum, $firstName, $lastName, $address, $apartmentNo, $postalCode, $city, $province,  $phoneNum, $startDate, $deliveryTime, $foodbankId, $donationType, $cardName, $cardNum, $expDate, $cvvNum]);

var_dump($row);
if ($row){
    header("Location: order-receipt.php");
 

	
}else{

	echo "something went wrong, please try again.";
}



?>