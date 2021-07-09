<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <h3 class="mb-5"><?= $judul; ?></h3>
        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('pengajuan/lpj1/') ?><?= $rak['id'] ?> " method="post">
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
</div>
</div>