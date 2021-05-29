<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <h3 class="mb-5"><?= $judul; ?></h3>
        <form>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kegiatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tema Kegiatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Latar Belakang</label>
                <div class="col-sm-10">
                    <textarea class="ckeditor" id="ckeditor" rows="6"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tujuan Kegiatan</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Sasaran Kegiatan dan Jumlah peserta</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="staticEmail">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Waktu Kegiatan</label>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col">
                            <input type="time" class="form-control" id="staticEmail">
                        </div>
                        <div class="align-bottom">s/d</div>
                        <div class="col">
                            <input type="time" class="form-control" id="staticEmail">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tepat Kegiatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Anggaran Kegiatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail">
                </div>
            </div>
            <div class="text-right">
                <a href="<?= base_url('pengajuan/proposal2') ?>" class="btn btn-dark mb-2 ">Kirim</a>
            </div>
        </form>


    </div>
</div>
</div>