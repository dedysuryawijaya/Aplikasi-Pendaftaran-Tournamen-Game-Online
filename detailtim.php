<?php
    session_start();
    if(isset($_GET['i'])){
        include 'koneksi.php';
        $i = $_GET['i'];
        $querytim = "SELECT * FROM tim WHERE nomor = '".$i."'";
        $queryanggota = "SELECT * FROM anggota WHERE nomor = '".$i."'";

        $datatim = query($querytim);
        $dataang = query($queryanggota);
        $tim = $datatim[0];
    }else{
        header('Location:index.php#contact');
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
    <title>Detail Tim</title>
</head>
<body>
    <section id="home">
        <div class="container">
            <h2>Detail Tim :</h2>
            <a href="tabeltim.php" class="btn btn-primary btn-kirim"><i class="bi bi-backspace"></i> Kembali</a>
        </div>
    
        <div class="home" style="padding-top: 50px;">
            <div>
                <img src="logo/<?=$tim['logo']?>" alt="foto" class="foto"> 
            </div>
            <div class="left">
                <h3>Nomor Pendaftaran : <?= $tim['nomor']?></h3>
                <h3>Nama Tim : <?= $tim['nama']?></h3>
                <h3>Asal : <?= $tim['asal']?></h3>
                <h3>Email : <?= $tim['email']?></h3>
                <h3>Nomor hp : <?= $tim['nomortlp']?></h3>
                <h3>Tanggal Daftar : <?= $tim['tgl']?></h3>
                <h3>status : Sudah Terdaftar</h3>
            </div>
        </div>
        <br><br>
        <br>
        <div class="container">
        <h3>Anggota Tim : </h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Player</th>
                <th scope="col">Nickname Game</th>
                <th scope="col">Gmae ID</th>
                <th scope="col">Role</th>
                </tr>
            </thead>
            <?php $i = 1; foreach($dataang as $key => $pg): ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><?= $pg['nama']?></td>
                    <td><?= $pg['nickname']?></td>
                    <td><?= $pg['idgame']?></td>
                    <td><?= $pg['role']?></td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
        </div>
    </section>
</body>
</html>