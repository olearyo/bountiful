<?php
//db-config.php



try {

    // localhost//
    $dsn = "mysql:host=localhost;dbname=bountiful;charset=utf8mb4";
    $dbusername = "bountiful_admin";
    $dbpassword = "s7ENQzLUy9kZHULL";
    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    // //sheridan//
    // $dsn = "mysql:host=dev.fast.sheridanc.on.ca;dbname=olearyo_bountiful;charset=utf8mb4";
    // $dbusername = "olearyo_bountiful_admin";
    // $dbpassword = "4gTB!pb5Ji%s";
    // $pdo = new PDO($dsn, $dbusername, $dbpassword);


} catch (Exception $e) {
   // echo 'Caught exception: ',  $e->getMessage(), "\n";
   echo "An Error occured";
}

?>