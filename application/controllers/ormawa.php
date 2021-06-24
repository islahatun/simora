<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ormawa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
    }

    public function index()
    {

        $data['title'] = "Dashboard";
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['berita'] = $this->data_model->tampilberita();
        $data['rak'] = $this->data_model->getallrak();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('ormawa/dashboard');
        $this->load->view('template/footer');
    }
    public function data_ormawa()
    {
        $data['title'] = "Data Organisasi";
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['anggota'] = $this->data_model->get_anggota();


        $this->form_validation->set_rules('visi', 'Visi Organisasi', 'required|trim');
        $this->form_validation->set_rules('misi', 'Misi Organisasi', 'required|trim');
        $this->form_validation->set_rules('email', 'E-mail Organisasi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('ormawa/data_ormawa', $data);
            $this->load->view('template/footer');
        } else {
            $this->data_model->editprofil();
            $this->session->set_flashdata('message', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Artikerl berhasil di Publish</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');

            redirect('ormawa/data_ormawa');
        }
    }
    public function anggota_ormawa()
    {
        $data['title'] = "Data Organisasi";
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['anggota'] = $this->data_model->get_anggota();

        $this->form_validation->set_rules('npm', 'npm', 'required|trim|is_unique[anggota_ormawa.npm]');
        $this->form_validation->set_rules('nama_anggota', 'nama_anggota', 'required|trim');
        $this->form_validation->set_rules('jurusan', 'jurusan', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required|trim');
        $this->form_validation->set_rules('periode', 'periode', 'required|trim');
        $this->form_validation->set_rules('status', 'status', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('ormawa/data_ormawa', $data);
            $this->load->view('template/footer');
        } else {
            $this->data_model->anggota();

            redirect('ormawa/data_ormawa');
        }
    }

    public function edit_anggota($id)
    {
        $data['title'] = "Data Organisasi";
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['anggota'] = $this->data_model->get_anggota();
        $data['id_anggota'] = $this->data_model->getanggotabyid($id);

        $this->form_validation->set_rules('npm', 'npm', 'required|trim|is_unique[anggota_ormawa.npm]');
        $this->form_validation->set_rules('nama_anggota', 'nama_anggota', 'required|trim');
        $this->form_validation->set_rules('jurusan', 'jurusan', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required|trim');
        $this->form_validation->set_rules('periode', 'periode', 'required|trim');
        $this->form_validation->set_rules('status', 'status', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('ormawa/data_ormawa', $data);
            $this->load->view('template/footer');
        } else {
            $this->data_model->anggota();

            redirect('ormawa/data_ormawa');
        }
    }
    public function artikel()
    {
        $data['title'] = "Artikel";
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();

        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('author', 'author', 'trim|required');
        $this->form_validation->set_rules('isi', 'Isi', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('ormawa/Artikel');
            $this->load->view('template/footer');
        } else {
            $this->data_model->insertArtikel();

            $this->session->set_flashdata('message', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Artikerl berhasil di Publish</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');

            redirect('ormawa/artikel');
        }
    }
}
