<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <?= $this->session->flashdata('message');
                ?>
            </div>
        </div>
        <?php $r =  $this->data_model->tampil_revisi(); ?>
        <?= form_open_multipart('ormawa/artikel'); ?>
        <div class="row">
            <div class="col">
                <div class="form-group row">
                    <div class="col">
                        <input type="text" class="form-control" id="staticEmail" name="judul" placeholder="Masukkan Judul" value="<?= $r['judul'] ?>">
                        <?= form_error('judul', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group row">
                    <div class="col">
                        <input type="text" class="form-control" id="staticEmail" name="author" value="<?= $pengguna['nama'] ?>">
                        <?= form_error('author', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <textarea class="ckeditor" id="ckeditor" rows="6" name="isi"></textarea>
                <?= form_error('isi', '<small class="text-danger pl-3">', ' </small>') ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-4">
                <div class="col">
                    <div class="custom-file ">
                        <input type="file" class="custom-file-input" name="foto" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $revisi =  $this->data_model->tampil_revisi();
        if ($revisi['status'] == 'Revisi') { ?>
            <input type="text" class="form-control" id="staticEmail" name="author" value="<?= $revisi['id'] ?>">
            <div class="text-right">
                <button type="submit" class="btn btn-dark">Kirim</button>
            </div>
        <?php } else { ?>
            <div class="text-right">
                <button type="submit" class="btn btn-dark">Publish</button>
            </div>
        <?php } ?>


        </form>


    </div>
</div>
</div>