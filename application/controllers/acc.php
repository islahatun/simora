<?php
defined('BASEPATH') or exit('No direct script access allowed');

class acc extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('acc_model');
        $this->load->model('data_model');
        $this->load->library('pdf');
    }
    public function acc_pengajuan()
    {
        $data['title'] = "Acc Pengajuan";
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
            case 3; // dpm
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
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar');
        $this->load->view('acc/acc_pengajuan');
        $this->load->view('template/footer');
    }
    public function detail_pengajuan($id)
    {
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $user =  $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        //menampilkan nama untuk judul rak
        $data['nama'] = $this->acc_model->tampilnama($id);
        //menampilkan rak berdasarkan id acc
        $data['detail_rak'] = $this->acc_model->getaccbyid($id);
        $data['pendahuluan'] = $this->acc_model->detail_pendahuluan($id);
        $data['panitia'] = $this->acc_model->detail_panitia($id);
        $data['anggaran'] = $this->acc_model->detail_anggaran($id);
        $data['jadwal'] = $this->acc_model->detail_jadwal($id);
        $data['lampiran'] = $this->acc_model->detail_lampiran($id);
        // menampilkan id acc
        $data['id'] = $this->acc_model->getidacc($id);
        $acc = $this->acc_model->getidacc($id);
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
        $this->form_validation->set_rules('acc', 'acc', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('komentar', 'komentar', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Acc Pengajuan";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            // $this->load->view('acc/detail');
            switch ($acc['pengajuan']) {
                case 'RAK':
                    $this->load->view('acc/detail_rak', $data);
                    break;
                case 'proposal':
                    $this->load->view('acc/detail_proposal', $data);
                    break;
                default:
                    $this->load->view('acc/detail_lpj', $data);
                    break;
            }
            $this->load->view('template/footer');
        } else {
            $this->acc_model->detailacc($id);
            $this->session->set_flashdata('message', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Berhasil Terkirim</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');

            redirect('acc/acc_pengajuan');
        }
    }
    public function pdf($id)
    {
        $data['nama'] = $this->acc_model->tampilnama($id);
        //menampilkan rak berdasarkan id acc
        $data['detail_rak'] = $this->acc_model->getaccbyid($id);
        $rak = $this->acc_model->getaccbyid($id); //menampilkan data berdasarkan id acc
        // menampilkan id acc
        $data['id'] = $this->acc_model->getidacc($id);
        $acc = $this->acc_model->getidacc($id);
        // $user =  $this->data_model->sessionpengguna();
        // $rak = $this->acc_model->accKemahasiswaan();
        // foreach ($rak as $r) {
        //     if ($r['pengajuan'] = 'proposal') {
        //         $this->load->view('acc/pdf_proposal', $data);
        //     } else if ($r['pengajuan'] = 'RAK') {
        //         $this->load->view('acc/pdf_rak', $data);
        //     } else {
        //         $this->load->view('acc/pdf_lpj', $data);
        //     }

        switch ($acc['pengajuan']) {
            case 'RAK':
                $this->load->view('acc/pdf_rak', $data);
                break;
            case 'proposal':
                $this->load->view('acc/pdf_proposal', $data);
                break;
            default:
                $this->load->view('acc/pdf_lpj', $data);
                break;
        }
        // }
    }
    public function artikel()
    {
        $data['title'] = "Artikel";
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['artikel'] = $this->acc_model->artikel();

        $data['title'] = "Acc Pengajuan";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar');
        $this->load->view('acc/artikel');
        $this->load->view('template/footer');
    }
    public function detail_artikel($id)
    {
        $data['title'] = "Detail Artikel";
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['artikel'] = $this->acc_model->artikel();
        $data['detail'] = $this->acc_model->artikelById($id);
        $data['title'] = "Acc Pengajuan";

        // $this->form_validation->set_rules('status', 'status', 'trim|required');
        $this->form_validation->set_rules('komentar', 'komentar', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            $this->load->view('acc/detail_acc');
            $this->load->view('template/footer');
        } else {
            $this->acc_model->accartikel($id);

            $this->session->set_flashdata('message', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Berhasil Terkirim</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');

            redirect('acc/artikel');
        }
    }
}
