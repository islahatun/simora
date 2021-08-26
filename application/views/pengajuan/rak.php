<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <form action="<?= base_url('pengajuan') ?>" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Jenis Kegiatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="jenis_kegiatan">
                            <?= form_error('jenis_kegiatan', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Tujuan Kegiatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" name="tujuan">
                            <?= form_error('tujuan', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Sasaran Kegiatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" name="sasaran">
                            <?= form_error('sasaran', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Waktu Kegiatan</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="inputPassword" name="waktu">
                            <?= form_error('waktu', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Anggaran</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" name="anggaran">
                            <?= form_error('anggaran', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" name="id_pengguna" value="<?= $pengguna['id'] ?>" hidden>
                            <?= form_error('id_pengguna', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" name="periode" value="<?= date('Y') ?>" hidden>
                            <?= form_error('periode', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <?php if ($button['periode'] == date('Y') and $button['pengajuan'] == 'RAK') { ?>
                    <button type="submit" class="btn btn-dark mb-2 " disabled>Tambah Data RAK</button>
                <?php } else { ?>
                    <button type="submit" class="btn btn-dark mb-2 ">Tambah Data RAK</button>
                <?php } ?>
            </div>
        </form>
        <hr>

        <form action="<?= base_url('pengajuan/kirimRAK') ?>" method="post">

            <div class="row">
                <div class="col">
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" name="pengajuan" hidden value="RAK">
                            <?= form_error('pengajuan', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" name="id_ormawa" hidden value="<?= $pengguna['id'] ?>">
                            <?= form_error('id_ormawa', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" name="id_rak" hidden value="<?= $pengguna['id'] ?><?= date('y') ?>">
                            <?= form_error('id_rak', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputPassword" name="periode" value="<?= date('Y') ?>" hidden>
                                <?= form_error('periode', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-3">
                        <h3>Rancangan Anggaran Kegiatan <?= $pengguna['nama'] ?></h3>
                        <h3><?= date('Y') ?></h3>
                    </div>
                    <?= $this->session->flashdata('message'); ?>
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
                            <?php foreach ($rak as $r) : ?>
                                <tr>
                                    <th scope="row" class="text-center"><?= $i; ?></th>
                                    <td><?= $r['jenis_kegiatan']; ?></td>
                                    <td><?= $r['tujuan']; ?></td>
                                    <td><?= $r['sasaran']; ?></td>
                                    <td><?= $r['waktu']; ?></td>
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
                    <div class="text-right">
                        <?php if ($button['periode'] == date('Y')) { ?>
                            <button type="submit" class="btn btn-dark mb-2 " disabled>Kirim</button>
                        <?php } else { ?>
                            <button type="submit" class="btn btn-dark mb-2 ">Kirim</button>
                        <?php } ?>
                    </div>
        </form>

        <hr>
        <form action="">
        </form>
        <table class="table table-bordered col-5">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Cetak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($acc as $a) : ?>
                    <tr>
                        <th scope="row" class="text-center"><?= $i; ?></th>
                        <td><?= $a['periode'] ?></td>
                        <td><a href="<?= base_url(); ?>acc/pdf/<?= $a['id']; ?>" class="badge badge-primary">Download</a></td>
                    </tr>
            </tbody>
            <?php $i++; ?>
        <?php endforeach; ?>
        </table>
    </div>
</div>
</div>

<!-- End of Main Content -->