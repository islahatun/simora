<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <h1>Pengajuan Kegiatan
        </h1>
        <div class="row">
            <div class="col">
                <?= $this->session->flashdata('message');
                ?>
            </div>
        </div>
        <!-- <form action="<?= base_url('pengajuan/kirimRAK') ?>" method="post"> -->
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
                            <th scope="col">Pengajuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php $t = 0 ?>
                        <?php foreach ($rak as $r) : ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $i; ?></th>
                                <td><?= $r['jenis_kegiatan']; ?></td>
                                <td><?= $r['tujuan']; ?></td>
                                <td><?= $r['sasaran']; ?></td>
                                <td><?= date('d F Y', strtotime($r['waktu'])); ?></td>
                                <td><?= $r['anggaran']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>pengajuan/proposal1/<?= $r['id'] ?>" class="badge badge-primary">Proposal</a>
                                    <a href="<?= base_url(); ?>pengajuan/lpj1/<?= $r['id'] ?>" class="badge badge-primary">LPJ</a>
                                </td>
                            </tr>
                    </tbody>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </table>

                <hr>
                <form action="">
                </form>
                <table class="table table-bordered col-5">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Jenis Pengajuan</th>
                            <th scope="col">Periode</th>
                            <th scope="col">Cetak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($acc as $a) : ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $i; ?></th>
                                <td><?= $a['pengajuan'] ?></td>
                                <td><?= $a['periode'] ?></td>
                                <td><a href="<?= base_url(); ?>acc/pdf/<?= $a['id'] ?>" class="btn btn-primary">Cetak</a></td>
                            </tr>
                    </tbody>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <!-- End of Main Content -->