<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">

        <!-- tabs -->
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Lembar Pendahuluan</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Lembar Kepanitiaan</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Lembar Anggaran</a>
            </div>
        </nav>

        <!-- tab panes -->
        <!-- lembar pendahuluan -->
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <form action="<?= base_url('pengajuan/proposal1/') ?><?= $rak['id'] ?> " method="post">
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticEmail" value="proposal" hidden name="pengajuan">
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
                            <input type="text" class="form-control" id="staticEmail" name="tema_kegiatan">
                            <?= form_error('tema_kegiatan', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Latar Belakang</label>
                        <div class="col-sm-10">
                            <textarea class="ckeditor" id="ckeditor" rows="6" name="latar_belakang"></textarea>
                            <?= form_error('latar_belakang', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tujuan Kegiatan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="tujuan_pelaksanaan"></textarea>
                            <?= form_error('tujuan_pelaksanaan', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Sasaran Kegiatan dan Jumlah peserta</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="sasaran_peserta"></textarea>
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
                                    <input type="time" class="form-control" id="staticEmail" name="jam_pelaksanaan">
                                    <?= form_error('jam_pelaksanaan', '<small class="text-danger pl-3">', ' </small>') ?>
                                </div>
                                <div class="align-bottom">s/d</div>
                                <div class="col">
                                    <input type="time" class="form-control" id="staticEmail" name="pelaksanaan_selesai">
                                    <?= form_error('pelaksanaan_selesai', '<small class="text-danger pl-3">', ' </small>') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tempat Kegiatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticEmail" name="tempat">
                            <?= form_error('tempat', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Anggaran Subsidi Kampus</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticEmail" value="<?= $rak['anggaran'] ?>" name="anggaran">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-dark mb-2 ">Tambah Kepanitiaan</button>
                    </div>
                </form>
            </div>


            <!-- lembar kepanitiaan -->

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <form action="<?= base_url('pengajuan/proposal2/') ?><?= $rak['id'] ?>" method="post">
                    <?= $this->session->flashdata('message'); ?>
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
                                    <input type="text" class="form-control" name="id_rak" value="<?= $rak["id"] ?>" hidden>
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
                <hr>
                <div class="col-4">

                </div>
                <form action="">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kepanitiaan as $p) : ?>
                                <tr>
                                    <th scope="row" class="text-center"><?= $i; ?></th>
                                    <td><?= $p['nama_panitia']; ?></td>
                                    <td><?= $p['jabatan']; ?></td>
                                </tr>
                        </tbody>
                        <?php $i++; ?>
                    <?php endforeach ?>
                    </table>
            </div>

            <!-- lembar anggaran -->
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab mb-3">
                <form>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Bagian</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Barang</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jumlah Barang</label>
                                <input type="text" class=" form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Harga Satuan</label>
                                <input type="text" class=" form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>

                </form>
                <hr>
                <div class="col-4">

                </div>
                <form action="">
                    <table class="table table-bordered">
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

                            <tr>
                                <th scope="row" class="text-center"><?= $i; ?></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Rp.</td>
                                <td>Rp. </td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-center font-weight-bold">Total Keseluruhan</td>
                                <td class="font-weight-bold">Rp. </td>
                            </tr>
                        </tbody>
                        <?php $i++; ?>
                    </table>
                    <div class="text-right">
                        <button type="submit" class="btn btn-dark mb-2 ">Kirim</button>
                    </div>

            </div>
        </div>
        </form>

        <!-- end tabs -->

    </div>
</div>
</div>