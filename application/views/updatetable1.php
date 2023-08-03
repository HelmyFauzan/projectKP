<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>">
    <title>Update Daftar Pegawai</title>

    <style>
    label {
        display: inline-block;
        width: 100px;
    }
    </style>
</head>

<body>
    <h1>Update Daftar Pegawai</h1>
    <br>

    <div class="container">


        <br>
        <form action="<?php echo site_url('table1/prosesupdate/' . $table1->id); ?>" method="post">
            <div class="form-group">
                <label>Nama : </label>
                <input type="text" name="nama" class="form-control" value="<?php echo $table1->nama ?>"><br>
            </div>

            <div class="form-group">
                <label>Bidang : </label>
                <input type="text" name="bidang" class="form-control" value="<?php echo $table1->bidang ?>"><br>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo $table1->alamat ?>"><br>
            </div>

            <input type="submit" value="update" class="btn btn-primary">

        </form>
        <br>
        <a href="<?php echo site_url('table1') ?>" class="btn btn-danger">kembali</a>
    </div>
</body>

</html>