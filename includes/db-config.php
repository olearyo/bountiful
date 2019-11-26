<?php
//db-config.php




try {
    $dsn = "mysql:host=localhost;dbname=bountiful;charset=utf8mb4";
    $dbusername = "bountiful_admin";
    $dbpassword = "s7ENQzLUy9kZHULL";
    $pdo = new PDO($dsn, $dbusername, $dbpassword);

} catch (Exception $e) {
   // echo 'Caught exception: ',  $e->getMessage(), "\n";
   echo "An Error occured";
}

?>