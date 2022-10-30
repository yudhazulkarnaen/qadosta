<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>View Project</title>
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">
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
    <div class="text-center highlight-phone" data-aos="fade-up" data-aos-once="true" style="padding-top: 30px;padding-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 align-self-center">
                    <div class="text-center intro" style="max-width: 730px;">
                        <h2>View Project</h2>
                        <p class="text-left">Halaman untuk menampilkan project yang terdaftar, menambahkan, view detail, dan mengedit project.</p>
                        <a class="btn btn-primary" role="button" href="<?= base_url('c_user/addproject'); ?>">Tambah Project</a></div>
                </div>
                <div class="col-sm-4">
                    <div class="d-none d-md-block iphone-mockup"><img class="device" src="<?= base_url(''); ?>assets/img/questionnaire-clipboard-evaluation-planning-project_1200-422.jpg" style="max-width: 250px;max-height: 250px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-once="true">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 style="padding-top: 5px;">Data Project</h1>
                    <form action="<?= base_url('c_user/viewproject'); ?>" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari project..." name="keyword" id="nameproject" autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" name="submit"> 
                            </div>
                        </div>
                    </form>
                    <?= $this->session->flashdata('message'); ?>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <h5>Results : <?= $total_rows; ?></h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="table-primary">No.</th>
                                    <th class="table-primary">Nama Project</th>
                                    <th class="table-primary">PIC</th>
                                    <th class="table-primary">Tanggal Mulai</th>
                                    <th class="table-primary">Status</th>
                                    <th class="table-primary">View Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($project)) : ?>
                                    <tr>
                                        <td colspan="6">
                                            <div class="alert alert-danger" role="alert">
                                                Data not found!
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                <?php foreach ($project as $p) :?>
                            <tr>
                                <td><?= ++$start; ?></td>
                                <td><?= $p['namaproject']; ?></td>
                                <td><?= $p['nama']; ?></td>
                                <td><?= $p['tglmulai']; ?></td>
                                <?php if ($p['status'] == "0") { ?>
                                    <td>NEW</td>
                                <?php } else if ($p['status'] == "1"){ ?>
                                    <td>ON PROGRESS</td>
                                <?php } else if ($p['status'] == "2"){ ?>
                                    <td>DONE</td>
                                <?php } else { ?>
                                    <td>REJECT</td> 
                                <?php } ?>
                                    <?php
                                    echo ('
                                        <td><a class="btn btn-success" role="button" href="' . base_url('c_user/detailproject/') .$p['idproject'] . '"><i class="fa fa-search"></i>&nbsp;View Detail</a></td>
                                    ');
                                    ?>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="d-none d-md-block iphone-mockup"></div>
                </div>
                <div class="col-md-3">
                    <nav>
                        <?= $this->pagination->create_links(); ?>
                    </nav>
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
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="<?php echo base_url() . 'assets/js/jquery-ui.js' ?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#nameproject').autocomplete({
                source: "<?php echo site_url('c_user/autocompleteproject'); ?>",

                select: function(event, ui) {
                    $('[name="keyword"]').val(ui.item.label);
                    // $('[name="description"]').val(ui.item.description);
                }
            });

        });
    </script>
</body>

</html>