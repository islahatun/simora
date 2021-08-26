<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->


    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Illustrations -->
        <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengumuman</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                    </div>
                    <h3><?= $berita['judul'] ?></h3>
                    <p><?= $berita['isi'] ?> </p>
                </div>

            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-6 col-lg-5">
            <div class="card shadow">

                <div class="card-header py-3 mb-3">
                    <h6 class="m-0 font-weight-bold text-primary">Presentase Kegiatan</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            Computer Community
                        </div>
                        <div class="col">
                            : <?php
                                $date = date('Y');
                                $hitung = "SELECT id_ormawa FROM acc WHERE id_ormawa=3 and periode=$date and status ='Acc Biro Akademik'";
                                $h = $this->db->query($hitung)->num_rows();
                                echo $h;
                                ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            Humanika
                        </div>
                        <div class="col">
                            : <?php
                                $date = date('Y');
                                $hitung = "SELECT id_ormawa FROM acc WHERE id_ormawa=8 and periode=$date and status ='Acc Biro Akademik'";
                                $h = $this->db->query($hitung)->num_rows();
                                echo $h;
                                ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            HMTL
                        </div>
                        <div class="col-5">
                            : <?php
                                $date = date('Y');
                                $hitung = "SELECT id_ormawa FROM acc WHERE id_ormawa=8 and periode=$date and status ='Acc Biro Akademik'";
                                $h = $this->db->query($hitung)->num_rows();
                                echo $h;
                                ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            Himasi
                        </div>
                        <div class="col-5">
                            : <?php
                                $date = date('Y');
                                $hitung = "SELECT id_ormawa FROM acc WHERE id_ormawa=9 and periode=$date and status ='Acc Biro Akademik'";
                                $h = $this->db->query($hitung)->num_rows();
                                echo $h;
                                ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            HMCB
                        </div>
                        <div class="col-5">
                            : 50%
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            HMTI
                        </div>
                        <div class="col">
                            : 50%
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            HMTS
                        </div>
                        <div class="col">
                            : 50%
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            ESA
                        </div>
                        <div class="col">
                            : <?php
                                $date = date('Y');
                                $hitung = "SELECT id_ormawa FROM acc WHERE id_ormawa=10 and periode=$date and status ='Acc Biro Akademik'";
                                $h = $this->db->query($hitung)->num_rows();
                                echo $h;
                                ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            HIMADIKA
                        </div>
                        <div class="col">
                            : 50%
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            PRAMUKA
                        </div>
                        <div class="col">
                            : 50%
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            KORMA
                        </div>
                        <div class="col">
                            : 50%
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            KOMPAS
                        </div>
                        <div class="col">
                            : 50%
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Content Row -->

    <div class="row">

        <!-- Illustrations -->
        <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama Organisasi</th>
                                <th scope="col">Jenis Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php
                            foreach ($rak as $r) : ?>
                                <tr>
                                    <th scope="row"><?php $tanggal = $r['waktu'];
                                                    echo date("d F Y", strtotime($tanggal)); ?></th>
                                    <td><?= $r['nama'] ?></td>
                                    <td><?= $r['jenis_kegiatan'] ?></td>

                                </tr>
                        </tbody>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>


        <!-- Illustrations -->
        <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Anggota Ormawa</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                    </div>
                    <div class="row">
                        <?php foreach ($ormawa as $o) :
                        ?>
                            <div class="col-3 ml-3 mb-3">
                                <a class="btn btn-dark" href="<?= base_url('kemahasiswaan/' . $o['id']) ?>" data-toggle="modal" data-target="#tampil<?= $o['id'] ?>"><?= $o['nama'] ?></a>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php

// var_dump($c);
// die;
$query = "SELECT id_pengguna, nama_anggota,npm,jurusan,jabatan FROM anggota_ormawa  where `status`='Aktif'";
$tampil = $this->db->query($query)->result_array();

// var_dump($tampil);
// die;
foreach ($tampil as $o) :
?>
    <!-- Modal tambah -->
    <div class="modal fade" id="tampil<?= $o['id_pengguna']; ?>" tabindex="-1" role="dialog" aria-labelledby="tampilLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tampilLabel">Anggota Organisasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">NPM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php
                            $n = $o['id_pengguna'];
                            $b = "SELECT nama_anggota,npm,jurusan,jabatan FROM anggota_ormawa Where`status`='Aktif' and id_pengguna =$n";
                            $anggota = $this->db->query($b)->result_array();
                            foreach ($anggota as $a) : ?>
                                <tr>
                                    <th scope="row" class="text-center"><?= $i; ?></th>
                                    <td><?= $a['npm']; ?></td>
                                    <td><?= $a['nama_anggota']; ?></td>
                                    <td><?= $a['jurusan']; ?></td>
                                    <td><?= $a['jabatan'] ?></td>
                                </tr>
                        </tbody>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>