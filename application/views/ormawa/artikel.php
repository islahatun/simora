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
        <?= form_open_multipart('ormawa/artikel'); ?>
        <div class="form-group row">
            <div class="col">
                <input type="text" class="form-control" id="staticEmail" name="id" value="<?= $pengguna['nama'] ?>" readonly hidden>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group row">
                    <div class="col">
                        <input type="text" class="form-control" id="staticEmail" name="judul" placeholder="Masukkan Judul">
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

        <div class="text-right">
            <button type="submit" class="btn btn-dark">Publish</button>
        </div>


        </form>


    </div>
</div>
</div>