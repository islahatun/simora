<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <h3 class="mb-5"><?= $judul; ?></h3>
        <?= $this->session->flashdata('message'); ?>
        <?= form_open_multipart('pengajuan/lpj4/' . $rak['id']); ?>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Lampiran Absen Panitia</label>
            <div class="col-sm-3">
                <input type="file" class="custom-file-input" name="lampiran1" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Lampiran Absen Peserta</label>
            <div class="col-sm-3">
                <input type="file" class="custom-file-input" name="lampiran2" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Lampiran Absen Peserta</label>
            <div class="col-sm-3">
                <input type="file" class="custom-file-input" name="lampiran3" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
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
            <div class="col-sm-10">
                <input type="text" class="form-control" id="staticEmail" value="<?= $pengguna['id'] ?>" name="id_pengguna" hidden>
            </div>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-dark mb-2 ">Kirim</button>
        </div>
        </form>


    </div>
</div>
</div>