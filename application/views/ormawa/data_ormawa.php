<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <div class="text-center mb-4">
            <h3>Data Organisasi</h3>
        </div>
        <?= form_open_multipart('ormawa/data_ormawa'); ?>
        <div class="row">
            <div class="col-7">
                <div class="form-group row">
                    <label for="inputPeriode" class="col-sm-4 col-form-label">Periode Organisasi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPeriode" name="periode" value="<?= date('Y') ?>">
                        <?= form_error('periode', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputnama" class="col-sm-4 col-form-label">Nama Organisasi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputnama" name="nama">
                        <?= form_error('nama', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputVisi" class="col-sm-4 col-form-label">Visi Organisasi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputVisi" name="visi">
                        <?= form_error('visi', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputMisi" class="col-sm-4 col-form-label">Misi Organisasi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputMisi" name="misi">
                        <?= form_error('misi', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-4 col-form-label">Email Organisasi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail" name="email">
                        <?= form_error('email', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group row">
                    <div class="col">
                        <img src="<?= base_url('assets/img/profil/') . $ormawa['logo']; ?>" alt="" class="img-thumbnail">
                    </div>
                    <div class="col">
                        <div class="custom-file ">
                            <input type="file" class="custom-file-input" name="logo" id="customFile">
                            <?= form_error('logo', '<small class="text-danger pl-3">', ' </small>') ?>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>

                </div>
                <div class="form-group row">

                    <label for="inputidpengguna" class="col-sm-4 col-form-label">id Organisasi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputidpengguna" value="<?= $pengguna['id'] ?>" name="id_pengguna">
                        <?= form_error('id_pengguna', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-dark">Simpan</button>
        </div>
        </form>


    </div>
</div>