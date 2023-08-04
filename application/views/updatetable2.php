<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
 
 <a class="navbar-brand" href="#">CV. Cybercode Media Alternatif</a>

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




    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>">
    <title>Update Table 2</title>

    <style>
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>

<body>
    <h1>Update Data table2</h1>
    <br>

    <div class="container">


        <br>
        <form action="<?php echo site_url('table2/prosesupdate/' . $table2->id); ?>" method="post">
            <div class="form-group">
                <label>Jumlah : </label>
                <input type="text" name="jumlah" class="form-control" value="<?php echo $table2->jumlah ?>"><br>
            </div>

            <div class="form-group">
                <label>Produk : </label>
                <input type="text" name="produk" class="form-control" value="<?php echo $table2->produk ?>"><br>
            </div>

            <div class="form-group">
                <label>Warna : </label>
                <input type="text" name="warna" class="form-control" value="<?php echo $table2->warna ?>"><br>
            </div>

            <div class="form-group">
                <label>Gambar : </label>
                <input type="file" name="url" class="form-control" value="<?php echo $table2->url ?>"><br>
            </div>

            <div class="form-group">
                <label>Harga : </label>
                <input type="text" name="harga" class="form-control" value="<?php echo $table2->harga ?>"><br>
            </div>

            <input type="submit" value="update" class="btn btn-primary">

        </form>
        <br>
        <a href="<?php echo site_url('table2') ?>" class="btn btn-danger">kembali</a>
    </div>
    <footer>
        <p>&copy; 2023 CV. Cybercode Media Alternatif</p>
    </footer>

</body>

</html>