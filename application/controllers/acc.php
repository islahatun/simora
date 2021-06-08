<?php
defined('BASEPATH') or exit('No direct script access allowed');

class acc extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('acc_model');
        $this->load->model('data_model');
    }
    public function acc_pengajuan()
    {
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['pengajuan'] = $this->acc_model->getPengajuan();
        $data['title'] = "Acc Pengajuan";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar');
        $this->load->view('acc/acc_pengajuan');
        $this->load->view('template/footer');
    }
}