<?php
defined('BASEPATH') or exit('No direct script access allowed');

class prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('acc_model');
        $this->load->model('data_model');
    }

    public function index()
    {
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['title'] = "Dashboard";
        $data['berita'] = $this->data_model->tampilberita();
        $data['ormawa'] = $this->data_model->jumlah();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar');
        $this->load->view('kemahasiswaan/dashboard', $data);
        $this->load->view('template/footer');
    }
}
