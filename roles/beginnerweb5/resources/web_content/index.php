<?php

  session_start(); /* Starts the session */

  if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
    header("location:login.php");
	  exit;
  }
?>

<!-- Show password protected content down here -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <title>Logged in</title>
  </head>
  <body>
    <div class="container">

      <div class="jumbotron">
        <h1>Status: logged in</h1>
        <p class="lead">
        <?php

  session_start(); /* Starts the session */

  if($_SESSION['Admin'] == true){ /* Redirects user to Login.php if not logged in */
    echo 'flag{d0ntr3ly0nauth3nt1cr3qu3st5}';
	  
  }
  else{
      echo 'No flag for non-admin sessions';
  }
?>

        </p>
        <p><a class="btn btn-lg btn-success" href="logout.php" role="button">Log out</a></p>
      </div>

      <footer class="footer">
        <p>&copy; Mario Font 2016</p>
      </footer>

    </div>

    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
