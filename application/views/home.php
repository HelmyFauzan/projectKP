<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="<?php echo base_url('asset/css/home.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>">
    <link rel="shortcut icon" href="<?php echo base_url('asset/image/logo.png') ?>">
    <script src="<?php echo base_url('asset/css/home.js') ?>"></script>


    <style>
        footer {
            background-color: #FF4500;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        img {
            float: right;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg nav class="navbar navbar-light" style="background-color: #FF4500;">
 
 <a class="navbar-brand" href="#">CV. CYBERCODE MEDIA ALTERNATIF</a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">

   <ul class="navbar-nav mr-auto">
     <li class="nav-item active">
       <a class="nav-link" href="<?php echo site_url('home') ?>">Home<span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="<?php echo site_url('profile') ?>">Profile Perusahaan</a>
     </li>
     <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Informasi
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="<?php echo site_url('table2') ?>">Daftar Produk</a>
         <a class="dropdown-item" href="<?php echo site_url('table1') ?>">Daftar Pegawai</a>
         <a class="dropdown-item" href="<?php echo site_url('aboutus') ?>">About Us</a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="<?php echo site_url('home/logout') ?>">Log Out</a>
       </div>
     </li>
     <li class="nav-item">
     <a class="nav-link active" href="<?php echo site_url('aboutus') ?>" tabindex="-1" aria-disabled="true">About Us</a>
     </li>
   </ul>

   <form class="form-inline my-2 my-lg-0">
     <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
   </form>

</div>
</nav>


    <div class="jumbotron">
    
        <center>
            <h2> Selamat Datang

                <?php echo $this->session->userdata('username'); ?>
                di Website Kami !</h2>
            <h2>CV. CYBERCODE MEDIA ALTERNATIF</h2>
            <p align="center">Website ini dibuat untuk memudahkan user agar dapat mengetahui mengenai informasi tentang CV. Cybercode Media Alternatif <br /><br />
            <p><a class="btn btn-primary btn-lg" href="<?php echo site_url('table2') ?>" role="button">Lihat Produk !</a></p>
        </center>
    </div>

    <div class="container">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('asset/image/logo2.jpg') ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kelebihan yang dimiliki Cybercode Media Alternatif</h5>
                            <p>Memiliki beragam warna kain yang menarik</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('asset/image/logo2.jpg') ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kelebihan yang dimiliki CV. Cybercode Media Alternatif</h5>
                            <p>Kemampuan belajar dan adaptasi</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('asset/image/logo.png') ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kelebihan yang dimiliki CV. Cybercode Media Alternatif</h5>
                            <p>Kapasitas untuk menangani tugas yang berulang dan kompleks</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container" align="justify">
        <h1 align="center">Cybercode Media Alternatif</h1>


        <p align="justify">CV. Cybercode Media Alternatif merupakan sebuah perusahaan yang bergerak dibidang pengembangan perangkat lunak. Perusahaan ini
            mengembangkan VR Games, Edukasi Software & Game, Animasi 3D.
            Bukan hanya di bidang pengembangan perangkat lunak, CV. CMA ini juga memproduksi sebuah kain yang beraneka ragam jenis kain serta 
            mempunyai warna yang beragam juga. Perusahaan ini merupakan distributor kain yang dimana kain-kain yang ada di perusahaan ini akan
            dijual atau diproduksi yang akan dijual dipasaran.
        </p>

        <p>Perusahaan ini berlokasi di Jl. HMS Mintareja Sarjana Hukum Jl. Ruko Town Place No.A-25, Baros Cimahi, Jawa Barat 40521.</p>
        <p>"Jangan sia-siakan masa mudamu demi seorang wanita." - Saya</p>
        <p>"Hidup adalah perjalanan, maka pergilah jalan-jalan." - Aku</p>
        <p>"Kegagalan adalah batu loncatan menuju kesuksesan, maka kalo ada batu loncat saja." - Kamu</p>
    </div>

    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('asset/image/logo.png') ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" align="center">Produk dari CV.CMA</h5>
                    <p class="card-text" align="center">Klik untuk melihat Produk kami</p>
                    <a class="btn btn-primary btn-lg" href="<?php echo site_url('table2') ?>" role="button">Lihat Produk !</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 1 mins ago</small>
                    
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('asset/image/logo.png') ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" align="center">Jenis Produk CV.CMA</h5>
                    <p class="card-text" align="center">Jenis produk
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 1 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('asset/image/logo.png') ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" align="center">Bidang Pekerjaan di CV.CMA</h5>
                    <p class="card-text" align="center">Bidang pekerjaan. </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 1 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('asset/image/logo.png') ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" align="center">Lokasi Perusahaan CV.CMA</h5>
                    <p class="card-text" align="center">Jl. HMS Mintareja Sarjana Hukum Jl. Ruko Town Place No.A-25, BarosCimahi, Jawa Barat 40521</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 1 mins ago</small>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>


    <footer>
        <p>&copy; 2023 CV. Cybercode Media Alternatif</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>

    </script>
</body>

</html>