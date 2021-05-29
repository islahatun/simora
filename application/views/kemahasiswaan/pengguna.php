<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">

        <button type="button" class="btn btn-dark mb-3" data-toggle="modal" data-target="#tambahpengguna">Tambah data Pengguna</button>
        <div class="row">
            <div class="col-6">
                <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="cari data pengguna" name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-dark" type="submit">Cari</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col">#</th>
                <th scope="col">Nama Pengguna</th>
                <th scope="col">Level</th>
                <th scope="col">Aktif</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($query as $r) : ?>
                <tr>
                    <th scope="row" class="text-center"><?= $i; ?></th>
                    <td><?= $r['nama']; ?></td>
                    <td><?= $r['level'] ?></td>
                    <td><?= $r['aktif'] ?></td>
                    <td class="text-center">
                        <a href="<?= base_url(); ?>kemahasiswaan/ubah_pengguna/<?= $r['id']; ?>" class="badge badge-primary">Ubah</a> |
                        <a href="<?= base_url(); ?>kemahasiswaan/hapus_pengguna/<?= $r['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda yakin menghapus pengguna ini?')">Hapus</a>
                    </td>
                </tr>
        </tbody>
        <?php $i++; ?>
    <?php endforeach; ?>
    </table>

</div>
</div>
</div>

<!-- End of Main Content -->
<!-- Modal tambah -->
<div class="modal fade" id="tambahpengguna" tabindex="-1" role="dialog" aria-labelledby="tambahpenggunaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahpenggunaLabel">Tambah data Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('kemahasiswaan/pengguna'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="inputnama" class="col-sm-4 col-form-label">Nama Pengguna</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputnama" name="nama">
                            <?= form_error('nama', '<small class="text-danger pl-3">', ' </small>') ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnama" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputnama" name="sandi">
                            <?= form_error('sandi', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnama" class="col-sm-4 col-form-label">Konfirmasi Password</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputnama" name="sandi2">
                            <?= form_error('sandi2', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnama" class="col-sm-4 col-form-label">Level</label>
                        <div class="col-sm-8">

                            <select class="form-control" id="exampleFormControlSelect1" name="level_id">
                                <option>Pilih Level Pengguna</option>
                                <?php foreach ($level as $l) : ?>
                                    <option value="<?= $l['id']; ?>"><?= $l['level']; ?></option>
                                <?php endforeach;  ?>
                            </select>

                            <?= form_error('level', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputnama" class="col-sm-5 col-form-label">Aktif</label>
                        <div class="col-sm-7">
                            <input class="form-check-input" id="inputnama" type="checkbox" id="inlineCheckbox3" value=1 checked>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>