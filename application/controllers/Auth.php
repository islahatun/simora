<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('acc_model');
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
        $data['artikel'] = $this->acc_model->tampilartikel();
        $this->load->view('auth/login', $data);
    }
}
