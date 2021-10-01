<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembalian Buku</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <br></br>
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="pengembalian_buku-01.png" class="image-fluid" alt="image" width="100%" height="100%"/>
            </div>
            <div class="col-md-6">
                <h3 class="mb-2 text-center">Pengembalian Buku</h3>
                <form action="proses_pengembalian_buku.php" method="POST">
                    <div class="mb-4">
                        <!-- Siswa -->
                        <div class="mb-2">
                            <label class="form-label">Siswa :</label>
                            <select name="id_peminjaman_buku" class="form-control form">
                                <option></option>
                                <?php 
                                    include "koneksi.php";
                                    $qry_pinjam=mysqli_query($koneksi,"select * from siswa");
                                    while($data_pinjam=mysqli_fetch_array($qry_pinjam)){
                                        echo '<option value="'.$data_pinjam['id_siswa'].'">'.$data_pinjam['nama_siswa'].'</option>';    
                                    }
                                ?>
                            </select>
                        </div>
                        <!-- Tanggal Pengembalian -->
                        <div class="mb-2">
                            <label class="form-label">Tanggal Pengembalian :</label>
                            <input type="date" name="tanggal_pengembalian" class="form-control form" required> 
                        </div>
                        <!-- Denda -->
                        <div class="mb-4">
                            <label class="form-label">Denda :</label>
                            <input type="number" name="denda" class="form-control form" required> 
                        </div>
                    </div>
                    <input type = "submit" name ="simpan" value ="Tambah" class = "btn">
                </form> 
            </div>
        </div>
        
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>