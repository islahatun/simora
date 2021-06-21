<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <h1>Pengajuan Proposal</h1>
        <form action="<?= base_url('acc/pengajuan') ?>" method="post">
            <div class="row">
                <div class="col">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Nama Organisasi</th>
                                <th scope="col">Jenis Pengajuan</th>
                                <th scope="col">File</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pengajuan as $p) : ?>
                                <tr>
                                    <th scope="row" class="text-center"><?= $i; ?></th>
                                    <td><?= $p['ormawa']; ?></td>
                                    <td><?= $p['pengajuan']; ?></td>
                                    <td class="text-center"><button class="btn btn-primary " type="submit">Cek</button></td>
                                    <td class="text-center">
                                        <button class="btn btn-primary" type="submit">Acc</button> |
                                        <button class="btn btn-primary" type="submit">Revisi</button>
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