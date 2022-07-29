<?php 
    session_start();
    include 'koneksi.php';
    
    //login tim
    if(isset($_POST['emailtim'])){
        $email = $_POST['emailtim'];
        $passtim = $_POST['passwordtim'];

        $querytim = "SELECT * FROM tim WHERE email = '".$email."' AND pass = '".$passtim."'";
        $datatim = query($querytim);
        $tim = $datatim[0];

        if(isset($datatim)){
            $_SESSION['nomortim'] = $tim['nomor'];
            header("Location: index.php#contact");
        }else{
            $_SESSION['error'] = "username / password salah";
            header("Location: index.php#contact");
        }
    }

?>