<?php 
    session_start();
    include 'koneksi.php';
    if($_SESSION['adminid'] !== '1'){
        header('Location: dasboard.php');
    }

    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $username = $_POST['username'];
        $nama = $_POST['nama'];
        $tlp = $_POST['tlp'];

        $query = "INSERT INTO admin(username, pass, email, nama, nohp) VALUES ('".$username."','".$pass."','".$email."','".$nama."','".$tlp."')";

        $sql = mysqli_query(koneksi(),$query);
            if($sql){
                $_SESSION['sukses'] = 'Berhasil menambahkan admin';
                header("Location:tabeltim.php");
            }else{
                $_SESSION['gagal'] = 'Gagal memasukan dalam Database';
            }

    }


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
    <title>Tambah Admin</title>
</head>
<body>
<div id="home" class="container ">
        <h2>Pendaftaran Tim</h2>
        <div class="row justify-content-center" >
            <div class="col-md-6">
              <form name="submit-to-google-sheet" action="tambahadmin.php" enctype="multipart/form-data" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" aria-describedby="email" name="email" required/>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" aria-describedby="password" name="password" minlength="8" maxlength="25" required />
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" aria-describedby="username" name="username" required/>
                </div>
                <div class="mb-3">
                  <label for="Nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama" required/>
                </div>
                <div class="mb-3">
                  <label for="tlp" class="form-label">Nomor Telepon</label>
                  <input type="text" class="form-control" id="tlp" aria-describedby="tlp" name="tlp" required/>
                </div>
                <button type="submit" class="btn btn-primary btn-kirim"><i class="bi bi-plus-lg"></i> Daftar</button>
              </form>
            </div>
          </div>
</body>
</html>