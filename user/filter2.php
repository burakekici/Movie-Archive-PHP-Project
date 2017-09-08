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
                        <br>
						<li><a href="filters.php">Filter Movies By Genre</a></li>
						<li class="active"><a href="filter2.php">Filter Movies By Year and Length</a></li>
						<li><a href="filter3.php">Filter Actors By Age and Hometown</a></li>                        
						<br>
						<li><a href="statistics.php">Statistics</a></li>
                        <br>
                        <!-- 1 admin -->
                        <li><a href="crud/listadmin.php">List Admins</a></li>
                        <!-- 2 user -->
                        <li><a href="crud/listuser.php">List Users</a></li>
                        <br>
                        <!-- 3 movie -->
                        <li><a href="crud/listmovie.php">List Movies</a></li>
                        <li><a href="crud/addmovie.php">Add Movie</a></li>
                        <li><a href="crud/updatemovie.php">Update Movie</a></li>
                        <br>
                        <!-- 4 poster -->
                        <li><a href="crud/listposter.php">List Posters</a></li>
                        <!-- 5 trailer -->
                        <li><a href="crud/liststoryline.php">List Storyline</a></li>
                        <!-- 6 age_limit -->
                        <li><a href="crud/listagelimit.php">List Age Limits</a></li>
                        <!-- 7 genre -->
                        <li><a href="crud/listgenre.php">List Genres</a></li>
                        <!-- 8 award -->
                        <li><a href="crud/listlanguage.php">List Language</a></li>
                        <br>
                        <!-- 9 actor -->
                        <li><a href="crud/listactor.php">List Actors</a></li>
                        <!-- 10 director -->
                        <li><a href="crud/listdirector.php">List Directors</a></li>
                        <br>
                        <!-- 11 movie actor -->
                        <li><a href="crud/listmovieactor.php">List Movie Actors</a></li>
                        <br>
                        <!-- 12 movie director -->
                        <li><a href="crud/listmoviedirector.php">List Movie Directors</a></li>
                        <br>

                        <!-- 13 movie comment -->
                        <li><a href="crud/listmoviecomment.php">List Movie Comments</a></li>
                        <li><a href="crud/addmoviecomment.php">Add Movie Comment</a></li>
                        <li><a href="crud/updatemoviecomment.php">Update Movie Comment</a></li>
                        <li><a href="crud/deletemoviecomment.php">Delete Movie Comment</a></li>
                        <br>
                        <!-- 14 actor comment -->
                        <li><a href="crud/listactorcomment.php">List Actor Comments</a></li>
                        <li><a href="crud/addactorcomment.php">Add Actor Comment</a></li>
                        <li><a href="crud/updateactorcomment.php">Update Actor Comment</a></li>
                        <li><a href="crud/deleteactorcomment.php">Delete Actor Comment</a></li>
                        <br>
                        <!-- 15 director comment -->
                        <li><a href="crud/listdirectorcomment.php">List Director Comments</a></li>
                        <li><a href="crud/adddirectorcomment.php">Add Director Comment</a></li>
                        <li><a href="crud/updatedirectorcomment.php">Update Director Comment</a></li>
                        <li><a href="crud/deletedirectorcomment.php">Delete Director Comment</a></li>
                        <br>

                        <!-- 16 movie rating -->
                        <li><a href="crud/listmovierating.php">List Movie Ratings</a></li>
                        <li><a href="crud/addmovierating.php">Add Movie Rating</a></li>
                        <li><a href="crud/updatemovierating.php">Update Movie Rating</a></li>
                        <li><a href="crud/deletemovierating.php">Delete Movie Rating</a></li>
                        <br>
                        <!-- 17 actor rating -->
                        <li><a href="crud/listactorrating.php">List Actor Ratings</a></li>
                        <li><a href="crud/addactorrating.php">Add Actor Rating</a></li>
                        <li><a href="crud/updateactorrating.php">Update Actor Rating</a></li>
                        <li><a href="crud/deleteactorrating.php">Delete Actor Rating</a></li>
                        <br>
                        <!-- 18 director rating -->
                        <li><a href="crud/listdirectorrating.php">List Director Ratings</a></li>
                        <li><a href="crud/adddirectorrating.php">Add Director Rating</a></li>
                        <li><a href="crud/updatedirectorrating.php">Update Director Rating</a></li>
                        <li><a href="crud/deletedirectorrating.php">Delete Director Rating</a></li>

                    </ul>

                </div>

                <!-- Orta Sutun -->
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-3 main">

                    <h2 class="form-signin-heading">Movies by length and language</h2>
                    <br>

                    <form method="POST" action="filter2.php">
                        <div class="form-group">
                            <label class="col-xs-2 control-label">Length</label>
                            <div class="col-xs-4 selectContainer">
                                <select class="form-control" name="length">
                                    <option value="">Select a length</option>
                                    <?php
                                    require_once '../config.php';
                                    ob_start();

                                    $stmt = "SELECT DISTINCT MOVIE_LENGTH FROM MOVIE";
                                    $stid = oci_parse($conn, $stmt);

                                    if (!oci_execute($stid)) {
                                        $e = oci_error();
                                        echo htmlentities($e['message'], ENT_QUOTES);
                                        oci_close($conn);
                                    } else {
                                        while ($row = oci_fetch_array($stid)) {
                                            echo "<option value= \"" . $row['MOVIE_LENGTH'] . "\">" . $row['MOVIE_LENGTH'] . "</option>";
                                        }
                                        echo "</table>";
                                    }

                                    ob_end_flush();

                                    ?>
                                </select>
                            </div>
                        </div>


                        <input type="radio" name="operator"
                            <?php if (isset($operator) && $operator == "less") echo "checked"; ?>
                               value="less">Less Than

                        <input type="radio" name="operator"
                            <?php if (isset($operator) && $operator == "greater") echo "checked"; ?>
                               value="greater">Greater

                        <br><br>

                        <div class="form-group">
                            <label class="col-xs-2 control-label">Language</label>
                            <div class="col-xs-4 selectContainer">
                                <select class="form-control" name="language">
                                    <option value="">Select a language</option>
                                    <?php
                                    require_once '../config.php';
                                    ob_start();

                                    $stmt = "SELECT DISTINCT LANGUAGE FROM LANGUAGE";
                                    $stid = oci_parse($conn, $stmt);

                                    if (!oci_execute($stid)) {
                                        $e = oci_error();
                                        echo htmlentities($e['message'], ENT_QUOTES);
                                        oci_close($conn);
                                    } else {
                                        while ($row = oci_fetch_array($stid)) {
                                            echo "<option value= \"" . $row['LANGUAGE'] . "\">" . $row['LANGUAGE'] . "</option>";
                                        }
                                        echo "</table>";
                                    }

                                    ob_end_flush();

                                    ?>
                                </select>
                            </div>
                        </div>


                        <br><br><br><br>

                        <div class="form-group">
                            <div class="col-xs-3 col-xs-offset-2">
                                <button type="submit" name="listing" class="btn btn-default">List!</button>
                            </div>
                        </div>

                        <br><br><br>

                        <?php
                        require_once '../config.php';
                        ob_start();

                        if (!empty($_POST['length']) && !empty($_POST['operator']) && !empty($_POST['language'])) {

                            if (($_POST['operator']) == "less") {
                                $opt = "<=";
                            } else {
                                $opt = ">=";
                            }

                            $selectedlength = ($_POST['length']);
                            $selectedlanguage = ($_POST['language']);


                            // Prepare the query
                            $stmt = "SELECT M.MOVIE_TITLE, M.MOVIE_LENGTH, L.LANGUAGE FROM MOVIE M JOIN LANGUAGE L ON M.MOVIE_ID = L.LANGUAGE_ID WHERE L.LANGUAGE LIKE '$selectedlanguage' AND M.MOVIE_LENGTH $opt $selectedlength";
                            $stid = oci_parse($conn, $stmt);

                            if (!oci_execute($stid)) {
                                $e = oci_error();
                                echo htmlentities($e['message'], ENT_QUOTES);
                                oci_close($conn);
                            } else {
                                // Retrieve the results
                                echo "<table class=\"table table-striped\"";
                                echo "<thead> <tr> <th>Movie Title</th> <th>Length(min)</th> <th>Language</th>";
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
                        }

                        ob_end_flush();
                        ?>


                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/index.js"></script>
</body>
</html>
