<!-- Show password protected content down here -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <title>Jack's File Viewer</title>
  </head>
  <body>
  <div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Enter the file you want to view!</h2>
        <label for="inputFile" class="sr-only">File</label>
        <input pattern="[A-Za-z0-9.]*" name="File" type="text" id="inputFile" class="form-control" placeholder="file" required autofocus>


        <button name="Submit" value="Login" class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
        <!--Note: No special characters, slashes, etc are allowed to be entered! That way only files in the current directory can be viewed. -->
        <?php
        $file = $_POST['File'];

    echo file_get_contents($_POST['File']);
    ?>

    </form>

</div>



    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
