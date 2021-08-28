<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient">
    <!-- Just an image -->
    <nav class="navbar fixed-top navbar-light bg-dark shadow-sm ">
        <a class="navbar-brand " href="#" style="color : white">
            <img src="<?= base_url('assets/img/Logo-unbaja.png') ?>" width="60" height="50" alt="" class="d-inline-block align-center">
            SISTEM INFORMASI MONITORING ORGANISASI MAHASISWA
        </a>
    </nav>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center mt-lg-5">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-4 my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 h-100" src="<?= base_url('assets/img/tampilan/1.jpg') ?>" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="<?= base_url('assets/img/tampilan/2.jpg') ?>" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="<?= base_url('assets/img/tampilan/3.jpg') ?>" alt="Third slide">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">SELAMAT DATANG</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <form class="user" action="<?= base_url('auth'); ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="nama" placeholder="Masukkan Nama Organisasi" value="<?= set_value('nama') ?>">
                                            <?= form_error('nama', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Kata Sandi" name="sandi">
                                            <?= form_error('sandi', '<small class="text-danger pl-3">', ' </small>') ?>
                                        </div>
                                        <button type="submit" class="btn btn-dark btn-user btn-block">
                                            Masuk
                                        </button>
                                    </form>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <?php
        $tampil =  $this->acc_model->tampilartikel();
        ?>
        <h1 class="h4 text-gray-900 mb-4 text-xl-center">ARTIKEL</h1>
        <div class="row">
            <div class="col-sm-4 mr-5 mb-3">
                <?php foreach ($tampil as $a) :  ?>
                    <div class="card" style="width: 25rem;">
                        <img class="card-img-top p-3 " src="<?= base_url('assets/img/artikel/') . $a['foto']; ?>" alt="Card image cap" style="width: 25rem; height: 17rem">
                        <div class="card-body">
                            <h3 class="card-title text-center"><?= $a['judul']; ?></h3>
                            <h5 class="card-title"><?= $a['author']; ?></h5>
                            <a href="<?= base_url('auth/detail_artikel/') ?><?= $a['id_artikel'] ?>" class="btn btn-primary" data-toggle="modal" data-target="#detail<?= $a['id_artikel'] ?>"> Baca Artikel</a>
                        </div>
                    </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <!-- Button trigger modal -->
    <?php
    $artikel = $this->db->get('artikel')->result_array();
    foreach ($artikel as $ar) :
    ?>
        <!-- Modal -->
        <div class="modal fade" id="detail<?= $ar['id_artikel'] ?>" tabindex="-1" role="dialog" aria-labelledby="detailLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailLabel"><?= $ar['judul']; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= $ar['isi']; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>