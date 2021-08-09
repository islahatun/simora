<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <?php if ($edit['pengajuan'] = 'proposal') { ?>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Pendahuluan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Kepanitiaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Jadwal Kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-anggaran" role="tab" aria-controls="pills-contact" aria-selected="false">Anggaran</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-lampiran" role="tab" aria-controls="pills-contact" aria-selected="false">Lampiran</a>
                </li>
            <?php }; ?>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <form action="<?= base_url('pengajuan/edit_pengajuan/') ?><?= $acc['id'] ?> " method="post">
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" value="lpj" hidden name="pengajuan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" value="<?= $rak['id'] ?>" hidden name="id_rak">
                                <?= form_error('id', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kegiatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" value="<?= $rak['jenis_kegiatan'] ?>" name="jenis_kegiatan" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Tema Kegiatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" name="tema_kegiatan" value="<?= $pendahuluan['tema_kegiatan'] ?>">
                                <?= form_error('tema_kegiatan', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Latar Belakang</label>
                            <div class="col-sm-10">
                                <textarea class="ckeditor" id="ckeditor" rows="6" name="latar_belakang" value="<?= $pendahuluan['latar_belakang'] ?>"><?= $pendahuluan['latar_belakang'] ?></textarea>
                                <?= form_error('latar_belakang', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Tujuan Kegiatan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="tujuan_pelaksanaan" value="<?= $pendahuluan['tujuan_pelaksanaan'] ?>"><?= $pendahuluan['tujuan_pelaksanaan'] ?></textarea>
                                <?= form_error('tujuan_pelaksanaan', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Sasaran Kegiatan dan Jumlah peserta</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="sasaran_peserta" value="<?= $pendahuluan['sasaran_peserta'] ?>"><?= $pendahuluan['sasaran_peserta'] ?></textarea>
                                <?= form_error('sasaran_peserta', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="staticEmail" value="<?= $rak['waktu'] ?>" name="waktu_kegiatan" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Waktu Kegiatan</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col">
                                        <input type="time" class="form-control" id="staticEmail" name="jam_pelaksanaan" value="<?= $pendahuluan['jam_pelaksanaan'] ?>">
                                        <?= form_error('jam_pelaksanaan', '<small class="text-danger pl-3">', ' </small>') ?>
                                    </div>
                                    <div class="align-bottom">s/d</div>
                                    <div class="col">
                                        <input type="time" class="form-control" id="staticEmail" name="pelaksanaan_selesai" value="<?= $pendahuluan['pelaksanaan_selesai'] ?>">
                                        <?= form_error('pelaksanaan_selesai', '<small class="text-danger pl-3">', ' </small>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Tempat Kegiatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" name="tempat" value="<?= $pendahuluan['tempat'] ?>">
                                <?= form_error('tempat', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Anggaran Subsidi Kampus</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" value="<?= $rak['anggaran'] ?>" name="anggaran" readonly>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-dark mb-2 ">Kirim</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($panitia as $p) : ?>
                                <tr>
                                    <th scope="row" class="text-center"><?= $i; ?></th>
                                    <td><?= $p['nama_panitia']; ?></td>
                                    <td><?= $p['jabatan'] ?></td>
                                    <td>
                                        <a href="<?= base_url('pengajuan/proposal4/') ?><?= $rak['id'] ?>" class="btn btn-dark mb-2 ">Ubah</a>
                                        <a href="<?= base_url('pengajuan/proposal4/') ?><?= $rak['id'] ?>" class="btn btn-dark mb-2 ">Hapus</a>
                                    </td>
                                </tr>
                        </tbody>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    </table>
                    <div class="text-right">
                        <a href="<?= base_url('pengajuan/proposal4/') ?><?= $rak['id'] ?>" class="btn btn-dark mb-2 ">Kirim</a>
                    </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th scope="col">Tanggal</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Nama Kegiatan</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Ubah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jadwal as $j) : ?>
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
                    <div class="text-right">
                        <a href="<?= base_url('pengajuan/proposal3/') ?><?= $rak['id'] ?>" class="btn btn-dark mb-2 ">Kirim</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-anggaran" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Bagian</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jumlah Barang</th>
                                <th scope="col">Harga satuan</th>
                                <th scope="col">Action</th>
                                <th scope="col">Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php $t = 0 ?>
                            <?php foreach ($anggaran as $a) : ?>
                                <tr>
                                    <th scope="row" class="text-center"><?= $i; ?></th>
                                    <td><?= $a['bagian']; ?></td>
                                    <td><?= $a['barang']; ?></td>
                                    <td><?= $a['quality']; ?></td>
                                    <td>
                                        <a href="<?= base_url('pengajuan/proposal4/') ?><?= $rak['id'] ?>" class="btn btn-dark mb-2 ">Ubah</a>
                                        <a href="<?= base_url('pengajuan/proposal4/') ?><?= $rak['id'] ?>" class="btn btn-dark mb-2 ">Hapus</a>
                                    </td>
                                    <td>Rp.<?= $a['harga']; ?></td>
                                    <td>Rp. <?= $h = $a['quality']  * $a['harga']; ?> </td>
                                </tr>
                                <?php $i++; ?>
                                <?php
                                $t += $h;

                                ?>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="6" class="text-center font-weight-bold">Total Keseluruhan</td>
                                <td class="font-weight-bold">Rp.<?= $t; ?> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-lampiran" role="tabpanel" aria-labelledby="pills-contact-tab">

                </div>
            </div>
    </div>
</div>

<!-- End of Main Content -->