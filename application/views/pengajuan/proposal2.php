<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <h3 class="mb-4"><?= $judul; ?></h3>
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
                    <?php foreach ($panitia as $p) : ?>
                        <tr>
                            <th scope="row" class="text-center"><?= $i; ?></th>
                            <td><?= $p['nama_panitia']; ?></td>
                            <td><?= $p['jabatan'] ?></td>
                        </tr>
                </tbody>
                <?php $i++; ?>
            <?php endforeach; ?>
            </table>
            <div class="text-right">
                <a href="<?= base_url('pengajuan/proposal1/') ?><?= $rak['id'] ?>" class="btn btn-dark mb-2 ">Kembali</a>
                <a href="<?= base_url('pengajuan/proposal3/') ?><?= $rak['id'] ?>" class="btn btn-dark mb-2 ">Kirim</a>
            </div>
        </form>


    </div>
</div>
</div>