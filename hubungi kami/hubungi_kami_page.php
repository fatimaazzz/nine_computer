<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nine computer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../constant/widget_style.css">
    <style>
        /* hero navbar */
        .hero {
            display: flex;
            align-items: center;
            margin: 20px;
            padding-bottom: 100px;
            padding-top: 20px;
        }

        .hero2 {
            padding-left: 100px;
            text-align: right;
            align-items: center;
            margin: 20px;
        }

        .mb-3{
            text-align: left;
        }

        .hero img {
            width: 700px;
            margin-right: 50px;
        }
    </style>
</head>
<?php
// Include the connection file
include "../koneksi/koneksi.php";
?>

<body>
       <!-- Bar Home -->
       <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <h1 class="navbar-brand">
                <a class="h1_anchor" href="../landing_page/landing_page.php">
                    Nine Computer
                </a>
            </h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../beranda/beranda_page.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../tentang kami/tentang_kami_page.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../hubungi kami/hubungi_kami_page.php">Hubungi Kami</a </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Ingin Melihat Produk ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Untuk melihat Produk lebih jelas, anda akan di alihkan ke halaman utama 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-primary"
                        onclick="window.location.href='../beranda/beranda_page.php'">Iya</button>
                </div>
            </div>
        </div>
    </div>




    <div class="hero">
        <img src="../assets/contact_two.jpg" alt="">
        <div class="hero2">
            <h1> Hubungi Kami </h1>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Masukkan Saran</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button class="btn-landing">
                <a class="text-btn-landing" href="">Kirim</a>
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p class="footer-text">&copy; 2024 Nite Computer. All rights reserved.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>