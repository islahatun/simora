<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <h3 class="mb-4"><?= $judul; ?></h3>
        <form action="<?= base_url('pengajuan/proposal3/') ?><?= $rak['id'] ?>" method="post">
            <?= $this->session->flashdata('message'); ?>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bagian</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bagian">
                        <?= form_error('bagian', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Barang</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="barang">
                        <?= form_error('barang', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jumlah Barang</label>
                        <input type="text" class=" form-control" id="exampleInputPassword1" name="quality">
                        <?= form_error('quality', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga Satuan</label>
                        <input type="text" class=" form-control" name="harga" id="exampleInputPassword1">
                        <?= form_error('harga', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="text" class=" form-control" value="<?= $pengguna['id'] ?>" name="id_pengguna" id="exampleInputPassword1" hidden>
                        <?= form_error('id_pengguna', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input type="text" class=" form-control" value="<?= $rak['id'] ?>" name="id_rak" id="exampleInputPassword1" hidden>
                        <?= form_error('id_rak', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input type="text" class=" form-control" value="proposal" name="pengajuan" id="exampleInputPassword1" hidden>
                        <?= form_error('pengajuan', '<small class="text-danger pl-3">', ' </small>') ?>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-dark">Simpan</button>
            </div>

        </form>
        <hr>
        <div class="col-4">

        </div>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Bagian</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Harga satuan</th>
                    <th scope="col">Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php $t = 0 ?>
                <?php foreach ($anggaran as $a) : ?>
                    <tr>
                        <th scope="row" class="text-center"><?= $i; ?></th>
                        <td><?= $a['bagian']; ?></td>
                        <td><?= $a['barang']; ?></td>
                        <td><?= $a['quality']; ?></td>
                        <td>Rp.<?= $a['harga']; ?></td>
                        <td>Rp. <?= $h = $a['quality']  * $a['harga']; ?> </td>
                    </tr>
                    <?php $i++; ?>
                    <?php
                    $t += $h;

                    ?>
                <?php endforeach; ?>
                <tr>
                    <td colspan="5" class="text-center font-weight-bold">Total Keseluruhan</td>
                    <td class="font-weight-bold">Rp.<?= $t; ?> </td>
                </tr>
            </tbody>
        </table>
        <form action="">
            <div class="row">
                <div class="col">
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" name="pengajuan" hidden value="proposal">
                            <?= form_error('pengajuan', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputPassword" name="id_ormawa" hidden value="<?= $pengguna['id'] ?>">
                            <?= form_error('id_ormawa', '<small class="text-danger pl-3">', ' </small>') ?>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputPassword" name="periode" value="<?= date('Y') ?>" hidden>
                                <?= form_error('periode', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-dark mb-2 ">Kirim</button>
                    </div>
        </form>


    </div>
</div>
</div>