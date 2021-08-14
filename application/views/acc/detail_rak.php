<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <hr>

        <form action="<?= base_url('acc/detail_pengajuan/') ?><?= $id['id'] ?>" method="post">
            <div class="text-center">
                <h3>Rancangan Anggaran Kegiatan <?= $nama['nama'] ?> </h3>
                <h3><?= date('Y') ?></h3>
                <?= $this->session->flashdata('message') ?>
            </div>
            <div class="row">
                <div class="col">
                    <form action="">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Jenis Kegiatan</th>
                                    <th scope="col">Tujuan</th>
                                    <th scope="col">Sasaran</th>
                                    <th scope="col">Waktu Kegiatan</th>
                                    <th scope="col">Anggaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php $t = 0 ?>
                                <?php foreach ($detail_rak as $r) : ?>
                                    <tr>
                                        <th scope="row" class="text-center"><?= $i; ?></th>
                                        <td><?= $r['jenis_kegiatan']; ?></td>
                                        <td><?= $r['tujuan']; ?></td>
                                        <td><?= $r['sasaran']; ?></td>
                                        <td><?= date("d F Y", strtotime($r['waktu']));; ?></td>
                                        <td><?= $r['anggaran']; ?></td>
                                    </tr>
                            </tbody>
                            <?php $i++; ?>
                            <?php
                                    $t += $r['anggaran'];

                            ?>
                        <?php endforeach; ?>
                        <tr>
                            <th scope="row" class="text-center" colspan="5">Total</th>
                            <td><?= $t; ?></td>
                        </tr>
                        </table>
                        <div class="row mt-3 ml-3 ">
                            <form action="<?= base_url('acc/detail_pengajuan/') ?><?= $id['id'] ?>" method="post">
                                <span class="ml-3">
                                    <button type="submit" value="Acc <?= $pengguna['nama']; ?>" name="status" class="btn btn-success">Acc</button>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="acc" value="<?= $pengguna['level_id'] ?>" hidden>
                                    <!-- <?= form_error('acc', '<small class="text-danger pl-3">', ' </small>') ?> -->
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="komentar" value="Ok" hidden>
                                    <!-- <?= form_error('komentar', '<small class="text-danger pl-3">', ' </small>') ?> -->
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="status" value="Acc <?= $pengguna['nama'] ?>" hidden>
                                    <!-- <?= form_error('status', '<small class="text-danger pl-3">', ' </small>') ?> -->
                                </span>
                            </form>

                        </div>
                </div>
            </div>

            <!-- End of Main Content -->