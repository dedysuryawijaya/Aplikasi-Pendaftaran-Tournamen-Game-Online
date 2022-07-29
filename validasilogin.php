<?php 
    session_start();
    include 'koneksi.php';


    //login admin

    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $pass = $_POST['password'];

        $query = "SELECT * FROM admin WHERE username = '".$username."' AND pass = '".$pass."'";
        $data = query($query);
        $admin = $data[0];

        if(isset($data)){
            $_SESSION['namaadmin'] = $admin['nama'] ;
            $_SESSION['adminid'] = $admin['id'];
            $_SESSION['message']= 'anda berhasil login';
            header("Location: tabeltim.php");
        }else{
            $_SESSION['gagal'] = 'username / password salah';
            header("Location: login.php");
            
        }
    }


    

?>