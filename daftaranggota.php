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
        <h2>Pendaftaran anggota tim</h2>
        <div class="row justify-content-center" >
            <div class="col-md-6">
              <br>
              <br>
              <form name="submit-to-google-sheet" action="tambahanggota.php" enctype="multipart/form-data" method="POST">
                <div class="mb-3">
                  <h3>Nomor Pendaftaran : <?= $_SESSION['nomor']; ?></h3>
                </div>
                <br>
                <div class="mb-3">
                  <h3>Posisi Jungler : </h3>
                </div>
                <div class="mb-3">
                  <label for="Nama1" class="form-label">Nama Player</label>
                  <input type="text" class="form-control" id="nama1" aria-describedby="nama1" name="nama1" />
                </div>
                <div class="mb-3">
                  <label for="nikname1" class="form-label">Nickname game Player</label>
                  <input type="text" class="form-control" id="nikname1" aria-describedby="nikname1" name="nikename1" required/>
                </div>
                <div class="mb-3">
                  <label for="id1" class="form-label">ID game</label>
                  <input type="text" class="form-control" id="id1" aria-describedby="id1" name="id1" required/>
                </div>
                <br>
                <br>

                <div class="mb-3">
                  <h3>Posisi Roamer : </h3>
                </div>
                <div class="mb-3">
                  <label for="Nama2" class="form-label">Nama Player</label>
                  <input type="text" class="form-control" id="nama2" aria-describedby="nama2" name="nama2" />
                </div>
                <div class="mb-3">
                  <label for="nikname2" class="form-label">Nickname game Player</label>
                  <input type="text" class="form-control" id="nikname2" aria-describedby="nikname2" name="nikename2" required/>
                </div>
                <div class="mb-3">
                  <label for="id2" class="form-label">ID game</label>
                  <input type="text" class="form-control" id="id2" aria-describedby="id2" name="id2" required/>
                </div>
                <br>
                <br>

                <div class="mb-3">
                  <h3>Posisi MidLaner : </h3>
                </div>
                <div class="mb-3">
                  <label for="Nama3" class="form-label">Nama Player</label>
                  <input type="text" class="form-control" id="nama3" aria-describedby="nama3" name="nama3" />
                </div>
                <div class="mb-3">
                  <label for="nikname3" class="form-label">Nickname game Player</label>
                  <input type="text" class="form-control" id="nikname3" aria-describedby="nikname3" name="nikename3" required/>
                </div>
                <div class="mb-3">
                  <label for="id3" class="form-label">ID game</label>
                  <input type="text" class="form-control" id="id3" aria-describedby="id3" name="id3" required/>
                </div>
                <br>
                <br>

                <div class="mb-3">
                  <h3>Posisi GoldLaner : </h3>
                </div>
                <div class="mb-3">
                  <label for="Nama4" class="form-label">Nama Player</label>
                  <input type="text" class="form-control" id="nama4" aria-describedby="nama4" name="nama4" />
                </div>
                <div class="mb-3">
                  <label for="nikname4" class="form-label">Nickname game Player</label>
                  <input type="text" class="form-control" id="nikname4" aria-describedby="nikname4" name="nikename4" required/>
                </div>
                <div class="mb-3">
                  <label for="id4" class="form-label">ID game</label>
                  <input type="text" class="form-control" id="id4" aria-describedby="id4" name="id4" required/>
                </div>
                <br>
                <br>

                <div class="mb-3">
                  <h3>Posisi ExpLaner : </h3>
                </div>
                <div class="mb-3">
                  <label for="Nama5" class="form-label">Nama Player</label>
                  <input type="text" class="form-control" id="nama5" aria-describedby="nama5" name="nama5" />
                </div>
                <div class="mb-3">
                  <label for="nikname5" class="form-label">Nickname game Player</label>
                  <input type="text" class="form-control" id="nikname5" aria-describedby="nikname5" name="nikename5" required/>
                </div>
                <div class="mb-3">
                  <label for="id5" class="form-label">ID game</label>
                  <input type="text" class="form-control" id="id5" aria-describedby="id5" name="id5" required/>
                </div>
                <br>         
                <button type="submit" class="btn btn-primary btn-kirim" onclick="return confirm('Apakah anda yakin?');"><i class="bi bi-plus-lg"></i> Daftar</button>
              </form>
              <br><br>
            </div>
          </div>
</body>
</html>