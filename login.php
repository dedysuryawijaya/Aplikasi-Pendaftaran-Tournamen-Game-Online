<?php 
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/style.css">
    <title>Login Admin</title>
</head>
<body>
    <!----login----> 
    <section id="home">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Login Admin</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <form name="login" method="POST" action="validasilogin.php">
              <?php if(isset($_SESSION['gagal'])){ ?>
                <p style="color: red;"><?php echo $_SESSION['gagal']?></p>
              <?php };?>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" aria-describedby="username" name="username" required/>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" aria-describedby="password" name="password" />
                </div>
                <button type="submit" class="btn btn-primary btn-kirim" name="login"><i class="bi bi-box-arrow-in-right"></i> Login</button>
              </form>
            </div>
          </div>
        </div>
    </section>
</body>
</html>