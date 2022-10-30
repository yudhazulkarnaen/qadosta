<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <?php echo $script_captcha; // javascript recaptcha ?>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean" style="background-color: rgb(9,40,71);">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('c_main') ?>" style="color: rgb(255,255,255);">QA Document Check</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background-color: #ffffff;">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
            </div>
        <p class="text-light" style="margin-bottom: 0px;">Guest</p>
        </div>
    </nav>
     
    <div data-aos="fade" data-aos-once="true" class="login-clean">
        <form method="post" action="<?= base_url("c_main") ?>" style="background-color: rgb(9,40,71);max-width: 381px;">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img class="img-fluid" src="assets/img/Finnet.png"></div>
            <?= $this->session->flashdata('message'); ?>
            <div class="form-group"><input class="form-control" type="text" placeholder="NIK" name="nik" autocomplete="off">
            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password">
            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?></div>
            <div class="form-group">
                <?php echo $captcha // tampilkan recaptcha ?>
            
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(246,50,34);">Log In</button></div></form>
    </div>
    </div>  
    <footer style="background-color: #092847;color: rgb(255,255,255);padding: 20px;">
        <h6 class="text-center">Quality Assurance Document Check© 2020<br></h6>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>