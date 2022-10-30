<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Detail Project</title>
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
            <a class="navbar-brand" href="<?= base_url('c_admin') ?>" style="color: rgb(255,255,255);">QA Document Check</a>
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
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_admin/viewproject') ?>">Manage Project</a>
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_admin/manageuser') ?>">Manage User</a><a class="dropdown-item" role="presentation" href="<?= base_url('c_admin/changepassword'); ?>">Change Password</a>
                            <a class="dropdown-item" role="presentation" href="<?= base_url('c_main/logout') ?>"><i class="icon-logout"></i>&nbsp;Logout</a>
                        </div>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
    <div data-aos="fade-up" data-aos-once="true" class="contact-clean">
        <?php if (empty($res)) { ?>
        	<center>
        		<form style="max-width: 700px;">	
                	<img class="device" src="<?= base_url(''); ?>assets/img/manager-ui.png" style="width: 100%; height: auto; margin: 30px 0px 30px;">
                    <div class="form-group text-center"><a class="btn btn-primary" role="button" href="<?= base_url('c_admin/viewproject') ?>" style="margin-right: 5px;">Manage Project</a></div>
                </form>
            </center>
            <?php } else {?>
        <form method="post" action="<?= base_url("c_admin/update/").$res['idproject']?>" style="max-width: 700px;" id="formSave">
            <h2 class="text-center">Project "<?= $res['namaproject'] ?>"</h2>
            <?= $this->session->flashdata('message'); ?>
            <input type="hidden" name="idproject" value="<?php $res['idproject'] ?>">
            <p>Nama Project*</p>
            <div class="form-group"><input class="form-control" type="text" name="nama" placeholder="Your answer" value="<?= $res['namaproject'] ?>"></div>
            <p>PIC AM*</p>
            <div class="form-group"><input class="form-control" type="text" name="picam" placeholder="Your answer" value="<?= $res['nama'] ?>" name="keyword" id="namapicam"></div>
            <p>Unit AM*</p>
            <div class="form-group">

                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="unitam" value="Synergy" <?php if ( $res['unitam'] == "Synergy") { echo ('checked'); }?>><label class="form-check-label" for="formCheck-1">Synergy</label></div>

                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="unitam" value="Telecomunication" <?php if ( $res['unitam'] == "Telecomunication") { echo ('checked'); }?>><label class="form-check-label" for="formCheck-1">Telecomunication</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="unitam" value="Private Sector" <?php if ( $res['unitam'] == "Private Sector") { echo ('checked'); }?>><label class="form-check-label" for="formCheck-1">Private Sector</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="unitam" value="Government Sector" <?php if ( $res['unitam'] == "Government Sector") { echo ('checked'); }?>><label class="form-check-label" for="formCheck-1">Government Sector</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="unitam" value="Product & Marketing" <?php if ( $res['unitam'] == "Product & Marketing") { echo ('checked'); }?>><label class="form-check-label" for="formCheck-1">Product &amp; Marketing</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="unitam" value="Local Sector" <?php if ( $res['unitam'] == "Local Sector") { echo ('checked'); }?>><label class="form-check-label" for="formCheck-1">Local Sector</label></div>
            </div>
            <p>PIC IT QA*</p>
            <div class="form-group">
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="itqa" value="Maryono" <?php if ( $res['itqa'] == "Maryono") { echo ('checked'); }?>><label class="form-check-label" for="formCheck-1">Maryono</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="itqa" value="Tiva Kusumawati" <?php if ( $res['itqa'] == "Tiva Kusumawati") { echo ('checked'); }?>><label class="form-check-label" for="formCheck-1">Tiva Kusumawati</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="itqa" value="Teguh Gumilang" <?php if ( $res['itqa'] == "Teguh Gumilang") { echo ('checked'); }?>><label class="form-check-label" for="formCheck-1">Teguh Gumilang</label></div>
            </div>
            <p>Tanggal Mulai*</p>
            <div class="form-group"><input class="form-control" type="date" name="tglmulai" value="<?= $res['tglmulai'] ?>"></div>
            <p>Kelengkapan Dokumen*</p>
            <div class="form-group">
                <div class="container">
                    <div class="form-row">
                        <div class="col-6">
                            <p></p>
                        </div>
                        <div class="col-2 text-center align-self-center">
                            <p style="margin-bottom: 0px;">On Progress</p>
                        </div>
                        <div class="col-2 text-center align-self-center">
                            <p style="margin: 0px;">OK</p>
                        </div>
                        <div class="col-2 text-center align-self-center">
                            <p style="margin: 0px;">NOK</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-6 align-self-center">
                            <p style="margin: 0px;">Order OpenProject</p>
                        </div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="oop" value="2" <?php if ( $res['oop'] == 2) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="oop" value="3" <?php if ( $res['oop'] == 3) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="oop" value="1" <?php if ( $res['oop'] == 1) { echo ('checked'); }?>></div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-6 align-self-center">
                            <p style="margin: 0px;">BRD</p>
                        </div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="brd" value="2" <?php if ( $res['brd'] == 2) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="brd" value="3" <?php if ( $res['brd'] == 3) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="brd" value="1" <?php if ( $res['brd'] == 1) { echo ('checked'); }?>></div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-6 align-self-center">
                            <p style="margin: 0px;">TOR</p>
                        </div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="tor" value="2" <?php if ( $res['tor'] == 2) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="tor" value="3" <?php if ( $res['tor'] == 3) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="tor" value="1" <?php if ( $res['tor'] == 1) { echo ('checked'); }?>></div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-6 align-self-center">
                            <p style="margin: 0px;">Document Aplikasi</p>
                        </div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="da" value="2" <?php if ( $res['da'] == 2) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="da" value="3" <?php if ( $res['da'] == 3) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="da" value="1" <?php if ( $res['da'] == 1) { echo ('checked'); }?>></div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-6 align-self-center">
                            <p style="margin: 0px;">Hasil SIT/QC</p>
                        </div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="sit" value="2" <?php if ( $res['sit'] == 2) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="sit" value="3" <?php if ( $res['sit'] == 3) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="sit" value="1" <?php if ( $res['sit'] == 1) { echo ('checked'); }?>></div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-6 align-self-center">
                            <p style="margin: 0px;">User Guide</p>
                        </div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="ug" value="2" <?php if ( $res['ug'] == 2) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="ug" value="3" <?php if ( $res['ug'] == 3) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="ug" value="1" <?php if ( $res['ug'] == 1) { echo ('checked'); }?>></div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-6 align-self-center">
                            <p style="margin: 0px;">Deployment Guide</p>
                        </div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="dg" value="2" <?php if ( $res['dg'] == 2) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="dg" value="3" <?php if ( $res['dg'] == 3) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="dg" value="1" <?php if ( $res['dg'] == 1) { echo ('checked'); }?>></div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-6 align-self-center">
                            <p style="margin: 0px;">Security Scan</p>
                        </div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="ss" value="2" <?php if ( $res['ss'] == 2) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="ss" value="3" <?php if ( $res['ss'] == 3) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="ss" value="1" <?php if ( $res['ss'] == 1) { echo ('checked'); }?>></div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-6 align-self-center">
                            <p style="margin: 0px;">Functional QA</p>
                        </div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="fqa" value="2" <?php if ( $res['fqa'] == 2) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="fqa" value="3" <?php if ( $res['fqa'] == 3) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="fqa" value="1" <?php if ( $res['fqa'] == 1) { echo ('checked'); }?>></div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-6 align-self-center">
                            <p style="margin: 0px;">Hasil UAT Dev</p>
                        </div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="uat" value="2" <?php if ( $res['uat'] == 2) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="uat" value="3" <?php if ( $res['uat'] == 3) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="uat" value="1" <?php if ( $res['uat'] == 1) { echo ('checked'); }?>></div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-6 align-self-center">
                            <p style="margin: 0px;">Regulatory</p>
                        </div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="reg" value="2" <?php if ( $res['reg'] == 2) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="reg" value="3" <?php if ( $res['reg'] == 3) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="reg" value="1" <?php if ( $res['reg'] == 1) { echo ('checked'); }?>></div>
                    </div>
                </div>
                <div class="container">
                    <div class="form-row">
                        <div class="col-6 align-self-center">
                            <p style="margin: 0px;">SOP Layanan</p>
                        </div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="sop" value="2" <?php if ( $res['sop'] == 2) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="sop" value="3" <?php if ( $res['sop'] == 3) { echo ('checked'); }?>></div>
                        <div class="col-2 text-center align-self-center"><input type="radio" name="sop" value="1" <?php if ( $res['sop'] == 1) { echo ('checked'); }?>></div>
                    </div>
                </div>
            </div>
            <p>Note*</p>
            <div class="form-group"><textarea class="form-control" placeholder="Your answer" name="note"><?= $res['note'] ?></textarea></div>
            <p>Rekomendasi*</p>
            <div class="form-group"><textarea class="form-control" placeholder="Your answer" name="rekomendasi"><?= $res['rekomendasi'] ?></textarea></div>
            <p>Tanggal Selesai*</p>
            <div class="form-group"><input class="form-control" type="date" name="tglselesai" value="<?= $res['tglselesai'] ?>"></div>
            <p>Status</p>
            <div class="form-group">
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="status" value="0" <?php if ( $res['status'] == 0) { echo ('checked'); }?>><label class="form-check-label" for="formCheck-1">New</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="status" value="1" <?php if ( $res['status'] == 1) { echo ('checked'); }?>><label class="form-check-label" for="formCheck-1">On Progress</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="status" value="2" <?php if ( $res['status'] == 2) { echo ('checked'); }?>><label class="form-check-label" for="formCheck-1">Done</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="status" value="3" <?php if ( $res['status'] == 3) { echo ('checked'); }?>><label class="form-check-label" for="formCheck-1">Reject</label></div>
            </div>
            <div class="form-group text-center"><a class="btn btn-primary" role="button" href="<?= base_url('c_admin/viewproject') ?>" style="margin-right: 5px;">Back</a><button style="margin-left: 5px;" class="btn btn-success tombol-save" type="submit"><i class="fas fa-save"></i>&nbsp;SAVE</button></div>
            </form>
            <?php } ?>
            
        
    </div>
    <footer style="background-color: #092847;color: rgb(255,255,255);padding: 20px;">
        <h6 class="text-center">Quality Assurance Document Check© 2020<br></h6>
    </footer>
    <script src="<?= base_url(''); ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url(''); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(''); ?>assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="<?= base_url(''); ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(''); ?>assets/js/myscript.js"></script>
    <script src="<?php echo base_url() . 'assets/js/jquery-ui.js' ?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#namapicam').autocomplete({
                source: "<?php echo site_url('c_admin/autocompletepicam'); ?>",

                select: function(event, ui) {
                    $('[name="keyword"]').val(ui.item.label);
                    // $('[name="description"]').val(ui.item.description);
                }
            });

        });
    </script>
</body>

</html>