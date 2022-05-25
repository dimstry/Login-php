<?php
  include("koneksi.php");
  $username=$_POST["use"];
  $password=$_POST["pw"];
  $tombol=$_POST["tombol"];
  
  if ($tombol) 
  {
    $Query=mysqli_query($koneksi,"SELECT * FROM user WHERE md5(username)=md5('$username') AND password=md5('$password')");

      if(mysqli_num_rows($Query))
      {
          $data=mysqli_fetch_assoc($Query);
          $_SESSION['id']=$data['id_user'];
          $_SESSION['jenis_log']=$data['nama'];
          header("location:home.php");
      }
      else
      {
        $ket="Login gagal";
      }
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
    <h1>Hello, world!</h1>
    $ket
    <div class='container-fluid'>
      <form method='POST' autocomplete='off'>
        <div class='form-group'>
          <label for='username'>Username</label>
          <input name='use' type='text' class='form-control' id='username' aria-describedby='emailHelp' placeholder='username'>
        </div>
        <div class='form-group'>
          <label for='password'>Password</label>
          <input name='pw' type='password' class='form-control' id='password' placeholder='Password'>
        </div>
        <input type='submit' class='btn btn-primary' value='Login' name='tombol'>
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