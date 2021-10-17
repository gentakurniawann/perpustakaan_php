<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
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
                <img src="./images/tambah_kelas-01.png" class="image-fluid" alt="image" width="100%" height="100%"/>
            </div>
            <div class="col-md-6">
                <h3 class="mb-2 text-center">Tambah Kelas</h3>
                <form method="POST" action="proses_tambah_kelas.php">
                    <div class="mb-4">
                        <!-- Nama kelas -->
                        <div class="mb-2">
                            <label for="nama_kelas" class="form-label">Nama Kelas :</label>
                            <input type="text" class="form-control form" name="nama_kelas" placeholder="Masukkan Nama Kelas" required>
                        </div>
                        <!-- kelompok -->
                        <div class="mb-2">
                            <label for="kelompok" class="form-label">Kelompok :</label>
                            <input type="text" class="form-control form" name="kelompok" placeholder="Masukkan Kelompok" required>
                        </div>
                    </div>
                    <button type="submit" class="btn">Tambah Kelas</button>
                </form>
            </div>
        </div>
        
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>