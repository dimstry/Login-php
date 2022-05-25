<?php
  include("koneksi.php");
  
  echo "
  <!doctype html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css'>

    <title>Login</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class='container-fluid'>
      <form name='POST' autocomplete='off'>
        <div class='form-group'>
          <label for='username'>Username</label>
          <input name='use' type='text' class='form-control' id='username' aria-describedby='emailHelp' placeholder='username'>
          <input name='use' type='text' class='form-control' id='username' aria-describedby='emailHelp' placeholder='username'>
        </div>
        <div class='form-group'>
          <label for='password'>Password</label>
          <input name='pw' type='password' class='form-control' id='password' placeholder='Password'>
        </div>
        <input type='submit' class='btn btn-primary' value='Login'>
      </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js'></script>
  </body>
</html>
  ";
?>