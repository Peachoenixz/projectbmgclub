
<?php

	ini_set('display_errors', 1);
	error_reporting(~0);
   $serverName = "localhost";
   $userName = "ImPeet!";
   $userPassword = "Petuyio001!";
   $dbName = "admin_order";
	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_close($conn);
?>
