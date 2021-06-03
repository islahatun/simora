<?php

class data_model extends CI_Model
{
    public function sessionpengguna()
    {
        return $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();
    }
    public function menu()
    {
        $level =  $this->session->userdata('level_id');
        $menu = "SELECT user_menu.* FROM user_menu JOIN user_access_menu ON user_menu.id = user_access_menu.menu_id WHERE user_access_menu.level_id = $level ORDER BY  user_access_menu.menu_id";

        return $this->db->query($menu)->result_array();
    }
    public function get_level()
    {
        $level = "SELECT `pengguna`.*, `level`.`level` 
                  FROM `pengguna` JOIN `level` 
                  ON `pengguna`.`level_id` = `level`.`id`";

        return  $this->db->query($level)->result_array();
    }
    public function getAllpengguna()
    {
        return $this->db->get('pengguna')->result_array();
    }
    public function deletepengguna($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pengguna');
    }
    public function getpenggunabyid($id)
    {
        return $this->db->get_where('pengguna', ['id' => $id])->row_array();
    }
    public function editpengguna()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'level_id' => $this->input->post('level_id'),
            'aktif' => 1
        ];
        //baru ini(2)
        $this->db->where('id', $this->input->post('id'));
        // ini dulu (1)
        $this->db->update('pengguna', $data);
    }
    public function caripengguna()
    {

        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('level', $keyword);
        return $this->db->get('pengguna')->result_array();
    }
    public function getallrak()
    {
        $pengguna = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

        $pengguna = $pengguna['id'];


        $rak = "SELECT * FROM `p_rak` where `p_rak`.`id_pengguna`= $pengguna";

        return  $this->db->query($rak)->result_array();
    }
    public function insertRAK()
    {
        $data = [
            'id_pengguna' => $this->input->post('id_pengguna'),
            'periode' => $this->input->post('periode'),
            'jenis_kegiatan' => $this->input->post('jenis_kegiatan'),
            'tujuan' => $this->input->post('tujuan'),
            'sasaran' => $this->input->post('sasaran'),
            'waktu' => $this->input->post('waktu'),
            'anggaran' => $this->input->post('anggaran')
        ];

        $this->db->insert('p_rak', $data);
    }
    public function getrakId($id)
    {
        return $this->db->get_where('p_rak', ['id' => $id])->row_array();
    }

    public function insertprofil()
    {
        $data = [
            'id_pengguna' => $this->input->post('id_pengguna'),
            'nama' => $this->input->post('nama'),
            'periode' => $this->input->post('periode'),
            'visi' => $this->input->post('visi'),
            'misi' => $this->input->post('misi'),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'logo' => $this->input->post('logo')
        ];
        $this->db->insert('profil', $data);
    }
    // public function insertArtikel()
    // {

    //     die;
    //     $data = [
    //         'nama' => $this->input->post('nama'),
    //         'judul' => $this->input->post('judul'),
    //         'author' => $this->input->post('author'),
    //         'foto' => $this->input->post('foto')
    //     ];

    //     $config['upload_path'] = './assets/img/artikel/';
    //     $config['allowed_types'] = 'gif|jpg|png';
    //     $config['max_size']     = '2048';

    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('foto')) {
    //         $error = array('error' => $this->upload->display_errors());

    //         $this->load->view('ormawa/artikel', $error);
    //     } else {
    //         $data = array('upload_data' => $this->upload->data());
    //         $this->db->insert('artikel', $data);
    //     }
    // }
    public function insertPendahuluan()
    {
        $data = [
            'id_rak' => $this->input->post('id_rak'),
            'latar_belakang' => $this->input->post('latar_belakang'),
            'tema_kegiatan' => $this->input->post('tema_kegiatan'),
            'tujuan_pelaksanaan' => $this->input->post('tujuan_pelaksanaan'),
            'sasaran_peserta' => $this->input->post('sasaran_peserta'),
            'jam_pelaksanaan' => $this->input->post('jam_pelaksanaan'),
            'pelaksanaan_selesai' => $this->input->post('pelaksanaan_selesai'),
            'tempat' => $this->input->post('tempat'),

        ];

        $this->db->insert('p_proposal', $data);
    }
    public function insertPanitia()
    {
        $data = [
            'nama_panitia' => $this->input->post('nama_panitia'),
            'jabatan' => $this->input->post('jabatan'),
            'pengajuan' => $this->input->post('pengajuan'),
            'id_rak' => $this->input->post('id_rak'),
            'id_pengguna' => $this->input->post('id_pengguna')
        ];

        $this->db->insert('p_panitia', $data);
    }
    public function selectPanitia()
    {
        $pengguna = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();
        $pengguna = $pengguna['id'];

        $panitia = "SELECT * FROM `p_panitia` where `p_panitia`.`id_pengguna` =$pengguna ";
        return  $this->db->query($panitia)->result_array();
    }
    public function insertjadwal()
    {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'id_pengguna' => $this->input->post('id_pengguna'),
            'id_rak' => $this->input->post('id_rak'),
            'mulai' => $this->input->post('mulai'),
            'selesai' => $this->input->post('selesai'),
            'kegiatan' => $this->input->post('kegiatan'),
            'keterangan' => $this->input->post('keterangan'),
            'pengajuan' => $this->input->post('pengajuan')
        ];
        $this->db->insert('p_jadwal', $data);
    }
    public function selectjadwal()
    {
        $pengguna = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();
        $pengguna = $pengguna['id'];

        $jadwal = "SELECT * FROM `p_jadwal` where `p_jadwal`.`id_pengguna` =$pengguna ";
        return  $this->db->query($jadwal)->result_array();
    }
}
