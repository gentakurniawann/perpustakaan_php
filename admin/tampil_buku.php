<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Buku</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet_tampil.css">
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center mt-2 mb-2">Data Buku<h3>
                <form action="tampil_buku.php" method="post">
                    <input type="text" name="cari" class="form-control mb-3" placeholder="Masukkan keyword pencarian">
                </form>
            </div>
            <div class="card-body">
                <table class="table table-bordered fs-5 fw-light text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Buku</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "koneksi.php";
                            if (isset($_POST["cari"])) {
                                // jika ada keyword pencarian 
                                $cari=$_POST['cari'];
                                $query_buku= mysqli_query($koneksi,"select * from buku where id_buku like '%$cari%' or nama_buku like '%$cari%' or pengarang like '%$cari%'");
                            }else{
                                //jika tidak ada keyword pencarian
                                $query_buku= mysqli_query($koneksi,"select * from buku");
                            }
                            while($data_buku= mysqli_fetch_array($query_buku)) { ?>
                                <tr>
                                    <td><?php echo $data_buku["id_buku"]; ?></td>
                                    <td><?php echo $data_buku["nama_buku"]; ?></td>
                                    <td><?php echo $data_buku["pengarang"]; ?></td>
                                    <td><?php echo $data_buku["deskripsi"]; ?></td>
                                    <td><img src="<?php echo "gambar/".$data_buku['foto']; ?>" width='200' height='300'></td>
                                    <td> <a href="ubah_buku.php?id_buku=<?=$data_buku['id_buku']?>" class="btn btn-success">Ubah</a> | <a href="hapus_buku.php?id_buku=<?=$data_buku['id_buku']?>" onclick="return confirm ('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                                </tr>
                            <?php
                            }
                            ?>
                    </tbody>
                </table>
                <a href="tambah_buku.php" type="button" class="btn btn-tambah">Tambah Buku</a>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>