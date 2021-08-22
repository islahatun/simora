<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('acc_model');
        $this->load->model('data_model');
    }

    public function index()
    {
        $data['title'] = "Login";
        $this->form_validation->set_rules('nama', 'Nama Organisasi', 'required|trim');
        $this->form_validation->set_rules('sandi', 'Kata sandi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login', $data);
        } else {
            //validasi sukses

            $nama = $this->input->post('nama');
            $sandi = $this->input->post('sandi');
            $user = $this->db->get_where('pengguna', ['nama' => $nama])->row_array();
            // jika user ada
            if ($user) {
                // jika user aktif
                if ($user['aktif'] == 1) {
                    // cek password yang sudah di hash
                    if (password_verify($sandi, $user['sandi'])) {
                        $data = [
                            'id' => $user['id'],
                            'nama' => $user['nama'],
                            'level_id' => $user['level_id']
                        ];
                        $this->session->set_userdata($data);
                        switch ($user['level_id']) {
                            case 1;
                                redirect('kemahasiswaan');
                                break;
                            case 2;
                                redirect('biro_akademik');
                                break;
                            case 6;
                                redirect('prodi');
                                break;
                            default:
                                redirect('ormawa');
                                break;
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-dangerterdaftar alert-dismissible fade show" role="alert">
                    <strong>Kata sandi salah</strong> 
                    </div>');
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-dangerterdaftar alert-dismissible fade show" role="alert">
                <strong>pengguna tidak aktif</strong> 
                </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Nama Organisasi tidak terdaftar</strong> 
            </div>');
                redirect('auth');
            }
        }
    }
    public function artikel()
    {
        $data['title'] = "Login";
        $data['tampil'] = $this->acc_model->tampilartikel();
        $this->load->view('auth/login', $data);
    }
    public function detail_artikel($id)
    {
        $data['title'] = "Login";
        $data['detail'] = $this->data_model->tampil_artikleById($id);
        $data['d'] = $this->data_ormawa->tampil_artikleById($id);
        $this->load->view('auth/login', $data);
    }
    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('level_id');

        redirect('auth');
    }
    public function sandi()
    {
        $data['pengguna'] = $this->data_model->sessionpengguna();
        $data['menu'] = $this->data_model->menu();
        $data['title'] = "Ubah Sandi";
        $this->form_validation->set_rules('sandi', 'Password', 'required|trim|min_length[6]|matches[sandi1]', [
            'matches' => 'Password Tidak Cocok',
            'min_length' => 'Password Harus minimal 6 Karakter'
        ]);
        $this->form_validation->set_rules('sandi1', 'Konfirmasi Password', 'required|trim|matches[sandi]');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view('ormawa/dashboard', $data);
            $this->load->view('template/footer');
            // echo"sandi tidak tersimpan";
        } else {

            $pengguna = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

            $id = $pengguna['id'];
            $sandi = password_hash($this->input->post('sandi'), PASSWORD_DEFAULT);
            $this->db->set('sandi', $sandi);
            $this->db->where('id', $id);
            $this->db->update('pengguna');
            $this->session->set_flashdata('message', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Data Pengguna Berhasi diubah</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');

            redirect('auth/sandi');
        }
    }
}
