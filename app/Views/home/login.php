<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+n7YPrjyjScw/RTFZC2jzwoK3XnYhKtPxUK6D5J" crossorigin="anonymous">

    <style>
        body {
            background-size: cover;
            background-position: center;
            background-color: #hhhjhj;
        }

        .card {
            margin-top: 100px;
        }

        .logo {
            width: 100px; /* Sesuaikan ukuran logo sesuai kebutuhan */
            margin: 0 auto 20px; /* Letakkan logo di tengah */
        }

        .card-header {
            text-align: center;
            font-weight: bold;
            font-size: 24px;
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card bg-white">
                    <div class="text-center">
                    <img src="assets/img/logo.png"  alt="Logo" class="logo mt-3">
                    </div>
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <?php if(session()->has('error')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= session('error') ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?= site_url('authcontroller/processLogin') ?>" method="POST">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                            <p class="mt-3 text-center">Belum punya akun? <a href="/register">Register sekarang</a></p>
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
