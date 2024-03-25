<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Atur background halaman transparan */
        body {
            background-color: rgba(255, 255, 255, 0.5); /* Warna putih dengan opasitas 50% */
            background-size: cover;
            background-position: center;
            /* Sesuaikan dengan ukuran logo */
            background-image: url('assets/img/background.jpg'); /* Ganti dengan URL gambar latar belakang */
        }

        /* Atur margin atas pada card */
        .card {
            margin-top: 50px;
        }

        /* Atur lebar logo */
        .logo {
            width: 80px; /* Sesuaikan ukuran logo sesuai kebutuhan */
            margin: 0 auto 10px; /* Letakkan logo di tengah */
        }

        /* Atur teks header pada card */
        .card-header {
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            background-color : white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="text-center">
                        <img src="assets/img/logo.png" alt="Logo" class="logo mt-3">
                    </div>
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <?php if(session()->has('error')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= session('error') ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?= site_url('authcontroller/processRegister') ?>" method="POST">
                            <div class="form-group">
                                <label for="username">Nama</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                            <p class="mt-3 text-center">Sudah punya akun? <a href="/login">Login sekarang</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-tXXsUV5f5/b9XzrCqAXsVH7ueR7bhEUpHkk6O+rKoB5xUm3qjOMF3QCI8oOrvP+t" crossorigin="anonymous"></script>
</body>

</html>
