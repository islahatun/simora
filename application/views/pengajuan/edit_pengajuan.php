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
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                <div class="tab-pane fade" id="pills-anggaran" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                <div class="tab-pane fade" id="pills-lampiran" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
            </div>
    </div>
</div>

<!-- End of Main Content -->