<?php
require_once 'config.php';
ob_start();
session_start();
$memberID = $_SESSION["m_id"];
$membertype = $_SESSION["type"];
?>

<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Good Bye!</title>
	<link rel="icon" href="favicon.ico"/>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login/style.css" rel="stylesheet">
</head>
<body>
 <?php
	ob_start();	

	$currentTime = date("G:i:s");
	$currentDate = date("d-m-Y");
	if ($membertype == 1) {
		$stmt = "CALL ADD_LOG('Admin with ID $memberID is logged out at $currentTime on $currentDate.')";		
	} else if ($membertype == 2) {
		$stmt = "CALL ADD_LOG('User with ID $memberID is logged out at $currentTime on $currentDate.')";
	}
	$stid = oci_parse($conn, $stmt);
	oci_execute($stid);
	
	session_destroy();
	ob_end_flush();
	?>
 <script src="js/index.js"></script>
</body>
</html>
