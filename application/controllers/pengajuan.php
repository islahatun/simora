<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
        $this->load->model('acc_model');
    }

    public function index()
    {
        $data['rak'] = $this->data_model->getallrak();
        $data['title'] = "Pengajuan RAK";
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();

        $this->form_validation->set_rules('id_pengguna', 'id_pengguna', 'required|trim');
        $this->form_validation->set_rules('jenis_kegiatan', 'Jenis Kegiatan', 'required|trim');
        $this->form_validation->set_rules('tujuan', 'Tujuan Kegiatan', 'required|trim');
        $this->form_validation->set_rules('sasaran', 'Sasaran Kegiatan', 'required|trim');
        $this->form_validation->set_rules('waktu', 'Waktu Kegiatan', 'required|trim');
        $this->form_validation->set_rules('anggaran', 'Anggaran Kegiatan', 'required|trim');
        $this->form_validation->set_rules('periode', 'periode', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            $this->load->view('pengajuan/rak', $data);
            $this->load->view('template/footer');
        } else {
            $this->data_model->insertRAK();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Pengguna Berhasi ditambahkan</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('pengajuan');
        }
    }
    public function kirimRAK()
    {
        $data['title'] = "Pengajuan RAK";
        $data['rak'] = $this->data_model->getallrak();
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();

        $this->form_validation->set_rules('id_ormawa', 'id_ormawa', 'required|trim');
        $this->form_validation->set_rules('id_rak', 'id_rak', 'required|trim');
        $this->form_validation->set_rules('periode', 'periode', 'required|trim');
        $this->form_validation->set_rules('pengajuan', 'pengajuan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            $this->load->view('pengajuan/rak', $data);
            $this->load->view('template/footer');
        } else {
            $this->data_model->pengajuan();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>RAK berhasil Terkirim</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('pengajuan');
        }
    }
    public function proposal()
    {
        $data['title'] = "Pengajuan Poposal";
        $data['judul'] = "Proposal";
        $data['coba'] = $this->data_model->getAllpengguna();
        $data['rak'] = $this->data_model->getallrak();
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $pengguna =  $this->data_model->sessionpengguna();
        $r = $this->data_model->tampil_revisi_kegiatan();
        if ($r['komentar'] !== 'Ok' and $r['id_ormawa'] == $pengguna['id']) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Revisi : ' . $r['komentar'] . ' <br> <a href="' . base_url('pengajuan/edit_pengajuan/') . $r['id'] . '">klik Untuk memperbaiki</a></strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        }

        $this->form_validation->set_rules('id_pengguna', 'id_pengguna', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            $this->load->view('pengajuan/proposal', $data);
            $this->load->view('template/footer');
        }
    }
    public function proposal1($id)
    {
        $data['title'] = "Pengajuan Poposal";
        $data['judul'] = "Lembar Pendahuluan";
        $data['coba'] = $this->data_model->getAllpengguna();
        $data['rak'] = $this->data_model->getrakId($id);
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();

        $this->form_validation->set_rules('id_rak', 'id RAK', 'required|trim');
        $this->form_validation->set_rules('latar_belakang', 'Latar Belakang', 'required|trim');
        $this->form_validation->set_rules('tema_kegiatan', 'Tema Kegiatan', 'required|trim');
        $this->form_validation->set_rules('jam_pelaksanaan', 'Jam Pelaksanaan', 'required|trim');
        $this->form_validation->set_rules('waktu_kegiatan', 'Jam Pelaksanaan', 'required|trim');
        $this->form_validation->set_rules('pelaksanaan_selesai', 'Jam selesi Pelaksanaan', 'required|trim');
        $this->form_validation->set_rules('tujuan_pelaksanaan', 'Tujuan Pelaksanaan', 'required|trim');
        $this->form_validation->set_rules('sasaran_peserta', 'Sasaran Peserta', 'required|trim');
        $this->form_validation->set_rules('tempat', 'Tempat Kegiatan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            $this->load->view('pengajuan/proposal1', $data);
            $this->load->view('template/footer');
        } else {
            $this->data_model->insertPendahuluan();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Pendahuluan berhasil ditambahkan</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('pengajuan/proposal2/' . $id);
        }
    }
    public function proposal2($id)
    {
        $data['rak'] = $this->data_model->getrakId($id);
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['title'] = "Pengajuan Kegiatan";
        $data['judul'] = "Lembar Kepanitiaan";
        $data['panitia'] = $this->data_model->selectPanitia();

        $this->form_validation->set_rules('nama_panitia', 'Nama Panitia', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('pengajuan', 'pengajuan', 'required|trim');
        $this->form_validation->set_rules('id_rak', 'id rak', 'required|trim');
        $this->form_validation->set_rules('id_pengguna', 'id penggun', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            $this->load->view('pengajuan/proposal2', $data);
            $this->load->view('template/footer');
        } else {
            $this->data_model->insertPanitia();

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Kepanitiaan berhasil ditambahkan</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('pengajuan/proposal2/' . $id);
        }
    }
    public function proposal3($id)
    {

        $data['title'] = "Pengajuan Kegiatan";
        $data['judul'] = "Lembar Anggaran";
        $data['rak'] = $this->data_model->getrakId($id);
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['anggaran'] = $this->data_model->selectAnggaran($id);

        $this->form_validation->set_rules('id_rak', 'id_rak', 'trim|required');
        $this->form_validation->set_rules('id_pengguna', 'id_pengguna', 'trim|required');
        $this->form_validation->set_rules('bagian', 'bagian', 'trim|required');
        $this->form_validation->set_rules('barang', 'barang', 'trim|required');
        $this->form_validation->set_rules('harga', 'harga', 'trim|required');
        $this->form_validation->set_rules('quality', 'quality', 'trim|required');
        $this->form_validation->set_rules('pengajuan', 'pengajuan', 'trim|required');


        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            $this->load->view('pengajuan/proposal3', $data);
            $this->load->view('template/footer');
        } else {
            $this->data_model->insertAnggaran();

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>anggaran berhasil ditambahkan</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('pengajuan/proposal3/' . $id);
        }
    }
    public function kirim_pengajuan($id)
    {

        $data['title'] = "Pengajuan Kegiatan";
        $data['judul'] = "Lembar Anggaran";
        $data['rak'] = $this->data_model->getrakId($id);
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['anggaran'] = $this->data_model->selectAnggaran($id);

        $this->form_validation->set_rules('id_ormawa', 'id_ormawa', 'required|trim');
        $this->form_validation->set_rules('periode', 'periode', 'required|trim');
        $this->form_validation->set_rules('pengajuan', 'pengajuan', 'required|trim');
        $this->form_validation->set_rules('id_rak', 'id_rak', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            $this->load->view('pengajuan/proposal3', $data);
            $this->load->view('template/footer');
        } else {

            $this->data_model->pengajuan();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>RAK berhasil Terkirim</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('pengajuan/proposal');
        }
    }
    public function proposal4($id)
    {
        $data['title'] = "Pengajuan Poposal";
        $data['judul'] = "Lembar Jadwal Kegiatan";
        $data['rak'] = $this->data_model->getrakId($id);
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['jadwal'] = $this->data_model->selectjadwal($id);

        $this->form_validation->set_rules('id_pengguna', 'id pengguna', 'trim|required');
        $this->form_validation->set_rules('id_rak', 'id rak', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
        $this->form_validation->set_rules('mulai', 'mulai', 'trim|required');
        $this->form_validation->set_rules('selesai', 'selesai', 'trim|required');
        $this->form_validation->set_rules('kegiatan', 'kegiatan', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
        $this->form_validation->set_rules('pengajuan', 'pengajuan', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            $this->load->view('pengajuan/proposal4', $data);
            $this->load->view('template/footer');
        } else {
            $this->data_model->insertjadwal();
            redirect('pengajuan/proposal4/' . $id);
        }
    }
    public function lpj1($id)
    {
        $data['title'] = "Pengajuan Kegiatan";
        $data['judul'] = "Lembar Pendahuluan";
        $data['coba'] = $this->data_model->getAllpengguna();
        $data['rak'] = $this->data_model->getrakId($id);
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['pendahuluan'] = $this->data_model->pendahuluan($id);

        $this->form_validation->set_rules('id_rak', 'id RAK', 'required|trim');
        $this->form_validation->set_rules('latar_belakang', 'Latar Belakang', 'required|trim');
        $this->form_validation->set_rules('tema_kegiatan', 'Tema Kegiatan', 'required|trim');
        $this->form_validation->set_rules('jam_pelaksanaan', 'Jam Pelaksanaan', 'required|trim');
        $this->form_validation->set_rules('waktu_kegiatan', 'Jam Pelaksanaan', 'required|trim');
        $this->form_validation->set_rules('pelaksanaan_selesai', 'Jam selesi Pelaksanaan', 'required|trim');
        $this->form_validation->set_rules('tujuan_pelaksanaan', 'Tujuan Pelaksanaan', 'required|trim');
        $this->form_validation->set_rules('sasaran_peserta', 'Sasaran Peserta', 'required|trim');
        $this->form_validation->set_rules('tempat', 'Tempat Kegiatan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            $this->load->view('pengajuan/lpj1', $data);
            $this->load->view('template/footer');
        } else {
            $this->data_model->insertPendahuluan();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Pendahuluan berhasil ditambahkan</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('pengajuan/lpj2/' . $id);
        }
    }
    public function lpj2($id)
    {
        $data['title'] = "Pengajuan Kegiatan";
        $data['judul'] = "Lembar Jadwal Kegiatan";
        $data['rak'] = $this->data_model->getrakId($id);
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['jadwal'] = $this->data_model->selectjadwallpj($id);

        $this->form_validation->set_rules('id_pengguna', 'id pengguna', 'trim|required');
        $this->form_validation->set_rules('id_rak', 'id rak', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
        $this->form_validation->set_rules('mulai', 'mulai', 'trim|required');
        $this->form_validation->set_rules('selesai', 'selesai', 'trim|required');
        $this->form_validation->set_rules('kegiatan', 'kegiatan', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
        $this->form_validation->set_rules('pengajuan', 'pengajuan', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            $this->load->view('pengajuan/lpj2', $data);
            $this->load->view('template/footer');
        } else {
            $this->data_model->insertjadwal();
            redirect('pengajuan/lpj2/' . $id);
        }
    }
    public function lpj3($id)
    {

        $data['title'] = "Pengajuan Kegiatan";
        $data['judul'] = "Lembar Anggaran";
        $data['rak'] = $this->data_model->getrakId($id);
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['anggaran'] = $this->data_model->selectAnggaranlpj($id);

        $this->form_validation->set_rules('id_rak', 'id_rak', 'trim|required');
        $this->form_validation->set_rules('id_pengguna', 'id_pengguna', 'trim|required');
        $this->form_validation->set_rules('bagian', 'bagian', 'trim|required');
        $this->form_validation->set_rules('barang', 'barang', 'trim|required');
        $this->form_validation->set_rules('harga', 'harga', 'trim|required');
        $this->form_validation->set_rules('quality', 'quality', 'trim|required');
        $this->form_validation->set_rules('pengajuan', 'pengajuan', 'trim|required');


        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            $this->load->view('pengajuan/lpj3', $data);
            $this->load->view('template/footer');
        } else {
            $this->data_model->insertAnggaran();

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>anggaran berhasil ditambahkan</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('pengajuan/lpj3/' . $id);
        }
    }
    public function lpj4($id)
    {
        $data['title'] = "Pengajuan Kegiatan";
        $data['judul'] = "Lembar Lampiran";
        $data['rak'] = $this->data_model->getrakId($id);
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();

        $this->form_validation->set_rules('id_rak', 'id_rak', 'trim|required');
        $this->form_validation->set_rules('id_pengguna', 'id_pengguna', 'trim|required');
        $this->form_validation->set_rules('pengajuan', 'pengajuan', 'trim|required');
        $this->form_validation->set_rules('id_ormawa', 'id_ormawa', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('pengajuan/lpj4', $data);
            $this->load->view('template/footer');
        } else {
            $this->data_model->lampiran1();
            $this->data_model->lampiran2();
            $this->data_model->lampiran3();
            $this->data_model->lampiran4();
            $this->data_model->pengajuan();
            redirect('pengajuan/proposal');
        }
    }
    public function edit_pengajuan($id)
    {
        $data['title'] = "Revisi Pengajuan Kegiatan";
        $data['rak'] = $this->data_model->getrakIdacc();
        $data['acc'] = $this->acc_model->getidacc($id);
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['edit'] = $this->data_model->tampil_revisi_kegiatan();
        $data['menu'] = $this->data_model->menu();
        $data['pendahuluan'] = $this->data_model->revisi_pendahuluan($id);
        $data['panitia'] = $this->acc_model->detail_panitia($id);
        $data['anggaran'] = $this->acc_model->detail_anggaran($id);
        $data['jadwal'] = $this->acc_model->detail_jadwal($id);
        $data['lampiran'] = $this->acc_model->detail_lampiran($id);
        $data['pendahuluan_lpj'] = $this->acc_model->detail_pendahuluan_lpj($id);
        $data['anggaran_lpj'] = $this->acc_model->detail_anggaran_lpj($id);
        $data['jadwal_lpj'] = $this->acc_model->detail_jadwal_lpj($id);
        $data['lampiran'] = $this->acc_model->detail_lampiran($id);

        $this->form_validation->set_rules('id_rak', 'id RAK', 'required|trim');
        $this->form_validation->set_rules('latar_belakang', 'Latar Belakang', 'required|trim');
        $this->form_validation->set_rules('tema_kegiatan', 'Tema Kegiatan', 'required|trim');
        $this->form_validation->set_rules('jam_pelaksanaan', 'Jam Pelaksanaan', 'required|trim');
        $this->form_validation->set_rules('waktu_kegiatan', 'Jam Pelaksanaan', 'required|trim');
        $this->form_validation->set_rules('pelaksanaan_selesai', 'Jam selesi Pelaksanaan', 'required|trim');
        $this->form_validation->set_rules('tujuan_pelaksanaan', 'Tujuan Pelaksanaan', 'required|trim');
        $this->form_validation->set_rules('sasaran_peserta', 'Sasaran Peserta', 'required|trim');
        $this->form_validation->set_rules('tempat', 'Tempat Kegiatan', 'required|trim');

        $this->form_validation->set_rules('id_pengguna', 'id pengguna', 'trim|required');
        $this->form_validation->set_rules('id_rak', 'id rak', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
        $this->form_validation->set_rules('mulai', 'mulai', 'trim|required');
        $this->form_validation->set_rules('selesai', 'selesai', 'trim|required');
        $this->form_validation->set_rules('kegiatan', 'kegiatan', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
        $this->form_validation->set_rules('pengajuan', 'pengajuan', 'trim|required');

        $this->form_validation->set_rules('id_rak', 'id_rak', 'trim|required');
        $this->form_validation->set_rules('id_pengguna', 'id_pengguna', 'trim|required');
        $this->form_validation->set_rules('bagian', 'bagian', 'trim|required');
        $this->form_validation->set_rules('barang', 'barang', 'trim|required');
        $this->form_validation->set_rules('harga', 'harga', 'trim|required');
        $this->form_validation->set_rules('quality', 'quality', 'trim|required');
        $this->form_validation->set_rules('pengajuan', 'pengajuan', 'trim|required');

        $this->form_validation->set_rules('id_rak', 'id_rak', 'trim|required');
        $this->form_validation->set_rules('id_pengguna', 'id_pengguna', 'trim|required');
        $this->form_validation->set_rules('pengajuan', 'pengajuan', 'trim|required');
        $this->form_validation->set_rules('id_ormawa', 'id_ormawa', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            $this->load->view('pengajuan/edit_pengajuan');
            $this->load->view('template/footer');
        } else {
            $this->data_model->insertAnggaran();
            $this->data_model->editAnggaran();
        }
    }
}
