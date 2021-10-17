<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link  rel="stylesheet" href="home.css">
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <section class="main">
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-5 align-self-center">
                    <h1 class="mb-3">Selamat datang <?=$_SESSION['nama_siswa']?><h1>
                    <p>
                        Selamat datang di website perpustakaan online 
                        dengan koleksi buku terlengkap.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="./images/home-banner-01.png" alt="image" width="120%"/> 
                </div>
            </div>
        </div>
    </section>
    <section class="kelebihan">
        <div class="container text-center my-5">
            <h2 class="mb-3">Kelebihan</h2>
            <div class="row pt-4 text-center">
                <div class="col">
                    <i class="fas fa-book fa-2x mb-3"></i>
                    <h5>Koleksi Buku Lengkap</h5>
                </div>
                <div class="col">
                    <i class="fas fa-window-restore fa-2x mb-3"></i>
                    <h5>Website Yang Mudah Diakses</h5>
                </div>
                <div class="col">
                    <i class="fas fa-clock fa-2x mb-3"></i>
                    <h5>Waktu Peminjaman Yang Lama</h5>
                </div>
                <div class="col">
                    <i class="fas fa-calendar-alt fa-2x mb-3"></i>
                    <h5>Selalu Update Setiap Minggu</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="tentang">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-sm-5">
                    <img src="./images/tentang-01.png" alt="image" width="70%"/> 
                </div>
                <div class="col-sm-5">
                    <h2>Tentang</h2>
                    <p>
                        Website ini merupakan website perpustakaan SMK Telkom Malang yang dibuat pada tahun 2021.
                        Website ini dibuat untuk memudahkan murid-murid dan warga SMK Telkom Malang lainnya dalam meninjam buku.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="koleksi">
        <div class="container my-5">
            <h2 class="text-center mb-3">Koleksi Terbaru</h2>
            <div class="album py-5">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                include "koneksi.php";
                $query_buku = mysqli_query($koneksi, "select * from buku order by id_buku desc limit 3");
                while($data_buku = mysqli_fetch_array($query_buku)){
                ?>  
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="../admin/gambar/<?=$data_buku['foto']?>" class="bd-placeholder-img card-img-top" width="100px" height="600px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/></img>

                        <div class="card-body card-koleksi">
                            <p class="card-text judul-buku"><b><?=$data_buku['nama_buku']?></b></p>
                            <p class="card-text deskripsi-buku"><?=$data_buku['deskripsi']?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="pinjam_buku.php?id_buku=<?=$data_buku['id_buku']?>" type="button" class="btn btn-sm btn-secondary">Pinjam</a>
                                </div>
                                <small class="text-muted"><?=$data_buku['pengarang']?></small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                </div>
            </div>
    </section>
    <section class="testimoni">
        <div class="container my-5 container-testi">
            <h2 class="text-center my-3">Testimoni</h2>
            <div class="row">
                <div class="col ml-2">
                    <div class="card card-testi text-center">
                        <img src="profilkosong.png" alt="image"> 
                        <div class="card-body">
                            <h5>Genta</h5>
                            <p class="card-text">"koleksi bukunya lengkap"
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col ml-2">
                    <div class="card card-testi text-center">
                        <img src="profilkosong.png" alt="image"> 
                        <div class="card-body">
                            <h5>Genta</h5>
                            <p class="card-text">"Pelayanannya sangat baik" 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card card-testi text-center">
                        <img src="profilkosong.png" alt="image"> 
                        <div class="card-body">
                            <h5>Genta</h5>
                            <p class="card-text">"koleksi bukunya selalu update terus" 
                            </p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <section class="kontak">
        <div class="container my-5">
            <h2 class="text-center my-3">Hubungi Kami</h2>
            <div class="row">
                <div class="col-md-6">
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="nama">
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Email">
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="No.Telp">
                </div>
                <div class="col-md-6">
                    <textarea class="form-control form-control-lg" rows="5"></textarea>
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn">Kirim Pesan</button>
            </div>
        </div>
    </section>
    <?php
        include "footer.php";
    ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>