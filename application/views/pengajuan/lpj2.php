<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <h3 class="mb-4"><?= $judul; ?></h3>
        <form>
            <div class="row">
                <div class="col">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Nama </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="jenis_kegiatan">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Jabatan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" name="waktu">
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

                    <tr>
                        <th scope="row" class="text-center"><?= $i; ?></th>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                <?php $i++; ?>
            </table>
            <div class="text-right">
                <a href="<?= base_url('pengajuan/proposal3') ?>" class="btn btn-dark mb-2 ">Kirim</a>
            </div>
        </form>


    </div>
</div>
</div>