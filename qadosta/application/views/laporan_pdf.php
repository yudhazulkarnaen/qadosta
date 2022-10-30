<!DOCTYPE html>
<html><head>
</head><body style="font-family: Helvetica;">
<h1 style="padding-bottom: 74px; font-size: 50px;"><center>Project "<?= $res['namaproject'] ?>"</center></h1>
<br>
<table width="100%">
    <tr style="color: #3282b8">
        <td style="text-align:left; font-size: 21px;">Nama Project</td>
    </tr>
</table>
<table width="100%">
    <tr>
        <td style="text-align:left; border-bottom: 1px solid grey; font-size: 31px; padding-bottom: 15px; padding-top: 13px;"><?= $res['namaproject'] ?></td>
    </tr>
</table>
<table style="padding-top: 5px;" width="100%">
    <tr style="color: #3282b8">
        <td style="text-align:left; font-size: 21px;">PIC AM</td>
    </tr>
</table>
<table width="100%">
    <tr>
        <td style="text-align:left; border-bottom: 1px solid grey; font-size: 31px; padding-bottom: 15px; padding-top: 13px;"><?= $res['nama'] ?></td>
    </tr>
</table>
<table style="padding-top: 5px;" width="100%">
    <tr style="color: #3282b8">
        <td style="text-align:left;  font-size: 21px;">Unit AM</td>
    </tr>
</table>
<table width="100%">
    <tr>
        <td style="text-align:left; border-bottom: 1px solid grey; font-size: 31px; padding-bottom: 15px; padding-top: 13px;"><?= $res['unitam'] ?></td>
    </tr>
</table>
<table style="padding-top: 5px;" width="100%">
    <tr style="color: #3282b8">
        <td style="text-align:left; font-size: 21px;">PIC IT QA</td>
    </tr>
</table>
<table width="100%">
    <tr>
        <td style="text-align:left; border-bottom: 1px solid grey; font-size: 31px; padding-bottom: 15px; padding-top: 13px;"><?= $res['itqa'] ?></td>
    </tr>
</table>
<table style="padding-top: 5px;" width="100%">
    <tr style="color: #3282b8">
        <td style="text-align:left; font-size: 21px;">Tanggal Mulai</td>
    </tr>
</table>
<table width="100%">
    <tr>
        <td style="text-align:left; border-bottom: 1px solid grey; font-size: 31px; padding-bottom: 15px; padding-top: 13px;"><?= $res['tglmulai'] ?></td>
    </tr>
</table>
<table style="padding-top: 5px;" width="100%">
    <tr style="color: #3282b8">
        <td style="text-align:left; font-size: 21px;">Kelengkapan Dokumen</td>
    </tr>
</table>
<table width="100%" style="border-collapse: collapse; border: 1px solid black; text-align:center; padding-top: 13px;">
    <tr >
        <td style="border: 1px solid black;" width="25%"></td>
        <td style="border: 1px solid black;" width="25%">On Progress</td>
        <td style="border: 1px solid black;" width="25%">OK</td>
        <td style="border: 1px solid black;" width="25%">NOK</td>
    </tr>
    <tr>
        <td style="border: 1px solid black;">Order OpenProject</td>
        <?php if ($res['oop'] == "2") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['oop'] == "3") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['oop'] == "1") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
    </tr>
    <tr>
        <td style="border: 1px solid black;">BRD</td>
        <?php if ($res['brd'] == "2") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['brd'] == "3") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['brd'] == "1") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
    </tr>
    <tr>
        <td style="border: 1px solid black;">TOR</td>
        <?php if ($res['tor'] == "2") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['tor'] == "3") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['tor'] == "1") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
    </tr>
    <tr>
        <td style="border: 1px solid black;">Document Aplikasi</td>
        <?php if ($res['da'] == "2") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['da'] == "3") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['da'] == "1") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
    </tr>
    <tr>
        <td style="border: 1px solid black;">Hasil SIT/QC</td>
        <?php if ($res['sit'] == "2") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['sit'] == "3") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['sit'] == "1") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
    </tr>
    <tr>
        <td style="border: 1px solid black;">User Guide</td>
        <?php if ($res['ug'] == "2") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['ug'] == "3") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['ug'] == "1") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
    </tr>
    <tr>
        <td style="border: 1px solid black;">Deployment Guide</td>
        <?php if ($res['dg'] == "2") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['dg'] == "3") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['dg'] == "1") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
    </tr>
    <tr>
        <td style="border: 1px solid black;">Security Scan</td>
        <?php if ($res['ss'] == "2") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['ss'] == "3") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['ss'] == "1") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
    </tr>
    <tr>
        <td style="border: 1px solid black;">Functional QA</td>
        <?php if ($res['fqa'] == "2") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['fqa'] == "3") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
        <?php if ($res['fqa'] == "1") { ?>
            <td style="border: 1px solid black;">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;"></td> 
        <?php } ?>
    </tr>
    <tr>
        <td style="border: 1px solid black;">Hasil UAT Dev</td>
        <?php if ($res['uat'] == "2") { ?>
            <td style="border: 1px solid black;" width="25%">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;" width="25%"></td> 
        <?php } ?>
        <?php if ($res['uat'] == "3") { ?>
            <td style="border: 1px solid black;" width="25%">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;" width="25%"></td> 
        <?php } ?>
        <?php if ($res['uat'] == "1") { ?>
            <td style="border: 1px solid black;" width="25%">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;" width="25%"></td> 
        <?php } ?>
    </tr>
    <tr>
        <td style="border: 1px solid black;">Regulation</td>
        <?php if ($res['reg'] == "2") { ?>
            <td style="border: 1px solid black;" width="25%">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;" width="25%"></td> 
        <?php } ?>
        <?php if ($res['reg'] == "3") { ?>
            <td style="border: 1px solid black;" width="25%">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;" width="25%"></td> 
        <?php } ?>
        <?php if ($res['reg'] == "1") { ?>
            <td style="border: 1px solid black;" width="25%">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;" width="25%"></td> 
        <?php } ?>
    </tr>
    <tr>
        <td style="border: 1px solid black;">SOP Layanan</td>
        <?php if ($res['sop'] == "2") { ?>
            <td style="border: 1px solid black;" width="25%">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;" width="25%"></td> 
        <?php } ?>
        <?php if ($res['sop'] == "3") { ?>
            <td style="border: 1px solid black;" width="25%">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;" width="25%"></td> 
        <?php } ?>
        <?php if ($res['sop'] == "1") { ?>
            <td style="border: 1px solid black;" width="25%">V</td> 
        <?php } else { ?>
            <td style="border: 1px solid black;" width="25%"></td> 
        <?php } ?>
    </tr>
</table>
<table style="padding-top: 5px;" width="100%">
    <tr style="color: #3282b8">
        <td style="text-align:left; font-size: 21px;">Note</td>
    </tr>
</table>
<table width="100%">
    <tr>
        <td style="text-align:left; border-bottom: 1px solid grey; font-size: 31px; padding-bottom: 15px; padding-top: 13px;"><?= $res['note'] ?></td>
    </tr>
</table>
<table style="padding-top: 5px;" width="100%">
    <tr style="color: #3282b8">
        <td style="text-align:left; font-size: 21px;">Rekomendasi</td>
    </tr>
</table>
<table width="100%">
    <tr>
        <td style="text-align:left; border-bottom: 1px solid grey; font-size: 31px; padding-bottom: 15px; padding-top: 13px;"><?= $res['rekomendasi'] ?></td>
    </tr>
</table>
<table style="padding-top: 5px; font-size: 21px;" width="100%">
    <tr style="color: #3282b8">
        <td style="text-align:left;">Tanggal Selesai</td>
    </tr>
</table>
<table width="100%">
    <tr>
        <td style="text-align:left; border-bottom: 1px solid grey; font-size: 31px; padding-bottom: 15px; padding-top: 13px;"><?= $res['tglselesai'] ?></td>
    </tr>
</table>
<table style="padding-top: 5px;" width="100%">
    <tr style="color: #3282b8">
        <td style="text-align:left;">Status Project</td>
    </tr>
</table>
<table style="margin-bottom: 10px;" width="100%">
    <tr>
        <?php if ($res['status'] == "0") { ?>
            <td style="text-align:left; border-bottom: 1px solid grey; font-size: 31px; padding-bottom: 15px; padding-top: 13px;">NEW</td>
        <?php } else if ($res['status'] == "1"){ ?>
            <td style="text-align:left; border-bottom: 1px solid grey; font-size: 31px; padding-bottom: 15px; padding-top: 13px;">ON PROGRESS</td>
        <?php } else if ($res['status'] == "2"){ ?>
            <td style="text-align:left; border-bottom: 1px solid grey; font-size: 31px; padding-bottom: 15px; padding-top: 13px;">DONE</td>
        <?php } else { ?>
            <td style="text-align:left; border-bottom: 1px solid grey; font-size: 31px; padding-bottom: 15px; padding-top: 13px;">REJECT</td> 
        <?php } ?>
    </tr>
</table>

<table>
    <tr>
        <td>Diprint pada <?= $user['date'] ?></td>
    </tr>
    <tr>
        <td>Oleh : <?= $user['namauser'] ?></td>
    </tr>
    <tr>
        <td>Pada Website Qadosta</td>
    </tr>
</table>

</body></html>

<!--  -->

<!-- <!DOCTYPE html>
<html><head>
</head><body>
    <center>
    <h3>Detail Project "<?= $res['namaproject'] ?>"</h3>
    </center>
    <table border="1" style="margin-top: 10px; margin-bottom: 10px;">
        <tr>
            <th>Nama Project </th>
            <td> <?= $res['namaproject'] ?></td>
        </tr>
        <tr>
            <th>PIC AM </th>
            <td> <?= $res['nama'] ?></td>
        </tr>
        <tr>
            <th>Unit AM </th>
            <td> <?= $res['unitam'] ?></td>
        </tr>
        <tr>
            <th>PIC IT QA </th>
            <td> <?= $res['itqa'] ?></td>
        </tr>
        <tr>
            <th>Tanggal Mulai </th>
            <td> <?= $res['tglmulai'] ?></td>
        </tr>
        <tr>
            <th>Order OpenProject </th>
            <?php if ($res['oop'] == "0" || $res['oop'] == null) { ?>
                <td> -</td>
            <?php } else if ($res['oop'] == "1"){ ?>
                <td> NOK</td>
            <?php } else if ($res['oop'] == "2"){ ?>
                <td> ON PROGRESS</td>
            <?php } else { ?>
                <td> OK</td> 
            <?php } ?>            
        </tr>
        <tr>
            <th>BRD </th>
            <?php if ($res['brd'] == "0" || $res['brd'] == null) { ?>
                <td> -</td>
            <?php } else if ($res['brd'] == "1"){ ?>
                <td> NOK</td>
            <?php } else if ($res['brd'] == "2"){ ?>
                <td> ON PROGRESS</td>
            <?php } else { ?>
                <td> OK</td> 
            <?php } ?> 
        </tr>
        <tr>
            <th>TOR </th>
            <?php if ($res['tor'] == "0" || $res['tor'] == null) { ?>
                <td> -</td>
            <?php } else if ($res['tor'] == "1"){ ?>
                <td> NOK</td>
            <?php } else if ($res['tor'] == "2"){ ?>
                <td> ON PROGRESS</td>
            <?php } else { ?>
                <td> OK</td> 
            <?php } ?> 
        </tr>
        <tr>
            <th>Document Aplikasi </th>
            <?php if ($res['da'] == "0" || $res['da'] == null) { ?>
                <td> -</td>
            <?php } else if ($res['da'] == "1"){ ?>
                <td> NOK</td>
            <?php } else if ($res['da'] == "2"){ ?>
                <td> ON PROGRESS</td>
            <?php } else { ?>
                <td> OK</td> 
            <?php } ?> 
        </tr>
        <tr>
            <th>Hasil SIT/QC </th>
            <?php if ($res['sit'] == "0" || $res['sit'] == null) { ?>
                <td> -</td>
            <?php } else if ($res['sit'] == "1"){ ?>
                <td> NOK</td>
            <?php } else if ($res['sit'] == "2"){ ?>
                <td> ON PROGRESS</td>
            <?php } else { ?>
                <td> OK</td> 
            <?php } ?> 
        </tr>
        <tr>
            <th>User Guide </th>
            <?php if ($res['ug'] == "0" || $res['ug'] == null) { ?>
                <td> -</td>
            <?php } else if ($res['ug'] == "1"){ ?>
                <td> NOK</td>
            <?php } else if ($res['ug'] == "2"){ ?>
                <td> ON PROGRESS</td>
            <?php } else { ?>
                <td> OK</td> 
            <?php } ?> 
        </tr>
        <tr>
            <th>Deployment Guide </th>
            <?php if ($res['dg'] == "0" || $res['dg'] == null) { ?>
                <td> -</td>
            <?php } else if ($res['dg'] == "1"){ ?>
                <td> NOK</td>
            <?php } else if ($res['dg'] == "2"){ ?>
                <td> ON PROGRESS</td>
            <?php } else { ?>
                <td> OK</td> 
            <?php } ?> 
        </tr>
        <tr>
            <th>Security Scan </th>
            <?php if ($res['ss'] == "0" || $res['ss'] == null) { ?>
                <td> -</td>
            <?php } else if ($res['ss'] == "1"){ ?>
                <td> NOK</td>
            <?php } else if ($res['ss'] == "2"){ ?>
                <td> ON PROGRESS</td>
            <?php } else { ?>
                <td> OK</td> 
            <?php } ?> 
        </tr>
        <tr>
            <th>Functional QA </th>
            <?php if ($res['fqa'] == "0" || $res['fqa'] == null) { ?>
                <td> -</td>
            <?php } else if ($res['fqa'] == "1"){ ?>
                <td> NOK</td>
            <?php } else if ($res['fqa'] == "2"){ ?>
                <td> ON PROGRESS</td>
            <?php } else { ?>
                <td> OK</td> 
            <?php } ?> 
        </tr>
        <tr>
            <th>Hasil UAT Dev </th>
            <?php if ($res['uat'] == "0" || $res['uat'] == null) { ?>
                <td> -</td>
            <?php } else if ($res['uat'] == "1"){ ?>
                <td> NOK</td>
            <?php } else if ($res['uat'] == "2"){ ?>
                <td> ON PROGRESS</td>
            <?php } else { ?>
                <td> OK</td> 
            <?php } ?> 
        </tr>
        <tr>
            <th>Regulatory </th>
            <?php if ($res['reg'] == "0" || $res['reg'] == null) { ?>
                <td> -</td>
            <?php } else if ($res['reg'] == "1"){ ?>
                <td> NOK</td>
            <?php } else if ($res['reg'] == "2"){ ?>
                <td> ON PROGRESS</td>
            <?php } else { ?>
                <td> OK</td> 
            <?php } ?> 
        </tr>
        <tr>
            <th>SOP Layanan</th>
            <?php if ($res['sop'] == "0" || $res['sop'] == null) { ?>
                <td> -</td>
            <?php } else if ($res['sop'] == "1"){ ?>
                <td> NOK</td>
            <?php } else if ($res['sop'] == "2"){ ?>
                <td> ON PROGRESS</td>
            <?php } else { ?>
                <td> OK</td> 
            <?php } ?> 
        </tr>
        <tr>
            <th>Rekomendasi</th>
            <td><?= $res['rekomendasi'] ?></td>
        </tr>
        <tr>
            <th>Note </th>
            <td><?= $res['note'] ?></td>
        </tr>
        <tr>
            <th>Tanggal Selesai </th>
            <td><?= $res['tglselesai'] ?></td>
        </tr>
        <tr>
            <th>Status Project </th>
            <?php if ($res['status'] == "0") { ?>
                <td>NEW</td>
            <?php } else if ($res['status'] == "1"){ ?>
                <td>ON PROGRESS</td>
            <?php } else if ($res['status'] == "2"){ ?>
                <td>DONE</td>
            <?php } else { ?>
                <td>REJECT</td> 
            <?php } ?>
        </tr>
    </table>
</body></html>