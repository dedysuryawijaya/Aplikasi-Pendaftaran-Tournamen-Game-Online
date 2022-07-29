<?php 
    

    function koneksi(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        return mysqli_connect($host, $user, $pass, "unpcup");
    };

    function query($query){
        $conn = koneksi();
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }

?>