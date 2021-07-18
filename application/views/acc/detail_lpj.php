<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pendahuluan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Kepanitiaan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Jadwal Kegiatan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#anggaran" role="tab" aria-controls="contact" aria-selected="false">Anggaran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#lampiran" role="tab" aria-controls="contact" aria-selected="false">lampiran</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <?php foreach ($pendahuluan_lpj as $pe) : ?>
                    <div class="mt-3">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Jenis Kegiatan</label>
                            <div class="col-sm-7">
                                : <?= $pe['jenis_kegiatan']; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Tema Kegiatan</label>
                            <div class="col-sm-7">
                                : <?= $pe['tema_kegiatan']; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Latar Belakang</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="6" name="latar_belakang"><?= $pe['latar_belakang']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Tujuan Kegiatan</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="tujuan_pelaksanaan"><?= $pe['tujuan']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Sasaran Kegiatan dan Jumlah peserta</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="sasaran_peserta"><?= $pe['sasaran_peserta']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Tanggal Kegiatan</label>
                            <div class="col-sm-7">
                                : <?= $pe['waktu']; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Waktu Kegiatan</label>
                            <div class="col-sm-7">

                                : <?= $pe['jam_pelaksanaan']; ?>

                                s/d

                                <?= $pe['pelaksanaan_selesai']; ?>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Tempat Kegiatan</label>
                            <div class="col-sm-7">
                                :<?= $pe['tempat']; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Anggaran Subsidi Kampus</label>
                            <div class="col-sm-7">
                                : <?= $pe['anggaran']; ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                    </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <table class="table table-bordered mt-3">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($panitia as $pa) : ?>
                            <tr>
                            </tr>
                            <tr>
                                <td><?= $pa['nama_panitia']; ?></td>
                                <td><?= $pa['jabatan']; ?></td>
                            </tr>
                    </tbody>
                <?php endforeach; ?>
                </table>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <table class="table table-bordered mt-3">
                    <thead class="thead-dark">
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
                                    <?php $tanggal = $j['tanggal'];
                                    echo date("d F Y", strtotime($tanggal)); ?>
                                </td>
                                <td><?= $j['mulai']; ?> - <?= $j['selesai']; ?></td>
                                <td><?= $j['kegiatan']; ?></td>
                                <td><?= $j['keterangan']; ?></td>
                            </tr>
                    </tbody>
                <?php endforeach; ?>
                </table>
            </div>
            <div class="tab-pane fade" id="anggaran" role="tabpanel" aria-labelledby="contact-tab">
                <table class="table table-bordered mt-3">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Bagian</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah Barang</th>
                            <th scope="col">Harga satuan</th>
                            <th scope="col">Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php $t = 0 ?>
                        <?php foreach ($anggaran_lpj as $a) : ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $i; ?></th>
                                <td><?= $a['bagian']; ?></td>
                                <td><?= $a['barang']; ?></td>
                                <td><?= $a['quality']; ?></td>
                                <td>Rp.<?= $a['harga']; ?></td>
                                <td>Rp. <?= $h = $a['quality']  * $a['harga']; ?> </td>
                            </tr>
                            <?php $i++; ?>
                            <?php
                            $t += $h;

                            ?>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="5" class="text-center font-weight-bold">Total Keseluruhan</td>
                            <td class="font-weight-bold">Rp.<?= $t; ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="lampiran" role="tabpanel" aria-labelledby="contact-tab">
                <div>
                    <a href="<?= base_url('assets/img/lampiran/') . $lampiran['lampiran1'] ?>">Lampiran Absensi Peserta</a>
                </div>
                <div>
                    <a href="<?= base_url('assets/img/lampiran/') ?><?= $lampiran['lampiran2'] ?>">Lampiran Absensi Panitia</a>
                </div>
                <div>
                    <a href="<?= base_url('assets/img/lampiran/') ?><?= $lampiran['lampiran3'] ?>">Lampiran Dokumentasi Kegiatan</a>
                </div>
                <div>
                    <a href="<?= base_url('assets/img/lampiran/') ?><?= $lampiran['lampiran3'] ?>">Lampiran Kwitansi</a>
                </div>
            </div>

        </div>

    </div>
    <div class="row mt-3 ml-3 ">
        <form action="<?= base_url('acc/detail_pengajuan/') ?><?= $id['id'] ?>" method="post">
            <span class="ml-3 mb-3">
                <button type="submit" value="Acc <?= $pengguna['nama']; ?>" name="status" class="btn btn-success">Acc</button>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="acc" value="<?= $pengguna['id'] ?>" hidden>
                <!-- <?= form_error('acc', '<small class="text-danger pl-3">', ' </small>') ?> -->
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="komentar" value="Ok" hidden>
                <!-- <?= form_error('komentar', '<small class="text-danger pl-3">', ' </small>') ?> -->
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="status" value="Acc <?= $pengguna['nama'] ?>" hidden>
                <!-- <?= form_error('status', '<small class="text-danger pl-3">', ' </small>') ?> -->
            </span>
        </form>
        <form action="" method="post">
            <span>
                <button name="submit" class="btn btn-danger ml-3 mb-3">Revisi</button>
            </span>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) { ?>
        <form action="<?= base_url('acc/detail_pengajuan/') ?><?= $id['id'] ?>" method="post">
            <div class="row mt-3">
                <div class="col">
                    <div class="form-group ml-3">
                        <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="komentar" placeholder="Masukkan Komentar"></textarea>
                        <!-- <?= form_error('komentar', '<small class="text-danger pl-3">', ' </small>') ?> -->
                    </div>
                </div>
                <div class="col-1">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="status" value="Revisi <?= $pengguna['nama'] ?>" hidden>
                        <!-- <?= form_error('status', '<small class="text-danger pl-3">', ' </small>') ?> -->
                    </div>
                </div>
                <div class="col-1">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="acc" value="<?= $pengguna['id'] ?>" hidden>
                        <!-- <?= form_error('acc', '<small class="text-danger pl-3">', ' </small>') ?> -->
                    </div>
                </div>
            </div>
            <div class="ml-3 mb-3">
                <button type=" submit" class="btn btn-danger">Kirim</button>
            </div>

        </form>
    <?php } ?>
</div>

</div>
</div>
</div>
</div>

<!-- End of Main Content -->