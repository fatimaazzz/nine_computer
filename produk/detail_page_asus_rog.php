<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nite Computer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../constant/widget_style.css">
    <style>
        .container-one {
            display: flex;
            align-items: center;
        }

        .hero2 {
            padding: 60px;
            align-items: center;
            /* margin: 20px; */
        }

        .container-detail {
            margin-left: 200px;
            text-align: center;
            justify-content: center;
        }

        .container-one img{
            margin-right: 50px;
        }

        .container-detail h1 {
            text-align: center;
        }

        .brg-text {
            text-align: left;
        }

        .desk-brg {
            display: flex;
        }

        .desk-brg .brg-text:first-child {
            margin-right: 10px;
        }
    </style>
</head>


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
                        <a class="nav-link" href="#card-product">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../hubungi kami/hubungi_kami_page.php">Hubungi Kami</a </li>
                </ul>
            </div>
        </div>
    </nav>
    
           

    <?php
    // Include the connection file
    include "../koneksi/koneksi.php";
    ?>
    <div class="container-one">
        <img src="../assets/asus_rog_card.jpg" alt="Product Image" class="product-image">
        <div class="container-detail">
            <h1>Detail Produk</h1>
            <?php
            // Check if the connection was established
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM barang LIMIT 1"; // Fetch only one product
            $hasil = mysqli_query($conn, $sql);

            // Check if the query was successful
            if (!$hasil) {
                die("Query failed: " . mysqli_error($conn));
            }

            $data = mysqli_fetch_array($hasil);

            if ($data) {
                ?>
                <div class="desk-brg">
                    <p class="brg-text">Nama Barang:</p>
                    <p><?php echo htmlspecialchars($data["nama_barang"]); ?></p>
                </div>
                <div class="desk-brg">
                    <p class="brg-text">Deskripsi:</p>
                    <p><?php echo htmlspecialchars($data["deskripsi"]); ?></p>
                </div>
                <div class="desk-brg">
                    <p class="brg-text">Stok:</p>
                    <p><?php echo htmlspecialchars($data["stok"]); ?></p>
                </div>
                <div class="desk-brg">
                    <p class="brg-text">Harga:</p>
                    <p><?php echo htmlspecialchars($data["harga"]); ?></p>
                </div>
                <div class="desk-brg">
                    <p class="brg-text">Jumlah Beli:</p>
                    <input type="number" id="jumlah-beli" min="1" value="1" onchange="hitungTotal(<?php echo $data['harga']; ?>)">
                </div>
                <div class="desk-brg">
                    <p class="brg-text">Total Harga:</p>
                    <p class="brg-text" id="total-harga">0</p>
                </div>
                <button class="btn-landing" onclick="beliBarang()">
                    <a class="text-btn-landing" href="#">Beli</a>
                </button>
                <?php
            } else {
                echo "<p>No product found.</p>";
            }

            // Close the connection
            mysqli_close($conn);
            ?>
        </div>
    </div>




    <!-- Footer -->
    <footer class="footer">
        <p class="footer-text">&copy; 2024 Nite Computer. All rights reserved.</p>
    </footer>

    <script>
        function hitungTotal(harga) {
            var jumlahBeli = parseInt(document.getElementById("jumlah-beli").value);
            var totalHarga = harga * jumlahBeli;
            document.getElementById("total-harga").textContent = totalHarga.toLocaleString();
        }

        function beliBarang() {
            var namaBarang = "<?php echo htmlspecialchars($data['nama_barang']); ?>";
            var jumlahBeli = parseInt(document.getElementById("jumlah-beli").value);
            var harga = <?php echo htmlspecialchars($data['harga']); ?>;
            var totalHarga = harga * jumlahBeli;

            var konfirmasi = confirm("Anda akan membeli " + namaBarang + " sebanyak " + jumlahBeli + " buah, dengan total harga " + totalHarga.toLocaleString() + " ?.");

            if (konfirmasi) {
                alert("Terima kasih! Wujudkan Pembelian Anda di toko terdekat kami.");
            }
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>