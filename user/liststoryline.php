<?php
require_once '../config.php';
ob_start();
session_start();

$memberID= $_SESSION["m_id"];
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
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
              <li><a href="../home.php">Homepage</a></li>
              <br>
              <li><a href="listshortestmovies.php">List Shortest Movies</a></li>
              <li><a href="listnewestmovies.php">List Newest Movies</a></li>
              <li><a href="listmoviesbyagelimits.php">List Movies' Age Limits</a></li>
              <li><a href="filters.php">Filters</a></li>
              <li><a href="statistics.php">Statistics</a></li>
              <br>
              
              <!-- 1 admin -->
              <li><a href="listadmin.php">List Admins</a></li>
              <br>
              <!-- 2 user -->
			  <li><a href="listuser.php">List Users</a></a></li>
              <br>
              <!-- 3 movie -->
              <li><a href="listmovie.php">List Movies</a></a></li>
              <br>
              <!-- 4 poster -->
              <li><a href="listposter.php">List Posters</a></li>
              <br>
              <!-- 5 trailer -->
              <li class="active"><a href="liststoryline.php">List Storyline<span class="sr-only">(current)</span></a></li>
              <br>
              <!-- 6 age_limit -->
              <li><a href="listagelimit.php">List Age Limits</a></li>
              <br>
              <!-- 7 genre -->
              <li><a href="listgenre.php">List Genres</a></li>
              <br>
              <!-- 8 award -->
              <li><a href="listlanguage.php">List Language</a></li>
              <br>
              <!-- 9 actor -->
              <li><a href="listactor.php">List Actors</a></li>
              <br>
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
              <li><a href="addmoviecomment.php">Add Movie Comment</a></li>
              <li><a href="updatemoviecomment.php">Update Movie Comment</a></li>
              <li><a href="deletemoviecomment.php">Delete Movie Comment</a></li>
              <br>
			  <!-- 14 actor comment -->
              <li><a href="listactorcomment.php">List Actor Comments</a></li>
              <li><a href="addactorcomment.php">Add Actor Comment</a></li>
              <li><a href="updateactorcomment.php">Update Actor Comment</a></li>
              <li><a href="deleteactorcomment.php">Delete Actor Comment</a></li>
              <br>
			  <!-- 15 director comment -->
              <li><a href="listdirectorcomment.php">List Director Comments</a></li>
              <li><a href="adddirectorcomment.php">Add Director Comment</a></li>
              <li><a href="updatedirectorcomment.php">Update Director Comment</a></li>
              <li><a href="deletedirectorcomment.php">Delete Director Comment</a></li>
              <br>
			  
              <!-- 16 movie rating -->
              <li><a href="listmovierating.php">List Movie Ratings</a></li>
              <li><a href="addmovierating.php">Add Movie Rating</a></li>
              <li><a href="updatemovierating.php">Update Movie Rating</a></li>
              <li><a href="deletemovierating.php">Delete Movie Rating</a></li>
              <br>
			  <!-- 17 actor rating -->
              <li><a href="listactorrating.php">List Actor Ratings</a></li>
              <li><a href="addactorrating.php">Add Actor Rating</a></li>
              <li><a href="updateactorrating.php">Update Actor Rating</a></li>
              <li><a href="deleteactorrating.php">Delete Actor Rating</a></li>
              <br>
			  <!-- 18 director rating -->
              <li><a href="listdirectorrating.php">List Director Ratings</a></li>
              <li><a href="adddirectorrating.php">Add Director Rating</a></li>
              <li><a href="updatedirectorrating.php">Update Director Rating</a></li>
              <li><a href="deletedirectorrating.php">Delete Director Rating</a></li>
			  
            </ul>
            
          </div>
          
          <!-- Orta Sutun -->
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-3 main">
            
            <h2 class="form-signin-heading">List of Storylines</h2>
            
            <?php
            require_once '../config.php';
            ob_start();
            
            // Prepare the query
            $stmt = "SELECT s.STORYLINE_ID,m.MOVIE_TITLE,s.STORYLINE_CONTEXT FROM STORYLINE s,MOVIE m WHERE m.MOVIE_ID=s.STORYLINE_ID ORDER BY STORYLINE_ID ";
            $stid = oci_parse($conn, $stmt);
            
            if( !oci_execute($stid) ) {
              $e = oci_error();
              echo htmlentities($e['message'], ENT_QUOTES);
              oci_close($conn);
            } else {
              // Retrieve the results
              echo "<table class=\"table table-hover\"";
              echo "<thead> <tr> <th>ID</th> <th>Movie</th> <th>Storyline</th> </tr> </thead>";
              // Print the results
			  while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                echo "<tr>\n";
                foreach ($row as $item) {
                  echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
                }
                echo "</tr>\n";
              }
              oci_close($conn);
              echo "</table>\n";
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
