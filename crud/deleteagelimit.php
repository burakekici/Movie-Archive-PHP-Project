<?php
require_once '../config.php';
ob_start();
session_start();

$memberID= $_SESSION["m_id"];

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
  <nav class="navbar navbar-inverse navbar-fixed-top">
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
          <li class="active"><a href="../adminpanel.php">Admin Panel</a></li>
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
              <li><a href="../adminpanel.php">Admin Homepage</a></li>
              <br>
              <!-- 1 admin -->
              <li><a href="../user/listadmin.php">List Admins</a></li>
              <li><a href="addadmin.php">Add Admin</a></li>
              <li><a href="updateadmin.php">Update Admin</a></li>
              <li><a href="deleteadmin.php">Delete Admin</a></li>
              <br>
              <!-- 2 user -->
              <li><a href="../user/listuser.php">List Users</a></li>
              <li><a href="adduser.php">Add User</a></li>
			  <li><a href="updateuser.php">Update User</a></li>
              <li><a href="deleteuser.php">Delete User</a></li>
              <br>
              <!-- 3 movie -->
              <li><a href="../user/listmovie.php">List Movies</a></li>
              <li><a href="addmovie.php">Add Movie</a></li>
              <li><a href="updatemovie.php">Update Movie</a></li>
              <li><a href="deletemovie.php">Delete Movie</a></li>
              <br>
              <!-- 4 poster -->
              <li><a href="../user/listposter.php">List Posters</a></li>
              <li><a href="addposter.php">Add Poster</a></li>
              <li><a href="updateposter.php">Update Poster</a></li>
              <li><a href="deleteposter.php">Delete Poster</a></li>
              <br>
              <!-- 5 trailer -->
              <li><a href="../user/liststoryline.php">List Storyline</a></li>
              <li><a href="addstoryline.php">Add Storyline</a></li>
              <li><a href="updatestoryline.php">Update Storyline</a></li>
              <li><a href="deletestoryline.php">Delete Storyline</a></li>
              <br>
              <!-- 6 age_limit -->
              <li><a href="../user/listagelimit.php">List Age Limits</a></li>
              <li><a href="addagelimit.php">Add Age Limit</a></li>
              <li><a href="updateagelimit.php">Update Age Limit</a></li>
              <li class="active"><a href="deleteagelimit.php">Delete Age Limit</a></li>
              <br>
              <!-- 7 genre -->
              <li><a href="../user/listgenre.php">List Genres</a></li>
              <li><a href="addgenre.php">Add Genre</a></li>
              <li><a href="updategenre.php">Update Genre</a></li>
              <li><a href="deletegenre.php">Delete Genre</a></li>
              <br>
              <!-- 8 award -->
              <li><a href="../user/listlanguage.php">List Language</a></li>
              <li><a href="addlanguage.php">Add Language</a></li>
              <li><a href="updatelanguage.php">Update Language</a></li>
              <li><a href="deletelanguage.php">Delete Language</a></li>
              <br>
              <!-- 9 actor -->
              <li><a href="../user/listactor.php">List Actors</a></li>
              <li><a href="addactor.php">Add Actor</a></li>
              <li><a href="updateactor.php">Update Actor</a></li>
              <li><a href="deleteactor.php">Delete Actor</a></li>
              <br>
              <!-- 10 director -->
              <li><a href="../user/listdirector.php">List Directors</a></li>
              <li><a href="adddirector.php">Add Director</a></li>
              <li><a href="updatedirector.php">Update Director</a></li>
              <li><a href="deletedirector.php">Delete Director</a></li>
              <br>
			  <!-- 11 movie actor -->
              <li><a href="../user/listmovieactor.php">List Movie Actors</a></li>
              <li><a href="addmovieactor.php">Add Movie Actor</a></li>
              <li><a href="deletemovieactor.php">Delete Movie Actor</a></li>
              <br>
			  <!-- 12 movie director -->
              <li><a href="../user/listmoviedirector.php">List Movie Directors</a></li>
              <li><a href="addmoviedirector.php">Add Movie Director</a></li>
              <li><a href="deletemoviedirector.php">Delete Movie Director</a></li>
              <br>
			  
              <!-- 13 movie comment -->
              <li><a href="../user/listmoviecomment.php">List Movie Comments</a></li>
              <li><a href="addmoviecomment.php">Add Movie Comment</a></li>
              <li><a href="updatemoviecomment.php">Update Movie Comment</a></li>
              <li><a href="deletemoviecomment.php">Delete Movie Comment</a></li>
              <br>
			  <!-- 14 actor comment -->
              <li><a href="../user/listactorcomment.php">List Actor Comments</a></li>
              <li><a href="addactorcomment.php">Add Actor Comment</a></li>
              <li><a href="updateactorcomment.php">Update Actor Comment</a></li>
              <li><a href="deleteactorcomment.php">Delete Actor Comment</a></li>
              <br>
			  <!-- 15 director comment -->
              <li><a href="../user/listdirectorcomment.php">List Director Comments</a></li>
              <li><a href="adddirectorcomment.php">Add Director Comment</a></li>
              <li><a href="updatedirectorcomment.php">Update Director Comment</a></li>
              <li><a href="deletedirectorcomment.php">Delete Director Comment</a></li>
              <br>
			  
              <!-- 16 movie rating -->
              <li><a href="../user/listmovierating.php">List Movie Ratings</a></li>
              <li><a href="addmovierating.php">Add Movie Rating</a></li>
              <li><a href="updatemovierating.php">Update Movie Rating</a></li>
              <li><a href="deletemovierating.php">Delete Movie Rating</a></li>
              <br>
			  <!-- 17 actor rating -->
              <li><a href="../user/listactorrating.php">List Actor Ratings</a></li>
              <li><a href="addactorrating.php">Add Actor Rating</a></li>
              <li><a href="updateactorrating.php">Update Actor Rating</a></li>
              <li><a href="deleteactorrating.php">Delete Actor Rating</a></li>
              <br>
			  <!-- 18 director rating -->
              <li><a href="../user/listdirectorrating.php">List Director Ratings</a></li>
              <li><a href="adddirectorrating.php">Add Director Rating</a></li>
              <li><a href="updatedirectorrating.php">Update Director Rating</a></li>
              <li><a href="deletedirectorrating.php">Delete Director Rating</a></li>
			  
            </ul>
            
          </div>
          
          <!-- Orta Sutun -->
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-3 main">
            
            <h2 class="form-signin-heading">List of Genres</h2>
            
            <?php
            require_once '../config.php';
            ob_start();
            
            // Prepare the query
            $stmt = "SELECT al.AGELIMIT_ID,m.MOVIE_TITLE,al.AGELIMIT FROM AGELIMIT al,MOVIE m WHERE m.MOVIE_ID=al.AGELIMIT_ID ORDER BY AGELIMIT ";
            $stid = oci_parse($conn, $stmt);
            
            if( !oci_execute($stid) ) {
              $e = oci_error();
              echo htmlentities($e['message'], ENT_QUOTES);
              oci_close($conn);
            } else {
              // Retrieve the results
              echo "<table class=\"table table-hover\"";
              echo "<thead> <tr> <th>ID</th> <th>Movie</th> <th>Age limit</th> </tr> </thead>";
              // Print the results
              while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                echo "<tr>\n";
                foreach ($row as $item) {
                  echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
                }
                echo "</tr>\n";
              }
              echo "</table>\n";
            }
            
            ob_end_flush();
            ?>

		  <br><br><br>
           
            
            <form class="form-signin"  method="POST" action = "deleteagelimit.php">
              <h2 class="form-signin-heading">Delete Agelimit</h2>
              <label for="inputMovieID" class="sr-only">Movie ID</label>
              <input type="number" name="inputMovieID" id="inputMovieID" class="form-control" placeholder="Movie ID" required autofocus>
              <br>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Delete</button>
			  <?php
			  require_once '../config.php';
			  ob_start();
              
			  // Delete movie
              if (!empty($_POST['inputMovieID'])){
                $id =($_POST['inputMovieID']);
                
                // prepare the query
                $stmt = "CALL DELETE_AGELIMIT ('$id')";
                $stid = oci_parse($conn, $stmt);
                
                // execute the query
                if( !oci_execute($stid) ) {
                  $e = oci_error();
                  echo "<div class=\"alert alert-danger\"><strong>Failed!</strong> Please check the ID.</div>";	
                  echo htmlentities($e['message'], ENT_QUOTES);
                  oci_close($conn);
                } else {
					$currentTime = date("G:i:s");
					$currentDate = date("d-m-Y");
					$stmt = "CALL ADD_LOG('Agelimit $agelimit with ID $id is deleted at $currentTime on $currentDate.')";
					$stid = oci_parse($conn, $stmt);
					oci_execute($stid);
					
                  echo "<div class=\"alert alert-success\"><strong>Success!</strong> Agelimit is deleted.</div>";
                }
              }
              ob_end_flush();
              ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="js/index.js"></script>
</body>
</html>
