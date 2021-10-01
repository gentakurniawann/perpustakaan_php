<?php
if($_POST){
    $id_peminjaman_buku=$_POST['id_peminjaman_buku'];
    $id_buku=$_POST['id_buku'];
    $qty=$_POST['qty'];
    if(empty($id_peminjaman_buku)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='detail_peminjaman_buku.php';</script>";
 
    } elseif(empty($id_buku)){
        echo "<script>alert('nama buku tidak boleh kosong');location.href='detail_peminjaman_buku.php';</script>";
    } elseif(empty($qty)){
        echo "<script>alert('jumlah tidak boleh kosong');location.href='detail_peminjaman_buku.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($koneksi,"insert into detail_peminjaman_buku (id_peminjaman_buku, id_buku, qty) value ('".$id_peminjaman_buku."','".$id_buku."','".$qty."')") or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses menambah detail peminjaman');location.href='tampil_detail.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan detail peminjaman');location.href='tampil_detail.php';</script>";
        }
    }
}
?>