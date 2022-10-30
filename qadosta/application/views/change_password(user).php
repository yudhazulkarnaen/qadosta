<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Change Password</title>
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean" style="background-color: rgb(9,40,71);">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('c_user'); ?>" style="color: rgb(255,255,255);">QA Document Check</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background-color: #ffffff;">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link border rounded" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(9,40,71);background-color: #ffffff;">Hello, <?php 
                    $myvalue = $this->session->userdata('nama');;
                    $arr = explode(' ',trim($myvalue));
                    echo $arr[0]; ?>
                    </a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_user'); ?>">Beranda</a>
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_user/viewproject'); ?>">Manage Project</a>
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_user/changepassword'); ?>">Change Password</a>
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_main/logout'); ?>"><i class="icon-logout"></i>&nbsp;Logout</a></div>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
    <div data-aos="fade-up" data-aos-once="true" class="contact-clean">
        <form method="post" style="max-width: 600px;" id="formPassword">
            <h2 class="text-center">Change Your Password</h2>
            <?= $this->session->flashdata('message'); ?>
            <p>Password Lama*</p>
            <div class="form-group"><input class="form-control" type="password" placeholder="Your answer" name="oldpassword"><?= form_error('oldpassword', '<small class="text-danger pl-3">', '</small>'); ?></div>
            <p>Password Baru*</p>
            <div class="form-group"><input class="form-control" type="password" placeholder="Your answer" name="password1"><?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?></div>
            <p>Ulangi Password Baru*</p>
            <div class="form-group"><input class="form-control" type="password" placeholder="Your answer" name="password2"><?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?></div>
            <div class="form-group text-center"><button class="btn btn-primary tombol-password" type="submit">Change</button>
            </div>
        </form>
    </div>
    <footer style="background-color: #092847;color: rgb(255,255,255);padding: 20px;">
        <h6 class="text-center">Quality Assurance Document Check© 2020<br></h6>
    </footer>
    <script src="<?= base_url(''); ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url(''); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(''); ?>assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="<?= base_url(''); ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(''); ?>assets/js/myscript.js"></script>
</body>

</html>