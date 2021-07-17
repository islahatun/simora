<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <hr>

        <form action="<?= base_url('acc/detail_pengajuan/') ?><?= $id['id'] ?>" method="post">
            <div class="text-center">
                <h3>Proposal Kegiatan <?= $nama['nama'] ?> </h3>
                <?= date('Y') ?>
            </div>
            <!-- Begin Page Content -->
            <?php foreach ($pendahuluan as $pe) : ?>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Jenis Kegiatan</label>
                    <div class="col-sm-7">
                        : <?= $pe['jenis_kegiatan']; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Tema Kegiatan</label>
                    <div class="col-sm-7">
                        : <?= $pe['tema_kegiatan']; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-5 col-form-label">Latar Belakang</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" rows="6" name="latar_belakang">:<?= $pe['latar_belakang']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Tujuan Kegiatan</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="tujuan_pelaksanaan">:<?= $pe['tujuan']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Sasaran Kegiatan dan Jumlah peserta</label>
                    <div class="col-sm-7">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="sasaran_peserta">:<?= $pe['sasaran_peserta']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Tanggal Kegiatan</label>
                    <div class="col-sm-7">
                        : <?= $pe['waktu']; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Waktu Kegiatan</label>
                    <div class="col-sm-7">
                        <div class="row">

                            : <?= $pe['jam_pelaksanaan']; ?>

                            <div class="align-bottom"> s/d </div>

                            <?= $pe['pelaksanaan_selesai']; ?>

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Tempat Kegiatan</label>
                    <div class="col-sm-7">
                        :<?= $pe['tempat']; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-5 col-form-label">Anggaran Subsidi Kampus</label>
                    <div class="col-sm-7">
                        : <?= $pe['anggaran']; ?>
                    </div>
                </div>
            <?php endforeach ?>
        </form>
    </div>
</div>
</div>
</div>
</div>

<!-- End of Main Content -->