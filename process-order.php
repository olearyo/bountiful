<?php session_start();

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
$donationType = (int)$_POST['donationType'];
$cardName = $_POST['cardName'];
$cardNum = $_POST['cardNum'];
$expDate = $_POST['expDate'];
$cvvNum = (int)$_POST['cvvNum'];




include("includes/db-config.php");

$stmt = $pdo->prepare("INSERT INTO `mealPlanOrder`( `userId`, `mealPlanId`, `mealNum`, `firstName`, `lastName`, `address`, `apartmentNo`, `postalCode`, `city`, `province`, `phoneNum`, `startDate`, `deliveryTime`, `foodbankId`, `donationType`, `cardName`, `cardNum`, `expDate`, `cvvNum`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$a = $stmt->execute([$_SESSION['userId'], $mealPlanId, $mealNum, $firstName, $lastName, $address, $apartmentNo, $postalCode, $city, $province,  $phoneNum, $startDate, $deliveryTime, $foodbankId, $donationType, $cardName, $cardNum, $expDate, $cvvNum]);


var_dump($_POST);
// if ($row){
//     // header("Location: home.php");
//     // $_SESSION['userId'] = $row['userId'];
//     // $_SESSION['firstName'] = $row['firstName'];
    
// 	echo "SUCCESS!.";

	
// }else{
//     // header("Location: register.php");

// 	echo "something went wrong, please try again.";
// }



?>