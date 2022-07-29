<?php
    
    session_start();

    if(!isset($_SESSION['nomor']) && !isset($_SESSION['tim'])){
        header("Location:daftaranggota.php");
        $_SESSION['daftaranggota'] = false;
    }

    include 'koneksi.php';

    $anggota = [
        [$_POST['nama1'],$_POST['nikename1'],$_POST['id1'],'Jungler',$_SESSION['nomor'],$_SESSION['tim']],
        [$_POST['nama2'],$_POST['nikename2'],$_POST['id2'],'Roamer',$_SESSION['nomor'],$_SESSION['tim']],
        [$_POST['nama3'],$_POST['nikename3'],$_POST['id3'],'MidLaner',$_SESSION['nomor'],$_SESSION['tim']],
        [$_POST['nama4'],$_POST['nikename4'],$_POST['id4'],'Goldlaner',$_SESSION['nomor'],$_SESSION['tim']],
        [$_POST['nama5'],$_POST['nikename5'],$_POST['id5'],'ExpLaner',$_SESSION['nomor'],$_SESSION['tim']],
    ];

    for($i = 0; $i<5 ;$i++){
            $query = "INSERT INTO anggota(nama, nickname, idgame, role, nomor, tim) VALUES ('".$anggota[$i][0]."','".$anggota[$i][1]."','".$anggota[$i][2]."','".$anggota[$i][3]."','".$anggota[$i][4]."','".$anggota[$i][5]."')";
            
            $sql =mysqli_query(koneksi(),$query);
            if($sql){
                $berhasil = true;
            }else{
                $berhasil = false;
                break;
            }
    }

    if($berhasil){
        $_SESSION['nomortim'] = $_SESSION['nomor'];
        $_SESSION['berhasil'] = "Selamat tim anda sudah terdaftar pada turnamen UNPCUP";
        header("Location:index.php#contact");
        
    }else{
        $del = "DELETE FROM anggota WHERE nomor = '".$_SESSION['nomor']."'";
        $sqldel = mysqli_query(koneksi(),$del);
        if($sqldel){
            $_SESSION['hapus'] = "Masukan identitas dengan benar";
            header("Location:daftaranggota.php");
        }
    }

    

?>