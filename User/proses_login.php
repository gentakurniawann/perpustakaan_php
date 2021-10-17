<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    include "koneksi.php";
    $qry_login=mysqli_query($koneksi, "select * from siswa where username = '".$username."' and password ='".md5($password)."' ");
    if(mysqli_num_rows($qry_login)>0){
        echo "<script>alert('login berhasil'); location.href='home.php';</script>";
        $dt_login=mysqli_fetch_array($qry_login);
        session_start();
        $_SESSION["id_siswa"]=$dt_login["id_siswa"];
        $_SESSION["nama_siswa"]=$dt_login["nama_siswa"];
        $_SESSION["status_login"]=true;
        header("location: home.php");
    }else{
        echo "<script>alert('username dan password tidak benar'); location.href='index.php';</script>";
    }
    
?>