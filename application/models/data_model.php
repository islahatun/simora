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
        $level = "SELECT * FROM pengguna JOIN `level` ON pengguna.level_id = `level`.`id`";
        return $this->db->query($level)->result_array();
    }
    public function getAllpengguna()
    {
        return $this->db->get('pengguna')->result_array();
    }
    public function getpengguna()
    {
        $pengguna = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

        $id = $pengguna['id'];


        return $this->db->get_where('pengguna', ['id' => $id])->row_array();
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

    public function editprofil()
    {
        $pengguna = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();
        $id = $pengguna['id'];

        $nama = $this->input->post('nama');
        $visi = $this->input->post('visi');
        $misi = $this->input->post('misi');
        $email = htmlspecialchars($this->input->post('email', true));
        $logo = $_FILES['logo']['name'];
        if ($logo) {
            $config['upload_path']          = './assets/img/profil/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('logo')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {

                $new_logo = $this->upload->data('_file_name');
                $this->db->set('logo', $new_logo);

                redirect('ormawa/data_ormawa');
            }
        }
        $this->db->set('nama', $nama);
        $this->db->set('visi', $visi);
        $this->db->set('misi', $misi);
        $this->db->set('email', $email);
        $this->db->where('id', $id);
        $this->db->update('pengguna');
    }
    public function getprofil()
    {
        $pengguna = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

        $pengguna = $pengguna['id'];


        $profile = "SELECT * FROM `profile` where `profile`.`id_pengguna`= $pengguna";

        return  $this->db->query($profile)->result_array();
    }
    public function anggota()
    {
        $data = [
            'nama_anggota' => $this->input->post('nama_anggota'),
            'id_pengguna' => $this->input->post('id_pengguna'),
            'npm' => $this->input->post('npm'),
            'jurusan' => $this->input->post('jurusan'),
            'jabatan' => $this->input->post('jabatan'),
            'status' => $this->input->post('status'),
            'periode' => $this->input->post('periode')
        ];
        $this->db->insert('anggota_ormawa', $data);
    }
    public function get_anggota()
    {
        $pengguna = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();
        $id = $pengguna['id'];
        return $this->db->get_where('anggota_ormawa', ['id_pengguna' => $id])->result_array();
    }
    public function getanggotabyid($id)
    {
        return $this->db->get_where('anggota_ormawa', ['id' => $id])->result_array();
    }
    public function edit_anggota($id)
    {
        $data = [
            'nama_anggota' => $this->input->post('nama_anggota'),
            'npm' => $this->input->post('npm'),
            'jurusan' => $this->input->post('jurusan'),
            'jabatan' => $this->input->post('jabatan'),
            'status' => $this->input->post('status'),
            'periode' => $this->input->post('periode')
        ];
        $this->db->update('anggota_ormawa', $data);
    }
    public function insertArtikel()
    {

        die;
        $data = [
            'nama' => $this->input->post('nama'),
            'judul' => $this->input->post('judul'),
            'author' => $this->input->post('author'),
            'foto' => $_FILES['foto']
        ];

        $config['upload_path'] = './assets/img/artikel/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '2048';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('ormawa/artikel', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->db->insert('artikel', $data);
        }
    }
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
    public function insertAnggaran()
    {
        $data = [
            "id_rak" => $this->input->post('id_rak'),
            "id_pengguna" => $this->input->post('id_pengguna'),
            "pengajuan" => $this->input->post('pengajuan'),
            "bagian" => $this->input->post('bagian'),
            "barang" => $this->input->post('barang'),
            "harga" => $this->input->post('harga'),
            "quality" => $this->input->post('quality')
        ];
        $this->db->insert('p_anggaran', $data);
    }
    public function selectAnggaran()
    {

        $pengguna = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();
        $p = $pengguna['id'];

        $anggaran = "SELECT * FROM `p_anggaran` where `p_anggaran`.`id_pengguna` =$p";
        return  $this->db->query($anggaran)->result_array();
    }
    public function berita()
    {
        $data = [
            'author' => $this->input->post('author'),
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi')
        ];
        $this->db->update('artikel', $data);
    }
    public function tampilberita()
    {
        return $this->db->get_where('artikel', ['author' => 'kemahasiswaan'])->row_array();
    }
}
