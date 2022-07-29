<?php 
    session_start();
    include 'koneksi.php';
    if(isset($_SESSION['adminid'])){
        $query = "SELECT * FROM tim";
        $data = query($query);
    }else{
        header("Location:login.php");
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
    <title>Table TIM</title>
</head>
<body>
    <div id="home" class="container">
        <h2>Daftar Tim</h2>
        <br>
        <h3>Hallo <?= $_SESSION['namaadmin'] ?></h3>
        <a href="logout.php" class="btn btn-primary btn-kirim"  onclick="return confirm('Apakah anda yakin?');"><i class="bi bi-box-arrow-left"></i> Log Out</a>
        <?php if($_SESSION['adminid'] == '1'){?>
            <a href="tambahadmin.php" class="btn btn-primary btn-kirim"><i class="bi bi-plus-lg"></i> Tambah Admin</a>
        <?php }?>
        <br>
        <br>
        <div class="input-group mb-3">
            <form action="" method="POST" class="row g-3">
                <input type="text" id="keyword" name="keyword" autocomplete="off" class="form-control col-auto" placeholder="pencarian.." aria-label="Recipient's username" aria-describedby="button-addon2">
            </form>
        </div>
        <br>
        <div id="tabel">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor Pendaftaran</th>
                        <th scope="col">Nama tim</th>
                        <th scope="col">Asal kota/Kab</th>
                        <th scope="col">AKsi</th>
                    </tr>
                </thead>
                <?php $i = 1; foreach($data as $key => $pg): ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $pg['nomor'] ?></td>
                        <td><?= $pg['nama'] ?></td>
                        <td><?= $pg['asal'] ?></td>
                        <td><a class="link-info" style="padding-right: 5px;" href="detailtim.php?i=<?php echo $pg['nomor']; ?>">Lihat</a><a class="link-danger" href="hapus.php?i=<?php echo $pg['nomor']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a></td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <script>
        var keyword = document.getElementById('keyword');
        var tombolcari = document.getElementById('cari');
        var tabel = document.getElementById('tabel');

        //even keyword
        keyword.addEventListener('keyup',function(){
            
            
            //ajax
            var objek = new XMLHttpRequest();

            //kesiapan ajax
            objek.onreadystatechange = function(){
                if(objek.readyState == 4 && objek.status == 200){
                    tabel.innerHTML = objek.responseText;
                }
            }

            //eksekusi ajax
            objek.open('GET', 'ajax.php?keyword=' + keyword.value, true);
            objek.send();
        })

    </script>
</body>
</html>
