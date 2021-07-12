<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>RAK</title>
</head>

<body>

    <span>
        <img src="<?= base_url('assets/img/profil/') ?><?= $nama['logo']; ?>" width="70" height="70">
    </span>
    <span></span>
    <h1>Rancangan Anggaran Kegiatan <?= $nama['nama'] ?> <?= date('Y') ?></h1>


    <br>





    <!-- Begin Page Content -->

    <!-- Page Heading -->

    <hr>
    <div>
        <table border="1">
            <tr align="center">
                <th width='2'>No</th>
                <th>Jenis Kegiatan</th>
                <th>Tujuan</th>
                <th>Sasaran</th>
                <th>Waktu Kegiatan</th>
                <th>Anggaran</th>
            </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php $t = 0 ?>
                <?php foreach ($detail_rak as $r) : ?>
                    <tr>
                        <th align="center"><?= $i; ?></th>
                        <td><?= $r['jenis_kegiatan']; ?></td>
                        <td><?= $r['tujuan']; ?></td>
                        <td><?= $r['sasaran']; ?></td>
                        <td><?= date("d F Y", strtotime($r['waktu']));; ?></td>
                        <td><?= $r['anggaran']; ?></td>
                    </tr>
            </tbody>
            <?php $i++; ?>
            <?php
                    $t += $r['anggaran'];

            ?>
        <?php endforeach; ?>
        <tr>
            <th scope="row" align="center" colspan="5">Total</th>
            <td><?= $t; ?></td>
        </tr>

        </table>
    </div>
    <!--  -->




</body>

</html>