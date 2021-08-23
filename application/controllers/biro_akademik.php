<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biro_Akademik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
    }

    public function index()
    {
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['title'] = "Dashboard";
        $data['berita'] = $this->data_model->tampilberita();
        $data['rak'] = $this->data_model->tampil_rak();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar');
        $this->load->view('kemahasiswaan/dashboard', $data);
        $this->load->view('template/footer');
    }
}
