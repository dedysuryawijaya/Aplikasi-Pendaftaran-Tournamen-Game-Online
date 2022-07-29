<?php 

    session_start();

    include 'koneksi.php';

    date_default_timezone_set("ASIA/JAKARTA");
    $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $email = $_POST['email'];
    $pass = $_POST['password'];
    $nama = $_POST['namatim'];
    $asal = $_POST['asal'];
    $tlp = $_POST['tlp'];
    $file = $_FILES['logo'];

    $nomor = substr(str_shuffle($karakter),0,3).date('ymdHis');
    $tgl = date('l, d-m-y, H:i:s');
    $logo = $nomor.'_'.$file['name'];

    $pathlogo = "logo/".$logo;

    $query = "INSERT INTO tim(email, pass, nama, asal, logo, nomor, tgl, nomortlp) VALUES ('".$email."','".$pass."','".$nama."','".$asal."','".$logo."','".$nomor."','".$tgl."','".$tlp."')";


    function type($type){
        if($type == "image/jpeg" || $type == "image/png"){
            return true;
        }
        return false;
    }


    if(type($file['type'])){
        if(move_uploaded_file($file['tmp_name'],$pathlogo)){
            $sql = mysqli_query(koneksi(),$query);
            if($sql){
                $_SESSION['nomor'] = $nomor;
                $_SESSION['tim'] = $nama;
                header("Location:daftaranggota.php");
            }else{
                $_SESSION['sql'] = 'Gagal menyimpan ke database';
                header("Location: daftartim.php");
            }
        }else{
            $_SESSION['sql'] = 'Gagal Upload Logo';
            header("Location: daftartim.php");
        }
    }else{
        $_SESSION['sql'] = 'Logo harus bertipe Jpeg atau PNG';
        header("Location: daftartim.php");
    }
?>