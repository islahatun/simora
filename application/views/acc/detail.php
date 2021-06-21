<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <hr>

        <form action="<?= base_url('pengajuan/kirimRAK') ?>" method="post">
            <div class="text-center">
                <h3>Rancangan Anggaran Kegiatan </h3>
                <h3><?= date('Y') ?></h3>
            </div>
            <div class="row">
                <div class="col">
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
                                    <td><?= $r['waktu']; ?></td>
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
                    <div class="text-right">
                        <button type="submit" class="btn btn-dark mb-2 ">Kirim</button>
                    </div>
        </form>

        <hr>
        <form action="">
        </form>
        <table class="table table-bordered col-5">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">RAK</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Cetak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>

                <tr>
                    <th scope="row" class="text-center"><?= $i; ?></th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <?php $i++; ?>
        </table>
    </div>
</div>
</div>

<!-- End of Main Content -->