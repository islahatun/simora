<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>LAPORAN PERTANGGUNGJAWABAN</title>
</head>

<body>

    <span>

    </span>
    <span></span>
    <?php foreach ($pendahuluan_lpj as $pl) : ?>
        <div class="ml-5 mr-5">

            <h1 class="text-center mt-5">
                <font face="times">
                    <center> Laporan Pertanggungjawaban <br> <?= $pl['tema_kegiatan'] ?><br> <?= $nama['nama'] ?> <?= date('Y') ?>
                    </center>
                </font>
            </h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <center>
                <img src="<?= base_url('assets/img/profil/') ?><?= $nama['logo']; ?>" width="400" height="400">
            </center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <font size="12 px" face="times" align="center">
                <h1><?= $nama['nama'] ?> </h1>
            </font>
            <font size="12 px" face="times" align="center">
                <h1>Universitas Banten Jaya</h1>
            </font>
            <font size="12 px" face="times" align="center">
                <h1> Warung pojok doni, Jl. Ciwaru Raya No.73, Cipare, Kec. Serang, Kota Serang, Banten 42117</h1>
            </font>
            <font size="12 px" face="times" align="center">
                <h1> <?= date('Y') ?></h1>
            </font>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <table>
                <tr>
                    <td>
                        <font face="times">
                            <h3>A.</h3>

                        </font>
                    </td>
                    <td>
                        <font face="times">
                            <h3>Latar Belakang</h3>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font face="times">


                        </font>
                    </td>
                    <td>
                        <font face="times">
                            <h3><?= $pl['latar_belakang'] ?></h3>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font face="times">
                            <h3>B.</h3>

                        </font>
                    </td>
                    <td>
                        <font face="times">
                            <h3>Tema Kegiatan</h3>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font face="times">


                        </font>
                    </td>
                    <td>
                        <font face="times">
                            <h3>Kegiatan ini bertemakan "<?= $pl['tema_kegiatan'] ?>"</h3>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font face="times">
                            <h3>C.</h3>

                        </font>
                    </td>
                    <td>
                        <font face="times">
                            <h3>Tujuan Kegiatan</h3>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font face="times">


                        </font>
                    </td>
                    <td>
                        <font face="times">
                            <h3><?= $pl['tujuan_pelaksanaan'] ?></h3>
                        </font>
                    </td>
                </tr>

                <tr>
                    <td>
                        <font face="times">
                            <h3>D.</h3>

                        </font>
                    </td>
                    <td>
                        <font face="times">
                            <h3>Sasaran Peserta</h3>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font face="times">


                        </font>
                    </td>
                    <td>
                        <font face="times">
                            <h3><?= $pl['sasaran_peserta'] ?></h3>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font face="times">
                            <h3>E.</h3>

                        </font>
                    </td>
                    <td>
                        <font face="times">
                            <h3>Waktu dan Tempat Kegiatan</h3>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font face="times">
                        </font>
                    </td>
                    <td>
                        <font face="times">
                            <table>
                                <tr>
                                    <td>
                                        <h3>Tanggal </h3>
                                    </td>
                                    <td>
                                        <h3>:<?= $pl['waktu'] ?></h3>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Jam </h3>
                                    </td>
                                    <td>
                                        <h3>:<?= $pl['jam_pelaksanaan'] ?> s/d <?= $pl['jam_pelaksanaan'] ?></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Tempat </h3>
                                    </td>
                                    <td>
                                        <h3>:<?= $pl['tempat'] ?></h3>
                                    </td>
                                </tr>
                            </table>
                        </font>
                    </td>
                </tr>
            <?php endforeach; ?>

            <tr>
                <td>
                    <font face="times">
                        <h3>F.</h3>

                    </font>
                </td>
                <td>
                    <font face="times">
                        <h3>Panitia Kegiatan</h3>
                    </font>
                </td>
            </tr>
            <tr>
                <td>
                    <font face="times">
                    </font>
                </td>
                <td>
                    <div class="row">
                        <div class="col-8">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <font face="times">
                                            <th scope="col">Nama Panitia</th>
                                            <th scope="col">Jabatan</th>
                                        </font>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($panitia as $p) : ?>
                                        <tr>
                                        </tr>
                                        <tr>

                                            <td>
                                                <font face="times"><?= $p['nama_panitia'] ?> </font>
                                            </td>
                                            <td>
                                                <font face="times"><?= $p['jabatan']; ?> </font>
                                            </td>

                                        </tr>
                                </tbody>
                            <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <font face="times">
                        <h3>G.</h3>

                    </font>
                </td>
                <td>
                    <font face="times">
                        <h3>Jadwal Kegiatan</h3>
                    </font>
                </td>
            </tr>
            <tr>
                <td>
                    <font face="times">
                    </font>
                </td>
                <td>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Tanggal</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Nama Kegiatan</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jadwal_lpj as $j) : ?>
                                <tr>
                                </tr>
                                <tr>
                                    <td rowspan=3>
                                        <font face="times">
                                            <?php $tanggal = $j['tanggal'];
                                            echo date("d F Y", strtotime($tanggal)); ?> </font>
                                    </td>
                                    <td>
                                        <font face="times"><?= $j['mulai']; ?> - <?= $j['selesai']; ?></font>
                                    </td>
                                    <td>
                                        <font face="times"><?= $j['kegiatan']; ?></font>
                                    </td>
                                    <td>
                                        <font face="times"><?= $j['keterangan']; ?></font>
                                    </td>
                                </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
            <tr>
                <td>
                    <font face="times">
                        <h3>H.</h3>

                    </font>
                </td>
                <td>
                    <font face="times">
                        <h3>Anggaran Kegiatan</h3>
                    </font>
                </td>
            </tr>
            <tr>
                <td>
                    <font face="times">
                    </font>
                </td>
                <td>
                    <?php foreach ($pendahuluan as $pl) : ?>
                        <font face="times">
                            <h3>Adapun Anggaran Kegiatan ini berasal dari subsidi Kampus dengan besar anggaran Rp. <?= $pl['anggaran'] ?> </h3>
                        </font>
                    <?php endforeach; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <font face="times">
                        <h3>I.</h3>

                    </font>
                </td>
                <td>
                    <font face="times">
                        <h3>Rincian Kegiatan</h3>
                    </font>
                </td>
            </tr>
            <tr>
                <td>
                    <font face="times">
                    </font>
                </td>
                <td>
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr class="text-center">
                                <th scope="col font-weight-bold">No</th>
                                <th scope="col font-weight-bold">Bagian</th>
                                <th scope="col font-weight-bold">Nama Barang</th>
                                <th scope="col font-weight-bold">Jumlah Barang</th>
                                <th scope="col font-weight-bold">Harga satuan</th>
                                <th scope="col font-weight-bold">Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php $t = 0 ?>
                            <?php foreach ($anggaran_lpj as $a) : ?>
                                <tr>
                                    <th scope="row" class="text-center">
                                        <font face="times"><?= $i; ?> </font>
                                    </th>
                                    <td>
                                        <font face="times"><?= $a['bagian']; ?> </font>
                                    </td>
                                    <td>
                                        <font face="times"><?= $a['barang']; ?> </font>
                                    </td>
                                    <td>
                                        <font face="times"><?= $a['quality']; ?> </font>
                                    </td>
                                    <td>
                                        <font face="times">Rp.<?= $a['harga']; ?> </font>
                                    </td>
                                    <td>
                                        <font face="times">Rp. <?= $h = $a['quality']  * $a['harga']; ?> </font>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                <?php
                                $t += $h;

                                ?>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="5" class="text-center font-weight-bold">
                                    <font face="times">Total Keseluruhan </font>
                                </td>
                                <td class="font-weight-bold">
                                    <font face="times">Rp.<?= $t; ?> </font>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-right">
                        <font face="times">
                            <div>Mengetahui</div>
                            <div>Bendahara Umum</div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div>Islahatun Nufusi</div>
                        </font>
                    </div>

                </td>
            </tr>
            <tr>
                <td>
                    <font size="12 px" face="times">
                        <h3>J.</h3>

                    </font>
                </td>
                <td>
                    <font size="12 px" face="times">
                        <h3>Penutup</h3>
                    </font>
                </td>
            </tr>
            <tr>
                <td>
                    <font size="12 px" face="times">
                        <h3></h3>

                    </font>
                </td>
                <td>
                    <font size="12 px" face="times">
                        <h4>Atas nama keluarga besar <?= $nama['nama'] ?>, kami selaku panitia berterimaksih kepada teman teman dan pihak yang telah memberikan dukungan moril maupun materil untuk kesuksesan kegiatan ini.</h4>
                    </font>
                </td>
            </tr>
            <tr>
                <td>
                    <font size="12 px" face="times">
                        <h3></h3>

                    </font>
                </td>
                <td>
                    <font size="12 px" face="times">
                        <h3>Lampiran Daftar Absen</h3>
                    </font>
                </td>
            </tr>
            <tr>
                <td>
                    <font size="12 px" face="times">
                        <h3></h3>

                    </font>
                </td>
                <td>
                    <font size="12 px" face="times">
                        <h4>Atas nama keluarga besar <?= $nama['nama'] ?>, kami selaku panitia berterimaksih kepada teman teman dan pihak yang telah memberikan dukungan moril maupun materil untuk kesuksesan kegiatan ini.</h4>
                    </font>
                </td>
            </tr>
            </table>

        </div>
        <!-- Begin Page Content -->

        <!-- Page Heading -->

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