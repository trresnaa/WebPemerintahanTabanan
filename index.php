<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/index.css">
  <script>
    function peringatan () {
        alert("Terima kasih sudah login");
      }
  </script>
</head>
<body>
<?php
    if(isset($_GET['pesan'])) {
      if($_GET['pesan'] == "notfound") {
            echo "<script>alert('Email/Password Salah!')</script>";
          }
        }
?>
  <form action="login.php" method="post">
    <div class="card">
      <div class="card-header">
        <h3>Login</h3>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
        </li>
        <li class="list-group-item">
          <button type="submit" class="btn btn-login" onclick="peringatan()">Login</button>
        </li>
      </ul>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
