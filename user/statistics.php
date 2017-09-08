<?php
require_once '../config.php';
ob_start();
session_start();

$memberID = $_SESSION["m_id"];
$membertype = $_SESSION["type"];

?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <link rel="icon" href="favicon.ico"/>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard/admin-dashboard.css" rel="stylesheet">
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
            <a class="navbar-brand" href="../index.php">Movie Universe</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Homepage</a></li>
                <?php if($membertype == 1) {
				print "<li><a href=\"../adminpanel.php\">Admin Panel</a></li>";
				}?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../logout.php">Logout</a></li>
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
                        <li><a href="../home.php">User Dashboard</a></li>
                        <br>
                        <li><a href="listshortestmovies.php">List Shortest Movies</a></li>
                        <li><a href="listnewestmovies.php">List Newest Movies</a></li>
                        <li><a href="listmoviesbyagelimits.php">List Movies' Age Limits</a></li>
                        <li><a href="filters.php">Filters</a></li>
                        <li class="active"><a href="statistics.php">Statistics</a></li>
                        <br>
                        <!-- 1 admin -->
                        <li><a href="listadmin.php">List Admins</a></li>
                        <!-- 2 user -->
                        <li><a href="listuser.php">List Users</a></li>
                        <br>
                        <!-- 3 movie -->
                        <li><a href="listmovie.php">List Movies</a></li>
                        <li><a href="../crud/addmovie.php">Add Movie</a></li>
                        <li><a href="../crud/updatemovie.php">Update Movie</a></li>
                        <br>
                        <!-- 4 poster -->
                        <li><a href="listposter.php">List Posters</a></li>
                        <!-- 5 trailer -->
                        <li><a href="liststoryline.php">List Storyline</a></li>
                        <!-- 6 age_limit -->
                        <li><a href="listagelimit.php">List Age Limits</a></li>
                        <!-- 7 genre -->
                        <li><a href="listgenre.php">List Genres</a></li>
                        <!-- 8 award -->
                        <li><a href="listlanguage.php">List Language</a></li>
                        <br>
                        <!-- 9 actor -->
                        <li><a href="listactor.php">List Actors</a></li>
                        <!-- 10 director -->
                        <li><a href="listdirector.php">List Directors</a></li>
                        <br>
                        <!-- 11 movie actor -->
                        <li><a href="listmovieactor.php">List Movie Actors</a></li>
                        <br>
                        <!-- 12 movie director -->
                        <li><a href="listmoviedirector.php">List Movie Directors</a></li>
                        <br>

                        <!-- 13 movie comment -->
                        <li><a href="listmoviecomment.php">List Movie Comments</a></li>
                        <li><a href="crud/addmoviecomment.php">Add Movie Comment</a></li>
                        <li><a href="crud/updatemoviecomment.php">Update Movie Comment</a></li>
                        <li><a href="crud/deletemoviecomment.php">Delete Movie Comment</a></li>
                        <br>
                        <!-- 14 actor comment -->
                        <li><a href="listactorcomment.php">List Actor Comments</a></li>
                        <li><a href="crud/addactorcomment.php">Add Actor Comment</a></li>
                        <li><a href="crud/updateactorcomment.php">Update Actor Comment</a></li>
                        <li><a href="crud/deleteactorcomment.php">Delete Actor Comment</a></li>
                        <br>
                        <!-- 15 director comment -->
                        <li><a href="listdirectorcomment.php">List Director Comments</a></li>
                        <li><a href="crud/adddirectorcomment.php">Add Director Comment</a></li>
                        <li><a href="crud/updatedirectorcomment.php">Update Director Comment</a></li>
                        <li><a href="crud/deletedirectorcomment.php">Delete Director Comment</a></li>
                        <br>

                        <!-- 16 movie rating -->
                        <li><a href="listmovierating.php">List Movie Ratings</a></li>
                        <li><a href="crud/addmovierating.php">Add Movie Rating</a></li>
                        <li><a href="crud/updatemovierating.php">Update Movie Rating</a></li>
                        <li><a href="crud/deletemovierating.php">Delete Movie Rating</a></li>
                        <br>
                        <!-- 17 actor rating -->
                        <li><a href="listactorrating.php">List Actor Ratings</a></li>
                        <li><a href="crud/addactorrating.php">Add Actor Rating</a></li>
                        <li><a href="crud/updateactorrating.php">Update Actor Rating</a></li>
                        <li><a href="crud/deleteactorrating.php">Delete Actor Rating</a></li>
                        <br>
                        <!-- 18 director rating -->
                        <li><a href="listdirectorrating.php">List Director Ratings</a></li>
                        <li><a href="crud/adddirectorrating.php">Add Director Rating</a></li>
                        <li><a href="crud/updatedirectorrating.php">Update Director Rating</a></li>
                        <li><a href="crud/deletedirectorrating.php">Delete Director Rating</a></li>

                    </ul>

                </div>

                <!-- Orta Sutun -->
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-3 main">

                    <h2 class="form-signin-heading">Statistics</h2>
					<br><br>
					
					<h4><b>Youngest actor: </b> 
                    <?php
                    require_once '../config.php';
                    ob_start();
                    // Prepare the query
                    $stmt = "SELECT ACTOR_NAME, ACTOR_SURNAME FROM ACTOR WHERE ROWNUM <= 1 ORDER BY ACTOR.ACTOR_AGE DESC";
                    $stid = oci_parse($conn, $stmt);
                    if (!oci_execute($stid)) {
                        $e = oci_error();
                        echo htmlentities($e['message'], ENT_QUOTES);
                        oci_close($conn);
                    } else {
                        // Retrieve the results
                        $row = oci_fetch_array($stid);
						$actor_name = $row['ACTOR_NAME'];
						$actor_surname = $row['ACTOR_SURNAME'];
						echo "$actor_name $actor_surname";
                    }
                    ob_end_flush();
                    ?>
					</h4>
					
					<h4><b>Oldest director: </b> 
                    <?php
                    require_once '../config.php';
                    ob_start();
                    // Prepare the query
                    $stmt = "SELECT DIRECTOR_NAME, DIRECTOR_SURNAME FROM DIRECTOR WHERE ROWNUM <= 1 ORDER BY DIRECTOR.DIRECTOR_AGE ASC";
                    $stid = oci_parse($conn, $stmt);
                    if (!oci_execute($stid)) {
                        $e = oci_error();
                        echo htmlentities($e['message'], ENT_QUOTES);
                        oci_close($conn);
                    } else {
                        // Retrieve the results
                        $row = oci_fetch_array($stid);
						$director_name = $row['DIRECTOR_NAME'];
						$director_surname = $row['DIRECTOR_SURNAME'];
						echo "$director_name $director_surname";
                    }
                    ob_end_flush();
                    ?>
					</h4>

					<h4><b>Longest movie: </b> 
                    <?php
                    require_once '../config.php';
                    ob_start();
                    // Prepare the query
                    $stmt = "SELECT MOVIE_TITLE, MOVIE_LENGTH FROM MOVIE WHERE ROWNUM <=1 ORDER BY MOVIE.MOVIE_LENGTH DESC";
                    $stid = oci_parse($conn, $stmt);
                    if (!oci_execute($stid)) {
                        $e = oci_error();
                        echo htmlentities($e['message'], ENT_QUOTES);
                        oci_close($conn);
                    } else {
                        // Retrieve the results
                        $row = oci_fetch_array($stid);
						$movie_title = $row['MOVIE_TITLE'];
						$movie_length = $row['MOVIE_LENGTH'];
						echo "$movie_title ($movie_length mins)";
                    }
                    ob_end_flush();
                    ?>
					</h4>

					<h4><b>Newest movie: </b> 
                    <?php
                    require_once '../config.php';
                    ob_start();
                    // Prepare the query
                    $stmt = "SELECT MOVIE_TITLE, MOVIE_RELEASE_DATE FROM MOVIE WHERE ROWNUM <= 1 ORDER BY MOVIE.MOVIE_RELEASE_DATE DESC";
                    $stid = oci_parse($conn, $stmt);
                    if (!oci_execute($stid)) {
                        $e = oci_error();
                        echo htmlentities($e['message'], ENT_QUOTES);
                        oci_close($conn);
                    } else {
                        // Retrieve the results
                        $row = oci_fetch_array($stid);
						$movie_title = $row['MOVIE_TITLE'];
						$movie_release_date = $row['MOVIE_RELEASE_DATE'];
						echo "$movie_title $movie_release_date";
                    }
                    ob_end_flush();
                    ?>
					</h4>
					<br>
					
					<h4><b>Number of movies: </b> 
                    <?php
                    require_once '../config.php';
                    ob_start();
                    $stmt = "SELECT COUNT(*) AS MOVIE_COUNT FROM MOVIE";
                    $stid = oci_parse($conn, $stmt);
                    if (!oci_execute($stid)) {
                        $e = oci_error();
                        echo htmlentities($e['message'], ENT_QUOTES);
                        oci_close($conn);
                    } else {
                        $row = oci_fetch_array($stid);
						$movie_count = $row['MOVIE_COUNT'];
						echo "$movie_count";
                    }
                    ob_end_flush();
                    ?>
					</h4>

					<h4><b>Number of actors: </b> 
                    <?php
                    require_once '../config.php';
                    ob_start();
                    $stmt = "SELECT COUNT(*) AS CNT FROM ACTOR";
                    $stid = oci_parse($conn, $stmt);
                    if (!oci_execute($stid)) {
                        $e = oci_error();
                        echo htmlentities($e['message'], ENT_QUOTES);
                        oci_close($conn);
                    } else {
                        $row = oci_fetch_array($stid);
						$count = $row['CNT'];
						echo "$count";
                    }
                    ob_end_flush();
                    ?>
					</h4>

					<h4><b>Number of directors: </b> 
                    <?php
                    require_once '../config.php';
                    ob_start();
                    $stmt = "SELECT COUNT(*) AS CNT FROM DIRECTOR";
                    $stid = oci_parse($conn, $stmt);
                    if (!oci_execute($stid)) {
                        $e = oci_error();
                        echo htmlentities($e['message'], ENT_QUOTES);
                        oci_close($conn);
                    } else {
                        $row = oci_fetch_array($stid);
						$count = $row['CNT'];
						echo "$count";
                    }
                    ob_end_flush();
                    ?>
					</h4>

					<h4><b>Number of members: </b> 
                    <?php
                    require_once '../config.php';
                    ob_start();
                    $stmt = "SELECT COUNT(*) AS CNT FROM MEMBER";
                    $stid = oci_parse($conn, $stmt);
                    if (!oci_execute($stid)) {
                        $e = oci_error();
                        echo htmlentities($e['message'], ENT_QUOTES);
                        oci_close($conn);
                    } else {
                        $row = oci_fetch_array($stid);
						$count = $row['CNT'];
						echo "$count";
                    }
                    ob_end_flush();
                    ?>
					</h4>

					<br>
					
					<h4><b>Best movie: </b> 
                    <?php
                    require_once '../config.php';
                    ob_start();
                    // Prepare the query
                    $stmt = "SELECT * FROM (
					SELECT M.MOVIE_TITLE, AVG(MR.MOVIE_RATING) AS AVRG FROM MOVIE M JOIN MOVIE_RATING MR ON M.MOVIE_ID = MR.MOVIE_ID
					GROUP BY M.MOVIE_ID, M.MOVIE_TITLE, MR.MOVIE_ID ORDER BY AVG(MR.MOVIE_RATING) DESC
					) WHERE ROWNUM = 1";
                    $stid = oci_parse($conn, $stmt);
                    if (!oci_execute($stid)) {
                        $e = oci_error();
                        echo htmlentities($e['message'], ENT_QUOTES);
                        oci_close($conn);
                    } else {
                        // Retrieve the results
                        $row = oci_fetch_array($stid);
						$movie_title = $row['MOVIE_TITLE'];
						$avrg = $row['AVRG'];
						echo "$movie_title (Rating: $avrg)";
                    }
                    ob_end_flush();
                    ?>
					</h4>

					<h4><b>Best actor: </b> 
                    <?php
                    require_once '../config.php';
                    ob_start();
                    // Prepare the query
                    $stmt = "SELECT * FROM (
  SELECT A.ACTOR_NAME, A.ACTOR_SURNAME, AVG(AR.ACTOR_RATING) AS AVRG FROM ACTOR A JOIN ACTOR_RATING AR ON A.ACTOR_ID = AR.ACTOR_ID
  GROUP BY A.ACTOR_ID, A.ACTOR_NAME, A.ACTOR_SURNAME, AR.ACTOR_ID ORDER BY AVG(AR.ACTOR_RATING) DESC
) WHERE ROWNUM = 1";
                    $stid = oci_parse($conn, $stmt);
                    if (!oci_execute($stid)) {
                        $e = oci_error();
                        echo htmlentities($e['message'], ENT_QUOTES);
                        oci_close($conn);
                    } else {
                        // Retrieve the results
                        $row = oci_fetch_array($stid);
						$actor_name = $row['ACTOR_NAME'];
						$actor_surname = $row['ACTOR_SURNAME'];
						$avrg = $row['AVRG'];
						echo "$actor_name $actor_surname (Rating: $avrg)";
                    }
                    ob_end_flush();
                    ?>
					</h4>

					<h4><b>Best director: </b> 
                    <?php
                    require_once '../config.php';
                    ob_start();
                    // Prepare the query
                    $stmt = "SELECT * FROM (
					SELECT D.DIRECTOR_NAME, D.DIRECTOR_SURNAME, AVG(DR.DIRECTOR_RATING) AS AVRG FROM DIRECTOR D JOIN DIRECTOR_RATING DR ON D.DIRECTOR_ID = DR.DIRECTOR_ID
					GROUP BY D.DIRECTOR_ID, D.DIRECTOR_NAME, D.DIRECTOR_SURNAME, DR.DIRECTOR_ID ORDER BY AVG(DR.DIRECTOR_RATING) DESC
					) WHERE ROWNUM = 1";
                    $stid = oci_parse($conn, $stmt);
                    if (!oci_execute($stid)) {
                        $e = oci_error();
                        echo htmlentities($e['message'], ENT_QUOTES);
                        oci_close($conn);
                    } else {
                        // Retrieve the results
                        $row = oci_fetch_array($stid);
						$director_name = $row['DIRECTOR_NAME'];
						$director_surname = $row['DIRECTOR_SURNAME'];
						$avrg = $row['AVRG'];
						echo "$director_name $director_surname (Rating: $avrg)";
                    }
                    ob_end_flush();
                    ?>
					</h4>

					<h4><b>The actor most played movies: </b> 
                    <?php
                    require_once '../config.php';
                    ob_start();
                    // Prepare the query
                    $stmt = "SELECT * FROM (
					SELECT A.ACTOR_NAME, A.ACTOR_SURNAME, COUNT(MA.ACTOR_ID) AS CNT FROM ACTOR A JOIN MOVIE_ACTOR MA ON A.ACTOR_ID = MA.ACTOR_ID
					GROUP BY A.ACTOR_NAME, A.ACTOR_SURNAME, A.ACTOR_ID, MA.ACTOR_ID ORDER BY COUNT(MA.ACTOR_ID) DESC
					) WHERE ROWNUM=1";
                    $stid = oci_parse($conn, $stmt);
                    if (!oci_execute($stid)) {
                        $e = oci_error();
                        echo htmlentities($e['message'], ENT_QUOTES);
                        oci_close($conn);
                    } else {
                        // Retrieve the results
                        $row = oci_fetch_array($stid);
						$actor_name = $row['ACTOR_NAME'];
						$actor_surname = $row['ACTOR_SURNAME'];
						$cnt = $row['CNT'];
						echo "$actor_name $actor_surname (Count: $cnt)";
                    }
                    ob_end_flush();
                    ?>
					</h4>

					<h4><b>The director most directed movies: </b> 
                    <?php
                    require_once '../config.php';
                    ob_start();
                    // Prepare the query
                    $stmt = "SELECT * FROM (
					SELECT D.DIRECTOR_NAME, D.DIRECTOR_SURNAME, COUNT(MD.DIRECTOR_ID) AS CNT FROM DIRECTOR D JOIN MOVIE_DIRECTOR MD ON D.DIRECTOR_ID = MD.DIRECTOR_ID
					GROUP BY D.DIRECTOR_NAME, D.DIRECTOR_SURNAME, D.DIRECTOR_ID, MD.DIRECTOR_ID ORDER BY COUNT(MD.DIRECTOR_ID) DESC
					) WHERE ROWNUM=1";
                    $stid = oci_parse($conn, $stmt);
                    if (!oci_execute($stid)) {
                        $e = oci_error();
                        echo htmlentities($e['message'], ENT_QUOTES);
                        oci_close($conn);
                    } else {
                        // Retrieve the results
                        $row = oci_fetch_array($stid);
						$director_name = $row['DIRECTOR_NAME'];
						$director_surname = $row['DIRECTOR_SURNAME'];
						$cnt = $row['CNT'];
						echo "$director_name $director_surname (Count: $cnt)";
                    }
                    ob_end_flush();
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
