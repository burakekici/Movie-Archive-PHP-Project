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
    <title>Admin Panel</title>
    <link rel="icon" href="favicon.ico"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard/admin-dashboard.css" rel="stylesheet">
</head>

<body>

<!-- Toolbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
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
                <li><a href="home.php">Homepage</a></li>
                <li class="active"><a href="adminpanel.php">Admin Panel</a></li>
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
                        <li class="active"><a href="adminpanel.php">Admin Homepage</a></li>
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
                        <li><a href="crud/addadmin.php">Add Admin</a></li>
                        <li><a href="crud/updateadmin.php">Update Admin</a></li>
                        <li><a href="crud/deleteadmin.php">Delete Admin</a></li>
                        <br>
                        <!-- 2 user -->
                        <li><a href="user/listuser.php">List Users</a></li>
                        <li><a href="crud/adduser.php">Add User</a></li>
                        <li><a href="crud/updateuser.php">Update User</a></li>
                        <li><a href="crud/deleteuser.php">Delete User</a></li>
                        <br>
                        <!-- 3 movie -->
					  <li><a href="user/listmovie.php">List Movies</a></li>
					  <li><a href="crud/addmovie.php">Add Movie</a></li>
					  <li><a href="crud/updatemovie.php">Update Movie</a></li>
					  <li><a href="crud/deletemovie.php">Delete Movie</a></li>
					  <br>
					  <!-- 4 poster -->
					  <li><a href="user/listposter.php">List Posters</a></li>
					  <li><a href="crud/addposter.php">Add Poster</a></li>
					  <li><a href="crud/updateposter.php">Update Poster</a></li>
					  <li><a href="crud/deleteposter.php">Delete Poster</a></li>
					  <br>
					  <!-- 5 trailer -->
					  <li><a href="user/liststoryline.php">List Storyline</a></li>
					  <li><a href="crud/addstoryline.php">Add Storyline</a></li>
					  <li><a href="crud/updatestoryline.php">Update Storyline</a></li>
					  <li><a href="crud/deletestoryline.php">Delete Storyline</a></li>
					  <br>
					  <!-- 6 age_limit -->
					  <li><a href="user/listagelimit.php">List Age Limits</a></li>
					  <li><a href="crud/addagelimit.php">Add Age Limit</a></li>
					  <li><a href="crud/updateagelimit.php">Update Age Limit</a></li>
					  <li><a href="crud/deleteagelimit.php">Delete Age Limit</a></li>
					  <br>
					  <!-- 7 genre -->
					  <li><a href="user/listgenre.php">List Genres</a></li>
					  <li><a href="crud/addgenre.php">Add Genre</a></li>
					  <li><a href="crud/updategenre.php">Update Genre</a></li>
					  <li><a href="crud/deletegenre.php">Delete Genre</a></li>
					  <br>
					  <!-- 8 award -->
					  <li><a href="user/listlanguage.php">List Language</a></li>
					  <li><a href="crud/addlanguage.php">Add Language</a></li>
					  <li><a href="crud/updatelanguage.php">Update Language</a></li>
					  <li><a href="crud/deletelanguage.php">Delete Language</a></li>
					  <br>
					  <!-- 9 actor -->
					  <li><a href="user/listactor.php">List Actors</a></li>
					  <li><a href="crud/addactor.php">Add Actor</a></li>
					  <li><a href="crud/updateactor.php">Update Actor</a></li>
					  <li><a href="crud/deleteactor.php">Delete Actor</a></li>
					  <br>
					  <!-- 10 director -->
					  <li><a href="user/listdirector.php">List Directors</a></li>
					  <li><a href="crud/adddirector.php">Add Director</a></li>
					  <li><a href="crud/updatedirector.php">Update Director</a></li>
					  <li><a href="crud/deletedirector.php">Delete Director</a></li>
					  <br>
					  <!-- 11 movie actor -->
					  <li><a href="user/listmovieactor.php">List Movie Actors</a></li>
					  <li><a href="crud/addmovieactor.php">Add Movie Actor</a></li>
					  <li><a href="crud/deletemovieactor.php">Delete Movie Actor</a></li>
					  <br>
					  <!-- 12 movie director -->
					  <li><a href="user/listmoviedirector.php">List Movie Directors</a></li>
					  <li><a href="crud/addmoviedirector.php">Add Movie Director</a></li>
					  <li><a href="crud/deletemoviedirector.php">Delete Movie Director</a></li>
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

                    <br><br><br>

                    <h2>Logs</h2><br>

                    <?php
                    require_once 'config.php';
                    ob_start();

                    $stmt = "SELECT * FROM LOGS ORDER BY LOG_ID DESC";
                    $stid = oci_parse($conn, $stmt);

                    if (!oci_execute($stid)) {
                        $e = oci_error();
                        echo htmlentities($e['message'], ENT_QUOTES);
                        oci_close($conn);
                    } else {
                        // Retrieve the results
                        echo "<table class=\"table table-hover\"";
                        echo "<thead> <tr> <th>Log ID</th> <th>Log Context</th> </tr> </thead>";
                        // Print the results
                        while ($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) {
                            echo "<tr>\n";
                            foreach ($row as $item) {
                                echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
                            }
                            echo "</tr>\n";
                        }
                        echo "</table>\n";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/index.js"></script>
</body>
</html>
