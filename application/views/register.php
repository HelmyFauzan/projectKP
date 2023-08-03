<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Helmy">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Menu Register</title>
    <link rel="shortcut icon" href="<?php echo base_url('asset/image/logo.png') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="<?php echo base_url('asset/image/logo.png')?> " alt="logo" width="100">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
                            <form method="POST" class="needs-validation" novalidate="" autocomplete="off"
                                action="<?php echo site_url('home/prosesdaftar') ?>">
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="username">Username</label>
                                    <input id="username" type="text" class="form-control" name="username" value=""
                                        required autofocus>
                                    <div class="invalid-feedback">
                                        Username harus diisi
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                        Password harus diisi
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="nama">Nama</label>
                                    <input id="nama" type="text" class="form-control" name="nama" value="" required>
                                    <div class="invalid-feedback">
                                        Nama tidak valid
                                    </div>
                                </div>



                                <p class="form-text text-muted mb-3">
                                    Dengan melakukan register anda dapat melakukan login
                                </p>

                                <div class="float-right">
                                    <input type="submit" class="btn btn-primary" value="Register">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Sudah mempunyai akun? <a href="<?php echo site_url('home') ?>"
                                    class="text-dark">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">
                        Copyright &copy; 2023 &mdash; CV. Cybercode Media Alternatif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/login.js"></script>
</body>

</html>