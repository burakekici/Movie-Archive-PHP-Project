<?php
require_once 'config.php';
ob_start();
session_start();

$memberID = $_SESSION["m_id"];

$stmt = "SELECT * FROM MEMBER WHERE MEMBER_ID = '$memberID'";
$stid = oci_parse($conn, $stmt);

if (!oci_execute($stid)) {
    $e = oci_error();
    echo htmlentities($e['message'], ENT_QUOTES);
    oci_close($conn);
} else {
    $row = oci_fetch_array($stid);
    $m_name = $row['MEMBER_NAME'];
    $m_email = $row['MEMBER_EMAIL'];
    $m_age = $row['MEMBER_AGE'];
	$m_type = $row['MEMBER_TYPE'];
}

?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Dashboard</title>
    <link rel="icon" href="favicon.ico"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard/user-dashboard.css" rel="stylesheet">
</head>

<body>

<!-- Toolbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">Movie Universe</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="home.php">Homepage</a></li>
				<?php if($m_type == 1) {
				print "<li><a href=\"adminpanel.php\">Admin Panel</a></li>";
				}?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Toolbar -->
<div class="container-fluid">
    <div class="row">

        <div class="row">
            <div class="col-md-9">

                <!-- Sol Sutun -->
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="home.php">User Dashboard</a></li>
                        <br>
                        <li><a href="user/listshortestmovies.php">List Shortest Movies</a></li>
                        <li><a href="user/listnewestmovies.php">List Newest Movies</a></li>
                        <li><a href="user/listmoviesbyagelimits.php">List Movies' Age Limits</a></li>
                        <br>
						<li><a href="user/filters.php">Filter Movies By Genre</a></li>
						<li><a href="user/filter2.php">Filter Movies By Year and Length</a></li>
						<li><a href="user/filter3.php">Filter Actors By Age and Hometown</a></li>
						<br>
						<li><a href="user/statistics.php">Statistics</a></li>
                        <br>
                        <!-- 1 admin -->
                        <li><a href="user/listadmin.php">List Admins</a></li>
                        <!-- 2 user -->
                        <li><a href="user/listuser.php">List Users</a></li>
                        <br>
                        <!-- 3 movie -->
					  <li><a href="user/listmovie.php">List Movies</a></li>
					  <li><a href="crud/addmovie.php">Add Movie</a></li>
					  <li><a href="crud/updatemovie.php">Update Movie</a></li>
					  <br>
					  <!-- 4 poster -->
					  <li><a href="user/listposter.php">List Posters</a></li>
					  <!-- 5 trailer -->
					  <li><a href="user/liststoryline.php">List Storyline</a></li>
					  <!-- 6 age_limit -->
					  <li><a href="user/listagelimit.php">List Age Limits</a></li>
					  <!-- 7 genre -->
					  <li><a href="user/listgenre.php">List Genres</a></li>
					  <!-- 8 award -->
					  <li><a href="user/listlanguage.php">List Language</a></li>
					  <br>
					  <!-- 9 actor -->
					  <li><a href="user/listactor.php">List Actors</a></li>
					  <!-- 10 director -->
					  <li><a href="user/listdirector.php">List Directors</a></li>
					  <br>
					  <!-- 11 movie actor -->
					  <li><a href="user/listmovieactor.php">List Movie Actors</a></li>
					  <br>
					  <!-- 12 movie director -->
					  <li><a href="user/listmoviedirector.php">List Movie Directors</a></li>
					  <br>

					  <!-- 13 movie comment -->
					  <li><a href="user/listmoviecomment.php">List Movie Comments</a></li>
					  <li><a href="crud/addmoviecomment.php">Add Movie Comment</a></li>
					  <li><a href="crud/updatemoviecomment.php">Update Movie Comment</a></li>
					  <li><a href="crud/deletemoviecomment.php">Delete Movie Comment</a></li>
					  <br>
					  <!-- 14 actor comment -->
					  <li><a href="user/listactorcomment.php">List Actor Comments</a></li>
					  <li><a href="crud/addactorcomment.php">Add Actor Comment</a></li>
					  <li><a href="crud/updateactorcomment.php">Update Actor Comment</a></li>
					  <li><a href="crud/deleteactorcomment.php">Delete Actor Comment</a></li>
					  <br>
					  <!-- 15 director comment -->
					  <li><a href="user/listdirectorcomment.php">List Director Comments</a></li>
					  <li><a href="crud/adddirectorcomment.php">Add Director Comment</a></li>
					  <li><a href="crud/updatedirectorcomment.php">Update Director Comment</a></li>
					  <li><a href="crud/deletedirectorcomment.php">Delete Director Comment</a></li>
					  <br>

					  <!-- 16 movie rating -->
					  <li><a href="user/listmovierating.php">List Movie Ratings</a></li>
					  <li><a href="crud/addmovierating.php">Add Movie Rating</a></li>
					  <li><a href="crud/updatemovierating.php">Update Movie Rating</a></li>
					  <li><a href="crud/deletemovierating.php">Delete Movie Rating</a></li>
					  <br>
					  <!-- 17 actor rating -->
					  <li><a href="user/listactorrating.php">List Actor Ratings</a></li>
					  <li><a href="crud/addactorrating.php">Add Actor Rating</a></li>
					  <li><a href="crud/updateactorrating.php">Update Actor Rating</a></li>
					  <li><a href="crud/deleteactorrating.php">Delete Actor Rating</a></li>
					  <br>
					  <!-- 18 director rating -->
					  <li><a href="user/listdirectorrating.php">List Director Ratings</a></li>
					  <li><a href="crud/adddirectorrating.php">Add Director Rating</a></li>
					  <li><a href="crud/updatedirectorrating.php">Update Director Rating</a></li>
					  <li><a href="crud/deletedirectorrating.php">Delete Director Rating</a></li>

                    </ul>
                </div>

                <!-- Orta Sutun -->
                <div class="col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3 main">
                    <h2 class="form-signin-heading">Your Account Information</h2>
                    <br>
                    <h4 class="page-header"><?php echo "<b>Username:</b> $m_name"; ?></h4>
                    <h4 class="page-header"><?php echo "<b>Email:</b> $m_email"; ?></h4>
                    <h4 class="page-header"><?php echo "<b>Age:</b> $m_age"; ?></h4>
					<h4 class="page-header">
					<?php
						if ($m_type == "1") {
							echo "You are an <b>admin</b>";
						} else {
							echo "You are a <b>user</b>";
						}
					?>
					</h4>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/index.js"></script>
</body>
</html>
