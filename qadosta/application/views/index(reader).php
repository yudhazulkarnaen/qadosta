<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Qadosta - Beranda</title>
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean" style="background-color: rgb(9,40,71);">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('c_reader') ?>" style="color: rgb(255,255,255);">QA Document Check</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background-color: #ffffff;">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link border rounded" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(9,40,71);background-color: #ffffff;">Hello, <?php 
                    $myvalue = $this->session->userdata('nama');;
                    $arr = explode(' ',trim($myvalue));
                    echo $arr[0]; ?>
                    </a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_reader'); ?>">Beranda</a>
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_reader/viewproject') ?>">View Project</a>
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_reader/changepassword') ?>">Change Password</a>
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_main/logout') ?>"><i class="icon-logout"></i>&nbsp;Logout</a>
                        </div>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="text-center highlight-phone" data-aos="fade-up" data-aos-once="true" style="padding-top: 30px;padding-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 align-self-center">
                    <div class="text-center intro" style="max-width: 730px;">
                        <h2>Beranda</h2>
                        <p class="text-left">Halaman untuk menampilkan menu atau fitur yang berada di website qadosta</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="d-none d-md-block iphone-mockup"><img class="device" src="<?= base_url(''); ?>assets/img/welcome.png" style="height: 250px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="features-boxed">
        <div class="container">
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fas fa-tasks icon"></i>
                        <h3 class="name">View Project</h3>
                        <p class="description">Halaman untuk menampilkan project yang terdaftar, view detail project.<br><br></p>
                        <a class="btn btn-primary" role="button" href="<?= base_url('c_reader/viewproject') ?>">Menuju Halaman</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="far fa-edit icon"></i>
                        <h3 class="name">Change Password</h3>
                        <p class="description">Halaman untuk merubah password akun yang sebelumnya menjadi password yang lebih baru.<br></p>
                        <a class="btn btn-primary" role="button" href="<?= base_url('c_reader/changepassword') ?>">Menuju Halaman</a></div>
                </div>
            </div>
        </div>
    </div>
    <footer style="background-color: #092847;color: rgb(255,255,255);padding: 20px;">
        <h6 class="text-center">Quality Assurance Document Check© 2020<br></h6>
    </footer>
    <script src="<?= base_url(''); ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url(''); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(''); ?>assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>