<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Manage User</title>
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
            <a class="navbar-brand" href="<?= base_url('c_admin'); ?>" style="color: rgb(255,255,255);">QA Document Check</a>
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
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_admin') ?>">Beranda</a>
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_admin/viewproject'); ?>">Manage Project</a>
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_admin/manageuser'); ?>">Manage User</a>
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_admin/changepassword'); ?>">Change Password</a>
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
                <div class="col-md-8">
                    <div class="text-center intro" style="max-width: 730px;">
                        <h2>Manage User</h2>
                        <p class="text-left">Halaman untuk menampilkan user yang terdaftar, menambahkan, menonaktifkan, dan mengaktifkan user.</p>
                        <a class="btn btn-primary" role="button" href="<?= base_url('c_admin/adduser'); ?>">Tambah User</a></div>
                </div>
                <div class="col-sm-4">
                    <div class="d-none d-md-block iphone-mockup"><img class="device" src="<?= base_url(''); ?>assets/img/free-administrative-assistant-vector-icon.jpg" style="height: 250px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-once="true">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 style="padding-top: 5px;">Data User</h1>
                    <form action="<?= base_url('c_admin/manageuser'); ?>" method="post">
                    	<div class="input-group mb-3">
                    		<input type="text" class="form-control" placeholder="Cari user..." name="keyword_user" id="nameuser" autocomplete="off" autofocus>
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
                                    <th class="table-primary">Nama Lengkap</th>
                                    <th class="table-primary">NIK</th>
                                    <th class="table-primary">Email</th>
                                    <th class="table-primary">Level</th>
                                    <th class="table-primary">Status Akun</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (empty($user)) : ?>
                            		<tr>
                            			<td colspan="6">
                            				<div class="alert alert-danger" role="alert">
                            					Data not found!
                            				</div>
                            			</td>
                            		</tr>
                            	<?php endif; ?>
                            	<?php foreach ($user as $u) :?>
                                <tr>
                                        <td><?= ++$start; ?></td>
                                        <td><?= $u['nama']; ?></td>
                                        <td><?= $u['nik']; ?></td>
                                        <td><?= $u['email']; ?></td>
                                        <?php if ($u['role_id'] == "1") { ?>
                                        <td>Admin</td>
                                            <?php } else if ($u['role_id'] == "2"){ ?>
                                        <td>User</td>
                                            <?php } else { ?>
                                                <td>Reader</td> 
                                            <?php } ?>

                                            <?php if ($u['active'] == "1") {
                                                echo ('
                                                <td><a class="btn btn-danger" role="button" href="' . base_url('c_admin/rejectaccount/') . $u['nik'] . '">Nonaktifkan</a></td>
                                                ');
                                            } else if ($u['active'] == "0") {
                                                echo ('
                                                <td><a class="btn btn-info" role="button" href="' . base_url('c_admin/acceptaccount/') . $u['nik'] . '">Aktifkan</a></td>
                                                ');
                                        }
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
    <script src="<?php echo base_url() . 'assets/js/jquery-ui.js' ?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#nameuser').autocomplete({
                source: "<?php echo site_url('c_admin/autocompleteuser'); ?>",

                select: function(event, ui) {
                    $('[name="keyword_user"]').val(ui.item.label);
                    // $('[name="description"]').val(ui.item.description);
                }
            });

        });
    </script>
</body>

</html>