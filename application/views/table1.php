<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pegawai</title>

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
            <h2> Form Tabel Pegawai </h2>
            <h2>CV. CYBERCODE MEDIA ALTERNATIF</h2>
            <p align="center">Halaman ini menampilkan informasi data pegawai pada CV.Cybercode Media Alternatif </p><br /><br />
            <p><a class="btn btn-primary btn-lg" href="<?php echo site_url('table1/tambah') ?>" role="button">Tambah
                    Data Pegawai</a></p>
        </center>
    </div>

    <div class="container">
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Bidang</th>
                    <th>Alamat</th>
                    <th>aksi</th>

                </tr>
            </thead>
            <?php
            foreach ($table1->result() as $row) {
                echo "<tr>";
                echo "<td>" . $row->nama . "</td>";
                echo "<td>" . $row->jenis_kelamin . "</td>";
                echo "<td>" . $row->email . "</td>";
                echo "<td>" . $row->no_telp . "</td>";
                echo "<td>" . $row->bidang . "</td>";
                echo "<td>" . $row->alamat . "</td>";
                echo "<td>";
                echo "<a type= 'button' class = 'btn btn-xs btn-warning' href='" . site_url('table1/update/' . $row->id) . "'>Edit</a>";
                echo " | ";
                echo "<a type= 'button' class = 'btn btn-xs btn-danger' href='" . site_url('table1/delete/' . $row->id) . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }


            ?>


        </table>
    </div>

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