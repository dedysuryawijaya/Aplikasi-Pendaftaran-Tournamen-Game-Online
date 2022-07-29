<?php 
    session_start();
    include 'koneksi.php';

    //mengambil i dari url
    $nomor = $_GET['i'];

    $query = "SELECT * FROM tim WHERE nomor = '".$nomor."'";
    $data = query($query);
    $file = $data[0]['logo'];
    var_dump($file);

    $del = "DELETE FROM anggota WHERE nomor = '".$nomor."'";
    $del2 = "DELETE FROM tim WHERE nomor = '".$nomor."'";
    $sqldel = mysqli_query(koneksi(),$del);
    $sqldel2 = mysqli_query(koneksi(),$del2);

    
    if($sqldel && $sqldel2){
        if(unlink("logo/".$file)){
            $_SESSION['hapus'] = "Data Berhasil Dihapus";
            header("Location: tabeltim.php");
        }else{
            echo "gagal hapus file";
        }
        
        
    }

?>