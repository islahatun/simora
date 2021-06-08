<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kemahasiswaan extends CI_Controller
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
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar');
        $this->load->view('kemahasiswaan/dashboard');
        $this->load->view('template/footer');
    }
    public function pengguna()
    {
        $data['title'] = 'Data Pengguna';
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();

        $this->form_validation->set_rules('nama', 'Nama Pengguna', 'required|trim|is_unique[pengguna.nama]');
        $this->form_validation->set_rules('sandi', 'Password', 'required|trim|min_length[6]|matches[sandi2]', [
            'matches' => 'Password Tidak Cocok',
            'min_length' => 'Password Harus minimal 6 Karakter'
        ]);
        $this->form_validation->set_rules('sandi2', 'Konfirmasi Password', 'required|trim|matches[sandi]');
        // mengambil data level melalui model
        $data['query'] = $this->data_model->get_level();
        if ($this->input->post('keyword')) {
            $data['query'] = $this->data_model->caripengguna();
        }
        //pengambilan data untuk combobox level pengguna
        $data['level'] = $this->db->get('level')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar');
            $this->load->view('kemahasiswaan/pengguna', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'sandi' => password_hash($this->input->post('sandi'), PASSWORD_DEFAULT),
                'level_id' => $this->input->post('level_id'),
                'aktif' => 1
            ];
            $this->db->insert('pengguna', $data);

            //memberi pesan berhasil menamba data
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Pengguna Berhasi ditambahkan</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('kemahasiswaan/pengguna');
        }
    }
    public function hapus_pengguna($id)
    {
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $this->data_model->deletepengguna($id);

        //memberi pesan berhasil terhapus
        $this->session->set_flashdata('message', '
        <div class="alert alert-Danger alert-dismissible fade show" role="alert">
        <strong>Pengguna Berhasi dihapus</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');

        redirect('kemahasiswaan/pengguna');
    }
    public function ubah_pengguna($id)
    {
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['title'] = "Ubah Data Pengguna";
        // mengambil data level melalui model
        $data['query'] = $this->data_model->get_level();
        $data['ubah'] = $this->data_model->getpenggunabyid($id);

        $this->form_validation->set_rules('nama', 'Nama Pengguna', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view('kemahasiswaan/ubah_pengguna', $data);
            $this->load->view('template/footer');
        } else {

            $this->data_model->editpengguna();
            $this->session->set_flashdata('message', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Data Pengguna Berhasi diubah</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');

            redirect('kemahasiswaan/pengguna');
        }
    }
}
