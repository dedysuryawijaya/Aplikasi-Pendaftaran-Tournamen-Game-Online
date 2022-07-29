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
    <title>Daftar</title>
</head>
<body>
    <div id="home" class="container ">
        <h2>Pendaftaran Tim</h2>
        <div class="row justify-content-center" >
            <div class="col-md-6">
              <form name="submit-to-google-sheet" action="tambahtim.php" enctype="multipart/form-data" method="POST">
                <?php 
                  if(isset($_SESSION['sql'])){ ?>
                    <br>
                    <input class="form-control" type="text" placeholder="<?= $_SESSION['sql'];  ?>" aria-label="Disabled input example" disabled>
                    <br>
                <?php  }
                  session_destroy(); ?>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" aria-describedby="email" name="email" required/>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" aria-describedby="password" name="password" minlength="8" maxlength="25" required />
                </div>
                <div class="mb-3">
                  <label for="namatim" class="form-label">Nama Tim</label>
                  <input type="text" class="form-control" id="namatim" aria-describedby="namatim" name="namatim" required/>
                </div>
                <div class="mb-3">
                  <label for="asal" class="form-label">Asal Kota/Kabupaten</label>
                  <input type="text" class="form-control" id="asal" aria-describedby="asal" name="asal" required/>
                </div>
                <div class="mb-3">
                  <label for="tlp" class="form-label">Nomor Telepon</label>
                  <input type="text" class="form-control" id="tlp" aria-describedby="tlp" name="tlp" required/>
                </div>
                <div class="mb-3">
                  <label for="logo" class="form-label">Logo tim</label>
                  <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" name="logo">
                </div>
                </div>
                <button type="submit" class="btn btn-primary btn-kirim"><i class="bi bi-plus-lg"></i> Daftar</button>
              </form>
            </div>
          </div>
</body>
</html>