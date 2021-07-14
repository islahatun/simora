<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>RANCANGAN ANGGARAN KEGIATAN</title>
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
    <div class="card">
        <div class="card-body">
            <hr>
            <div class="text-center">
                <h3>Rancangan Anggaran Kegiatan <?= $nama['nama'] ?> </h3>
                <h3><?= date('Y') ?></h3>
                <?= $this->session->flashdata('message') ?>
            </div>
            <div class="row">
                <div class="col">
                    <form action="">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Jenis Kegiatan</th>
                                    <th scope="col">Tujuan</th>
                                    <th scope="col">Sasaran</th>
                                    <th scope="col">Waktu Kegiatan</th>
                                    <th scope="col">Anggaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php $t = 0 ?>
                                <?php foreach ($detail_rak as $r) : ?>
                                    <tr>
                                        <th scope="row" class="text-center"><?= $i; ?></th>
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
                            <th scope="row" class="text-center" colspan="5">Total</th>
                            <td><?= $t; ?></td>
                        </tr>
                        </table>
                </div>
            </div>
        </div>

        <!-- End of Main Content -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            window.print();
        </script>
</body>

</html>