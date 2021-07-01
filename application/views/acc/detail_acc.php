<div class="container">
    <div class="card mb-3">
        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <div class="row">
                <div class="col-4">
                    <img src="<?= base_url('assets/img/artikel/') . $detail['foto']; ?>" width="300" height="250" alt="">
                </div>
                <div class="col">
                    <?= $detail['judul']; ?><br>
                    <?= $detail['author']; ?>
                    <p class="card-text">
                        <?= $detail['isi']; ?>
                    </p>
                </div>
            </div>

            <div class="row mt-3 ml-3 ">
                <form action="<?= base_url('acc/detail_artikel/') ?><?= $detail['id'] ?>" method="post">
                    <span>
                        <button type=" submit" name="submit" class="btn btn-danger">Revisi</button>
                    </span>
                    <span class="ml-3">
                        <button type="submit" value="Acc" name="status" class="btn btn-success">Acc</button>
                    </span>
                </form>
            </div>

            <?php
            if (isset($_POST['submit'])) { ?>
                <form action="<?= base_url('acc/detail_artikel/') ?><?= $detail['id'] ?>" method="post">
                    <div class="row mt-3">
                        <div class="col">
                            <div class="form-group">
                                <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="komentar" placeholder="Masukkan Komentar Revisi"></textarea>
                                <?= form_error('komentar', '<small class="text-danger pl-3">', ' </small>') ?>
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="status" value="Revisi" name="status">

                            </div>
                        </div>
                    </div>
                    <button type=" submit" class="btn btn-danger">Kirim</button>
                </form>
            <?php } ?>

        </div>
    </div>
</div>