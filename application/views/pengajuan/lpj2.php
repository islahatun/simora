<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <h3 class="mb-4"><?= $judul; ?></h3>
        <form action="<?= base_url('pengajuan/lpj2/') ?><?= $rak['id'] ?>" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal">
                        <?= form_error('tanggal', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu Mulai</label>
                        <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mulai">
                        <?= form_error('mulai', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Waktu Selesai</label>
                        <input type="time" class=" form-control" id="exampleInputPassword1" name="selesai">
                        <?= form_error('selesai', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Kegiatan</label>
                        <input type="text" class=" form-control" id="exampleInputPassword1" name="kegiatan">
                        <?= form_error('kegiatan', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">keterangan</label>
                        <input type="text" class=" form-control" id="exampleInputPassword1" name="keterangan">
                        <?= form_error('keterangan', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="text" class=" form-control" id="exampleInputPassword1" name="id_pengguna" value="<?= $pengguna['id'] ?>" hidden>
                        <?= form_error('id_pengguna', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input type="text" class=" form-control" id="exampleInputPassword1" name="id_rak" value="<?= $rak['id'] ?>" hidden>
                        <?= form_error('id_rak', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input type="text" class=" form-control" id="exampleInputPassword1" name="pengajuan" value="lpj" hidden>
                        <?= form_error('pengajuan', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>

        </form>
        <hr>
        <div class="col-4">

        </div>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Nama Kegiatan</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jadwal as $j) : ?>
                    <tr>
                    </tr>
                    <tr>
                        <td rowspan=3>
                            <?php $tanggal = $j['tanggal'];
                            echo date("d F Y", strtotime($tanggal)); ?>
                        </td>
                        <td><?= $j['mulai']; ?> - <?= $j['selesai']; ?></td>
                        <td><?= $j['kegiatan']; ?></td>
                        <td><?= $j['keterangan']; ?></td>
                    </tr>
            </tbody>
        <?php endforeach; ?>
        </table>
        <div class="text-right">
            <a href="<?= base_url('pengajuan/lpj3/') ?><?= $rak['id'] ?>" class="btn btn-dark mb-2 ">Kirim</a>
        </div>


    </div>
</div>
</div>