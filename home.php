<?php
  $tombol=$_POST["tombol"];
  if ($tombol) {
    $_SESSION['id']="";
    $_SESSION['jenis_log']="";
    header("location:index.php");
  }
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
    <h1>Selamat datang $nama</h1>
    <form method='POST'>
      <input type='submit' class='btn btn-primary' value='Logout' name='tombol'>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js'></script>
  </body>
</html>
  ";
?>