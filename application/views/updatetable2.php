<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


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
</body>

</html>