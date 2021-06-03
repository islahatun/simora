<!-- Begin Page Content -->

<!-- Page Heading -->
<div class="card">
    <div class="card-body">
        <h3 class="mb-4"><?= $judul; ?></h3>
        <form action="<?= base_url('pengajuan/proposal3/') ?><?= $rak['id'] ?>" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bagian</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Barang</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jumlah Barang</label>
                        <input type="text" class=" form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Harga Satuan</label>
                        <input type="text" class=" form-control" id="exampleInputPassword1">
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
        <form action="">
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

                    <tr>
                        <th scope="row" class="text-center"><?= $i; ?></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Rp.</td>
                        <td>Rp. </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center font-weight-bold">Total Keseluruhan</td>
                        <td class="font-weight-bold">Rp. </td>
                    </tr>
                </tbody>
                <?php $i++; ?>
            </table>
            <div class="text-right">
                <button type="submit" class="btn btn-dark mb-2 ">Kirim</button>
            </div>
        </form>


    </div>
</div>
</div>