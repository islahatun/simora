<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <div class="text-center mb-4">
        </div>
        <?= form_open_multipart('ormawa/data_ormawa'); ?>
        <?= $this->session->flashdata('message') ?>
        <div class="row">
            <div class="col-7">
                <div class="form-group row">
                    <label for="inputnama" class="col-sm-4 col-form-label">Nama Organisasi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputnama" name="nama" value="<?= $pengguna['nama'] ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputVisi" class="col-sm-4 col-form-label">Visi Organisasi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputVisi" name="visi" value="<?= $pengguna['visi'] ?>">
                        <?= form_error('visi', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputMisi" class="col-sm-4 col-form-label">Misi Organisasi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputMisi" name="misi" value="<?= $pengguna['misi'] ?>">
                        <?= form_error('misi', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-4 col-form-label">Email Organisasi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail" name="email" value="<?= $pengguna['email'] ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group row">
                    <div class="col">
                        <img src="<?= base_url('assets/img/profil/') . $pengguna['logo']; ?>" alt="" class="img-thumbnail">
                    </div>
                    <div class="col">
                        <div class="custom-file ">
                            <input type="file" class="custom-file-input" name="logo" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-dark">Simpan</button>
        </div>
        </form>
        <hr>
        <form action="<?= base_url('ormawa/anggota_ormawa') ?>" method="post">

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NPM</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="npm">
                        <?= form_error('npm', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_anggota">
                        <?= form_error('nama_anggota', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jurusan</label>
                        <input type="text" class=" form-control" id="exampleInputPassword1" name="jurusan">
                        <?= form_error('jurusan', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jabatan</label>
                        <input type="text" class=" form-control" name="jabatan" id="exampleInputPassword1">
                        <?= form_error('jabatan', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Periode</label>
                        <input type="text" class=" form-control" name="periode" id="exampleInputPassword1">
                        <?= form_error('periode', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="text" class=" form-control" name="id_pengguna" id="exampleInputPassword1" value="<?= $pengguna['id'] ?>" hidden>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input type="text" class=" form-control" name="status" id="exampleInputPassword1" value="Aktif" hidden>
                        <?= form_error('status', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-dark mb-3">Simpan</button>
            </div>
        </form>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($anggota as $a) : ?>
                    <tr>
                        <th scope="row" class="text-center"><?= $i; ?></th>
                        <td><?= $a['npm']; ?></td>
                        <td><?= $a['nama_anggota']; ?></td>
                        <td><?= $a['jurusan']; ?></td>
                        <td><?= $a['jabatan'] ?></td>
                        <td><?= $a['periode']; ?></td>
                        <td><?= $a['status']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('ormawa/edit_anggota/') ?><?= $a['id'] ?>" class="btn btn-dark" data-toggle="modal" data-target="#tambahpengguna<?= $a['id'] ?>">Ubah</a>
                        </td>
                    </tr>
            </tbody>
            <?php $i++; ?>
        <?php endforeach; ?>
        </table>

    </div>
</div>

<!-- Modal edit -->
<?php
$coba = $this->db->get('anggota_ormawa')->result_array();
foreach ($coba as $c) :
?>


    <div class="modal fade" id="tambahpengguna<?= $c['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="tambahpenggunaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahpenggunaLabel">Ubah data Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('ormawa/edit_anggota/'); ?>" method="post">
                    <div class="modal-body">

                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">Nama Anggota</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputnama" name="nama_anggota" value="<?= $c['nama_anggota'] ?>">
                                <?= form_error('nama_anggota', '<small class="text-danger pl-3">', ' </small>') ?>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">NPM</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputnama" name="npm" value="">
                                <?= form_error('npm', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">Jurusan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputnama" name="jurusan" value="">
                                <?= form_error('jurusan', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">Jabatan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputnama" name="jabatan" value="">
                                <?= form_error('jabatan', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputnama" class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="exampleFormControlSelect1" name="status" value="">
                                    <option>Aktif</option>
                                    <option>Alumni</option>
                                    <option>Tidak Aktif</option>
                                </select>
                                <?= form_error('status', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-7">
                                <input class="form-check-input" id="inputnama" name="id" value="" hidden>
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