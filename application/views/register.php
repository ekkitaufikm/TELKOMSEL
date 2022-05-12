
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?= base_url('assets/images/favicon.png') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png') ?>" type="image/x-icon">
    <title>Halaman Register | Telkomsel</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/font-awesome.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/vendors/icofont.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/vendors/themify.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/vendors/flag-icon.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/vendors/feather-icon.css') ?>">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/vendors/bootstrap.css') ?>">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
    <link id="color" rel="stylesheet" href="<?= base_url('assets/css/color-1.css') ?>" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css') ?>">
</head>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div class="login-main">
                            <div>
                                <a class="logo" href="#">
                                    <img class="img-fluid" src="<?= base_url('assets/images/favicon.png') ?>" alt="">
                                </a>
                            </div>
                            <form action="<?= site_url('register/add') ?>" method="post" class="theme-form">
                                <input type="hidden" name="_token" value="pnteErtmtxcG20ewX4HJtU9NUErtZqKTza8uNg52"><h3 style="text-align: center">Welcome!</h3>
                                <p style="text-align: center">Login to access your account!</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama" placeholder="nama" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="username" required autofocus>
                                </div>
                                <div class="form-group">
                                    <div class="form-input position-relative">
                                        <input type="password" class="form-control" name="password" placeholder="password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="alamat" placeholder="alamat" rows="2"></textarea>
                                </div>
                                <div class="form-group">
                                <select class="form-select" name="level">
                                    <option value="">- Pilih Level -</option>
                                    <option value="2" <?=set_value('kelamin') == 2 ? "selected" : null ?>>Customer</option>
                                </select>
                                </div>
                                <div class="form-group mb-0">   
                                    <div class="text-end mt-3">
                                        <button type="submit" class="btn btn-block w-100">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="<?= base_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
        <!-- Bootstrap js-->
        <script src="<?= base_url('assets/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
        <!-- feather icon js-->
        <script src="<?= base_url('assets/js/icons/feather-icon/feather.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/icons/feather-icon/feather-icon.js') ?>"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="<?= base_url('assets/js/config.js') ?>"></script>
        <!-- Plugins JS start-->
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="<?= base_url('assets/js/script.js') ?>"></script>
        <!-- login js-->
        <!-- Plugin used-->
    </div>
</body>

</html>