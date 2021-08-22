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
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Kepanitiaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="true">Jadwal Kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-anggaran" role="tab" aria-controls="pills-contact" aria-selected="true">Anggaran</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-lampiran" role="tab" aria-controls="pills-contact" aria-selected="true">Lampiran</a>
                </li>
            <?php }; ?>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <form action="<?= base_url('pengajuan/edit_pendahuluan/') ?><?= $acc['id'] ?> " method="post">
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" value="Proposal" hidden name="pengajuan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" value="<?= $pendahuluan['id_proposal'] ?>" name="id_proposal" hidden>
                                <?= form_error('id_proposal', '<small class="text-danger pl-3">', ' </small>') ?>
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
                        <div class="form-group row">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputPassword" name="id" value="<?= $rak['id'] ?>" hidden>
                                <?= form_error('id', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-dark mb-2 ">Perbaiki</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <form action="<?= base_url('pengajuan/tambah_panitia/') ?><?= $rak['id'] ?>" method="post">
                        <div class="row mt-3">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-4 col-form-label">Nama </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama_panitia">
                                        <?= form_error('nama_panitia', '<small class="text-danger pl-3">', ' </small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="id_rak" value="<?= $rak["id_rak"] ?>" hidden>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="id_pengguna" value="<?= $pengguna["id"] ?>" hidden>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-4 col-form-label">Jabatan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputPassword" name="jabatan">
                                        <?= form_error('jabatan', '<small class="text-danger pl-3">', ' </small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputPassword" name="pengajuan" value="proposal" hidden>
                                        <?= form_error('pengajuan', '<small class="text-danger pl-3">', ' </small>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-dark mb-2 ">Tambah Kepanitiaan</button>
                        </div>
                    </form>
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
                                        <a href="<?= base_url('pengajuan/edit_panitia/') ?><?= $p['id_panitia'] ?>" class="btn btn-primary" data-toggle="modal" data-target="#ubahpanitia<?= $p['id_panitia']; ?>">Ubah</a>
                                        <a href="<?= base_url('pengajuan/hapus_panitia/') ?><?= $p['id_panitia'] ?>" value="<?= $rak['id'] ?>" class="btn btn-dark mb-2 ">Hapus</a>
                                    </td>
                                </tr>
                        </tbody>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    </table>
                    <div class="text-right">
                        <a href="<?= base_url('pengajuan/edit_panitia/') ?><?= $p['id_panitia'] ?>" class="btn btn-dark mb-2 ">Kirim</a>
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
                                    <td><?= $j['keterangan']; ?></td>
                                </tr>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-anggaran" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <form action="<?= base_url('pengajuan/edit_anggaran/') ?><?= $rak['id'] ?>" method="post">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bagian</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bagian">
                                    <?= form_error('bagian', '<small class="text-danger pl-3">', ' </small>') ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Barang</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="barang">
                                    <?= form_error('barang', '<small class="text-danger pl-3">', ' </small>') ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Jumlah Barang</label>
                                    <input type="text" class=" form-control" id="exampleInputPassword1" name="quality">
                                    <?= form_error('quality', '<small class="text-danger pl-3">', ' </small>') ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Harga Satuan</label>
                                    <input type="text" class=" form-control" name="harga" id="exampleInputPassword1">
                                    <?= form_error('harga', '<small class="text-danger pl-3">', ' </small>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class=" form-control" value="<?= $pengguna['id'] ?>" name="id_pengguna" id="exampleInputPassword1" hidden>
                                    <?= form_error('id_pengguna', '<small class="text-danger pl-3">', ' </small>') ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class=" form-control" value="<?= $rak['id_rak'] ?>" name="id_rak" id="exampleInputPassword1" hidden>
                                    <?= form_error('id_rak', '<small class="text-danger pl-3">', ' </small>') ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class=" form-control" value="Proposal" name="pengajuan" id="exampleInputPassword1" hidden>
                                    <?= form_error('pengajuan', '<small class="text-danger pl-3">', ' </small>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-dark">Simpan</button>
                        </div>

                    </form>
                    <hr>
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
                                    <td>Rp.<?= $a['harga']; ?></td>
                                    <td>
                                        <a href="<?= base_url('pengajuan/ubah_anggaran/') ?><?= $a['id_anggaran'] ?>" class="btn btn-primary" data-toggle="modal" data-target="#ubah<?= $a['id_anggaran']; ?>">Ubah</a>
                                        <a href="<?= base_url('pengajuan/hapus_anggaran/') ?><?= $a['id_anggaran'] ?>" class="btn btn-dark mb-2 ">Hapus</a>
                                    </td>
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
                    <form action="<?= base_url('pengajuan/kirim_revisi') ?>" method="post">
                        <input type="text" name="id" value="<?= $acc['id'] ?>" hidden>
                        <!-- <?= form_error('id', '<small class="text-danger pl-3">', ' </small>') ?> -->
                        <div class="text-right">
                            <button type="submit" class="btn btn-dark">Kirim Perbaikan</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-lampiran" role="tabpanel" aria-labelledby="pills-contact-tab">

            </div>
    </div>
</div>

<!-- End of Main Content -->
<?php
$ubah = $this->db->get('p_anggaran')->result_array();

foreach ($ubah as $u) :
?>
    <?php

    foreach ($anggaran as $a) :
    ?>
        <!-- Modal tambah -->
        <div class="modal fade" id="ubah<?= $u['id_anggaran']; ?>" tabindex="-1" role="dialog" aria-labelledby="ubahLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ubahLabel">Ubah data anggaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('pengajuan/ubah_anggaran/'); ?><?= $a['id']; ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputnama" name="id_anggaran" value="<?= $u['id_anggaran'] ?>" hidden>
                                    <?= form_error('id_anggaran', '<small class="text-danger pl-3">', ' </small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputnama" class="col-sm-4 col-form-label">Bagian </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputnama" name="bagian" value="<?= $u['bagian'] ?>">
                                    <?= form_error('bagian', '<small class="text-danger pl-3">', ' </small>') ?>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputnama" class="col-sm-4 col-form-label">Nama Barang </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputnama" name="barang" value="<?= $u['barang'] ?>">
                                    <?= form_error('barang', '<small class="text-danger pl-3">', ' </small>') ?>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputnama" class="col-sm-4 col-form-label">Jumlah Barang </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputnama" name="quality" value="<?= $u['quality'] ?>">
                                    <?= form_error('quality', '<small class="text-danger pl-3">', ' </small>') ?>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputnama" class="col-sm-4 col-form-label">Harga Satuan </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputnama" name="harga" value="<?= $u['harga'] ?>">
                                    <?= form_error('harga', '<small class="text-danger pl-3">', ' </small>') ?>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-dark">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endforeach; ?>

<?php
$ubah = $this->db->get('p_panitia')->result_array();

foreach ($ubah as $u) :
?>
    <?php

    foreach ($panitia as $a) :
    ?>
        <!-- Modal tambah -->
        <div class="modal fade" id="ubahpanitia<?= $u['id_panitia']; ?>" tabindex="-1" role="dialog" aria-labelledby="ubahLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ubahLabel">Ubah data anggaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('pengajuan/ubah_panitia/'); ?><?= $a['id']; ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputnama" name="id_panitia" value="<?= $u['id_panitia'] ?>" hidden>
                                    <?= form_error('id_panitia', '<small class="text-danger pl-3">', ' </small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputnama" class="col-sm-4 col-form-label">Nama Panitia </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputnama" name="nama_panitia" value="<?= $u['nama_panitia'] ?>">
                                    <?= form_error('nama_panitia', '<small class="text-danger pl-3">', ' </small>') ?>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputnama" class="col-sm-4 col-form-label">Jabatan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputnama" name="jabatan" value="<?= $u['jabatan'] ?>">
                                    <?= form_error('jabatan', '<small class="text-danger pl-3">', ' </small>') ?>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-dark">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endforeach; ?>