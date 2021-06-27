<div class="container">
    <div class="card mb-3">
        <div class="card-body">

            <div class="row">
                <div class="col-4">
                    <img src="<?= base_url('assets/img/artikel/') . $detail['foto']; ?>" width="300" height="250" alt="">
                </div>
                <div class="col">
                    <?= $detail['author']; ?>
                    <p class="card-text">
                        <?= $detail['isi']; ?>
                    </p>
                </div>
            </div>



        </div>
    </div>
</div>