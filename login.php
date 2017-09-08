<?php
require_once 'config.php';
ob_start();
session_start();

if (!empty($_POST['inputEmail']) && ! empty($_POST['inputPassword'])){
	$email = ($_POST['inputEmail']);
	$password = ($_POST['inputPassword']);
	
	$pass = hash('sha256', $password);

	// prepare the query
	$stmt = "SELECT * FROM MEMBER WHERE MEMBER_EMAIL='$email' AND MEMBER_PASSWORD = '$pass'";
	$stid = oci_parse($conn, $stmt);
	
	// execute the query
	if( !oci_execute($stid) ) {
		$e = oci_error();
		echo htmlentities($e['message'], ENT_QUOTES);
		oci_close($conn);
	}
	else {
		// fetch the result
		$row = oci_fetch_array($stid);		
		$_SESSION["type"] = $row["MEMBER_TYPE"];
		$_SESSION["m_id"] = $row["MEMBER_ID"];
		$idd = $row['MEMBER_ID'];
		$currentTime = date("G:i:s");
		$currentDate = date("d-m-Y");
	
		if($_SESSION['type'] == 1) {
			$stmt = "CALL ADD_LOG('Admin with ID $idd is logged in at $currentTime on $currentDate.')";
			$stid = oci_parse($conn, $stmt);
			oci_execute($stid);
			
			header("Location: adminpanel.php");	
		}
		else if($_SESSION['type'] == 2) {
			$stmt = "CALL ADD_LOG('User with ID $idd is logged in at $currentTime on $currentDate.')";
			$stid = oci_parse($conn, $stmt);
			oci_execute($stid);
			
			header("Location: home.php");
		}
		else {
			$errMSG = "Invalid email or password!";
		}
	}
}
?>

<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Enter to Movie Universe</title>
	<link rel="icon" href="favicon.ico"/>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login/style.css" rel="stylesheet">
</head>

<body>
<div class="wrap">
	<div class="avatar">
		<img src="https://cdn2.iconfinder.com/data/icons/circle-icons-1/64/video-128.png">
	</div>
	<form method="post" class="form-signin">

		<input name="inputEmail" type="email" placeholder="email" required>
		<div class="bar">
			<i></i>
		</div>
		<input name="inputPassword" type="password" placeholder="password" required>
		<a href="" class="forgot_link">forgot?</a>
		
		<button type="submit" id="loginButton">Login</button>
	</form>
</div>
 <script src="js/index.js"></script>
</body>
</html>
