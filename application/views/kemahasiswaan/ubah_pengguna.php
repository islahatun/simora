<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <form action="<?= base_url('kemahasiswaan/pengguna'); ?>" method="post">
        <div class="modal-body">
            <input type="text" name="id" value="<?= $ubah['id'] ?>">
            <?= form_error('id', '<small class="text-danger pl-3">', ' </small>') ?>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-4 col-form-label">Nama Pengguna</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputnama" name="nama" value="<?= $ubah['nama'] ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', ' </small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-4 col-form-label">Level</label>
                <div class="col-sm-8">

                    <select class="form-control" id="exampleFormControlSelect1" name="level_id" value="<?= $ubah['level_id'] ?>">
                        <option>Level Pengguna</option>
                        <?php foreach ($query as $l) : ?>
                            <?php if ($l['level'] == $ubah['level_id']) : ?>
                                <option value="<?= $l['id']; ?>" selected><?= $l['level']; ?></option>
                            <?php else : ?>
                                <option value="<?= $l['id']; ?>"><?= $l['level']; ?></option>
                            <?php endif; ?>
                        <?php endforeach;  ?>
                    </select>

                    <?= form_error('level_id', '<small class="text-danger pl-3">', ' </small>') ?>
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
            <a href="<?= base_url('kemahasiswaan/pengguna') ?>" class="btn btn-dark">Kembali</a>
            <button type="submit" class="btn btn-dark">Tambah</button>
        </div>
    </form>
    <div class="card-body">