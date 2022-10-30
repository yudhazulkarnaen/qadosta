<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Input Project</title>
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
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_main/logout'); ?>"><i class="icon-logout"></i>&nbsp;Logout</a>
                        </div>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
    <div data-aos="fade-up" data-aos-once="true" class="contact-clean">
        <form method="post" style="max-width: 700px;" id="formInputProject">
            <h2 class="text-center">Input Project</h2>
            <p>Nama Project*</p>
            <div class="form-group"><input class="form-control" type="text" name="nama" placeholder="Your answer" autocomplete="off"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?></div>
            <p>Unit AM*</p>
            <div class="form-group">
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="unitam" value="Synergy"><label class="form-check-label" for="formCheck-1">Synergy</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="unitam" value="Telecomunication"><label class="form-check-label" for="formCheck-1">Telecomunication</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="unitam" value="Private Sector"><label class="form-check-label" for="formCheck-1">Private Sector</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="unitam" value="Government Sector"><label class="form-check-label" for="formCheck-1">Government Sector</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="unitam" value="Product & Marketing"><label class="form-check-label" for="formCheck-1">Product &amp; Marketing</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="unitam" value="Local Sector"><label class="form-check-label" for="formCheck-1">Local Sector</label></div>
                <?= form_error('unitam', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <p>PIC IT QA*</p>
            <div class="form-group">
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="itqa" value="Maryono"><label class="form-check-label" for="formCheck-1">Maryono</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="itqa" value="Tiva Kusumawati"><label class="form-check-label" for="formCheck-1">Tiva Kusumawati</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="itqa" value="Teguh Gumilang"><label class="form-check-label" for="formCheck-1">Teguh Gumilang</label></div>
                <?= form_error('itqa', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <p>Tanggal Mulai*</p>
            <div class="form-group"><input class="form-control" type="date" name="tglmulai"><?= form_error('tglmulai', '<small class="text-danger pl-3">', '</small>'); ?></div>
            <div class="form-group text-center"><button class="btn btn-primary tombol-input" type="submit">Submit</button></div>
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