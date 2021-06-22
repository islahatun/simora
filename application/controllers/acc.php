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
        $user =  $this->data_model->sessionpengguna();
        //menampilkan acc pengajuan berdasarkan level
        switch ($user['level_id']) {
            case 1; //kemahasiswaan
                $data['acc'] =  $this->acc_model->accKemahasiswaan();
                break;
            case 2; //biro akademik
                $data['acc'] =  $this->acc_model->accbiro();
                break;
            case 3; // depm
                $data['acc'] =  $this->acc_model->accdpm();
                break;
            case 6; //kaprodi
                $data['acc'] =  $this->acc_model->acckaprodi();
                break;
            default:
                if ($user['level_id'] = 5) { // jika hmj yang mengajukan
                    $data['acc'] =  $this->acc_model->accbemHMJ();
                } else { //jika ukm yang mengajukan
                    $data['acc'] =  $this->acc_model->accbem();
                }
                break;
        }
        $this->form_validation->set_rules('persetujuan', 'persetujuan', 'trim|required');


        $data['title'] = "Acc Pengajuan";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar');
        $this->load->view('acc/acc_pengajuan');
        $this->load->view('template/footer');
    }
    public function detail_pengajuan($id)
    {
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['detail_rak'] = $this->acc_model->getaccbyid($id);

        $data['title'] = "Acc Pengajuan";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar');
        $this->load->view('acc/detail');
        $this->load->view('template/footer');
    }
}
