<?php
if($_POST){
    $id_peminjaman_buku=$_POST['id_peminjaman_buku'];
    $tanggal_pengembalian=$_POST['tanggal_pengembalian'];
    $denda=$_POST['denda'];
    if(empty($id_peminjaman_buku)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='pengembalian_buku.php';</script>";
 
    } elseif(empty($tanggal_pengembalian)){
        echo "<script>alert('tanggal pengembalian tidak boleh kosong');location.href='pengembalian_buku.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($koneksi,"insert into pengembalian_buku (id_peminjaman_buku, tanggal_pengembalian, denda) value ('".$id_peminjaman_buku."','".$tanggal_pengembalian."','".$denda."')") or die(mysqli_error($koneksi));
        if($insert){
            echo "<script>alert('Sukses menambahkan data pengembalian');location.href='tampil_pengembalian.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data pengembalian');location.href='tampil_pengembalian.php';</script>";
        }
    }
}
?>