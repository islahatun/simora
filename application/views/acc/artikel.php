<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <h1>Pengajuan Artikel</h1>
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
                                <th scope="col">Komentar</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($artikel as $a) : ?>
                                <tr>
                                    <th scope="row" class="text-center"><?= $i; ?></th>
                                    <td><?= $a['author']; ?></td>
                                    <td><?= $a['judul']; ?></td>
                                    <td class="text-center"><a href="<?= base_url(); ?>acc/detail_artikel/<?= $a['id_artikel']; ?>" class="badge badge-primary">Detail</a>
                                    </td>
                                    <td><?= $a['komentar']; ?></td>
                                    <td><?= $a['status']; ?></td>
                                </tr>
                        </tbody>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
    </div>

    <!-- End of Main Content -->