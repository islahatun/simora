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
        $level = "SELECT * FROM pengguna JOIN `level` ON pengguna.level_id = `level`.`id_level` ORDER BY `level`.`id_level` ";
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
            'aktif' => $this->input->post('aktif')
        ];
        //baru ini(2)
        $id = $this->input->post('id');
        $this->db->where('id', $id);
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
        $periode = date('Y');

        $rak = "SELECT * FROM `p_rak` where `p_rak`.`id_pengguna`= $pengguna and periode =$periode";

        return $this->db->query($rak)->result_array();
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
    public function getrakIdacc($id)
    {
        $rak = "SELECT *,acc.id_rak FROM `p_rak` JOIN acc ON p_rak.id = acc.id_rak WHERE acc.id=$id ";

        return $this->db->query($rak)->row_array();
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

                $new_logo = $this->upload->data('file_name');
                $this->db->set('logo', $new_logo);
                $this->db->set('nama', $nama);
                $this->db->set('visi', $visi);
                $this->db->set('misi', $misi);
                $this->db->set('email', $email);
                $this->db->where('id', $id);
                $this->db->update('pengguna');

                redirect('ormawa/data_ormawa');
            }
        }
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
    // public function getanggotabyid($id)
    // {
    //     return $this->db->get_where('anggota_ormawa', ['id' => $id])->result();
    //     // var_dump($r);
    //     // die;
    // }
    public function edit_anggota()
    {
        $id = $this->input->post('id');
        $data = [
            'npm' => $this->input->post('npm'),
            'nama_anggota' => $this->input->post('nama_anggota'),
            'jurusan' => $this->input->post('jurusan'),
            'jabatan' => $this->input->post('jabatan'),
            'status' => $this->input->post('status'),
            'periode' => $this->input->post('periode')
        ];
        $this->db->where('id', $id);
        $this->db->update('anggota_ormawa', $data);
    }
    public function insertArtikel()
    {

        $logo = $_FILES['foto']['name'];
        if ($logo) {
            $config['upload_path']          = './assets/img/artikel/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {

                $new_logo = $this->upload->data('file_name');
            }
            $data = [
                'judul' => $this->input->post('judul'),
                'author' => $this->input->post('author'),
                'isi' => $this->input->post('isi'),
                'foto' => $new_logo
            ];

            $this->db->insert('artikel', $data);
        }
    }
    public function perbaikan_artikel()
    {
        $logo = $_FILES['foto']['name'];
        if ($logo) {
            $config['upload_path']          = './assets/img/artikel/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {

                $new_logo = $this->upload->data('file_name');
            }
            $id = $this->input->post('id_artikel');

            $judul = $this->input->post('judul');
            $author = $this->input->post('author');
            $isi = $this->input->post('isi');
            $status = 'Di Perbaiki';
            $foto = $new_logo;

            $this->db->set('judul', $judul);
            $this->db->set('author', $author);
            $this->db->set('isi', $isi);
            $this->db->set('status', $status);
            $this->db->set('foto', $foto);
            $this->db->where('id_artikel', $id);
            $this->db->update('artikel');
        }
    }
    public function insertPendahuluan()
    {
        $data = [
            'id_rak' => $this->input->post('id_rak'),
            'pengajuan' => $this->input->post('pengajuan'),
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
    public function selectjadwal($id)
    {

        $jadwal = "SELECT * FROM `p_jadwal` where `p_jadwal`.`id_rak` =$id";
        return  $this->db->query($jadwal)->result_array();
    }
    public function selectjadwallpj($id)
    {

        $jadwal = "SELECT * FROM `p_jadwal` where `p_jadwal`.`id_RAK` =$id and pengajuan='lpj'";
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
    public function editAnggaran()
    {
        // $data = [
        $id_rak = $this->input->post('id_rak');
        // $id_pengguna = $this->input->post('id_pengguna');
        $pengajuan = $this->input->post('pengajuan');
        $bagian = $this->input->post('bagian');
        $barang = $this->input->post('barang');
        $harga = $this->input->post('harga');
        $quality = $this->input->post('quality');
        // ];
        $this->db->set('pengajuan', $pengajuan);
        $this->db->set('bagian', $bagian);
        $this->db->set('barang', $barang);
        $this->db->set('harga', $harga);
        $this->db->set('quality', $quality);
        $this->db->where('id_rak', $id_rak);
        $this->db->insert('p_anggaran');
    }
    public function selectAnggaran($id)
    {

        $anggaran = "SELECT * FROM `p_anggaran` where `p_anggaran`.`id_rak` =$id";
        return  $this->db->query($anggaran)->result_array();
    }
    public function selectAnggaranlpj($id)
    {

        $anggaran = "SELECT * FROM `p_anggaran` where `p_anggaran`.`id_rak` =$id and pengajuan ='lpj'";
        return  $this->db->query($anggaran)->result_array();
    }
    public function lampiran1()
    {
        $lampiran1 = $_FILES['lampiran1']['name'];
        if ($lampiran1) {
            $config['upload_path']          = './assets/img/lampiran/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('lampiran1')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {

                $new_lampiran1 = $this->upload->data('file_name');
                $data = [
                    'id_rak' => $this->input->post('id_rak'),
                    'id_pengguna' => $this->input->post('id_pengguna'),
                    'pengajuan' => $this->input->post('pengajuan'),
                    'lampiran1' => $new_lampiran1,
                    // 'lampiran2' => $new_lampiran1,
                    // 'lampiran3' => $new_lampiran1,
                    // 'lampiran4' => $new_lampiran1
                ];

                $this->db->insert('p_lampiran', $data);
            }
        }
    }
    public function lampiran2()
    {
        $logo1 = $_FILES['lampiran2']['name'];

        if ($logo1) {
            $config['upload_path']          = './assets/img/lampiran/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('lampiran2')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {
                $id = $this->input->post('id_rak');
                $new_logo2 = $this->upload->data('file_name');
                $this->db->set('lampiran2', $new_logo2);
                $this->db->where('id_rak', $id);
                $this->db->update('p_lampiran');
            }
        }
    }
    public function lampiran3()
    {
        $logo1 = $_FILES['lampiran3']['name'];

        if ($logo1) {
            $config['upload_path']          = './assets/img/lampiran/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('lampiran3')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {
                $id = $this->input->post('id_rak');
                $new_logo3 = $this->upload->data('file_name');
                $this->db->set('lampiran3', $new_logo3);
                $this->db->where('id_rak', $id);
                $this->db->update('p_lampiran');
            }
        }
    }
    public function lampiran4()
    {
        $logo1 = $_FILES['lampiran4']['name'];

        if ($logo1) {
            $config['upload_path']          = './assets/img/lampiran/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('lampiran4')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {
                $id = $this->input->post('id_rak');
                $new_logo4 = $this->upload->data('file_name');
                $this->db->set('lampiran4', $new_logo4);
                $this->db->where('id_rak', $id);
                $this->db->update('p_lampiran');
            }
        }
    }
    public function pengajuan()
    {
        $data = [
            'pengajuan' => $this->input->post('pengajuan'),
            'id_ormawa' => $this->input->post('id_ormawa'),
            'id_rak' => $this->input->post('id_rak'),
            'periode' => $this->input->post('periode'),
        ];
        $this->db->insert('acc', $data);
    }
    public function berita()
    {
        $data = [
            'author' => $this->input->post('author'),
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi')
        ];
        $this->db->where('author', 'Kemahasiswaan');
        $this->db->update('artikel', $data);
    }
    public function tampilberita()
    {
        return $this->db->get_where('artikel', ['author' => 'kemahasiswaan'])->row_array();
    }
    public function tampil_revisi()
    {
        $pengguna = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();
        $p = $pengguna['nama'];

        $r = "SELECT * FROM artikel JOIN pengguna ON author = '$p' where `status`='Revisi'";
        return $this->db->query($r)->row_array();

        // var_dump($r);
        // die;
        // return $this->db->get_where('artikel', ['status' => 'Revisi'])->row_array();
        // return $this->db->get_where('artikel', ['author' => $p])->row_array();
    }
    public function tampil_revisi_kegiatan()
    {

        $r = "SELECT * FROM acc  where `status`='Revisi Kemahasiswaan' or `status`='Revisi Biro Akademik' or `status`='Revisi Ka Prodi' or `status`='Revisi BEM'  ";
        return $this->db->query($r)->row_array();

        // var_dump($r);
        // die;
        // return $this->db->get_where('artikel', ['status' => 'Revisi'])->row_array();
        // return $this->db->get_where('artikel', ['author' => $p])->row_array();
    }
    public function tampil_artikel_komentar($id)
    {

        return $this->db->get_where('artikel', ['id_artikel' => $id])->row_array();

        // var_dump($r);
        // die;
    }
    public function tampil_artikleById($id)
    {
        $tampil = "SELECT * FROM artikel WHERE id_artikel = $id";
        return $this->db->query($tampil)->row_array();
    }

    public function pendahuluan($id)
    {
        return $this->db->get_where('p_proposal', ['id_rak' => $id])->row_array();
    }
    public function revisi_pendahuluan($id)
    {
        $proposal = "SELECT * from p_proposal JOIN acc ON p_proposal.id_rak = acc.id_rak JOIN p_rak ON p_rak.id = p_proposal.id_rak WHERE acc.id = $id  ";
        return $this->db->query($proposal)->row_array();
        // var_dump($n);
        // die;
    }
    public function sandi()
    {
        $pengguna = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();
        $pengguna = $pengguna['id'];

        $sandi = password_hash($this->input->post('sandi'), PASSWORD_DEFAULT);
        $this->db->where('id', $pengguna);
        $this->db->update('pengguna', $sandi);
    }
    public function tampil_rak()
    {
        $date = date('Y');

        $rak = "SELECT *, pengguna.nama from p_rak JOIN pengguna ON p_rak.id_pengguna = pengguna.id WHERE periode = $date ORDER BY waktu  ";
        return $this->db->query($rak)->result_array();
    }
    public function edit_pendahuluan()
    {
        $id_rak = $this->input->post('id_rak');
        $pengajuan = $this->input->post('pengajuan');
        $latar_belakang = $this->input->post('latar_belakang');
        $tema_kegiatan = $this->input->post('tema_kegiatan');
        $tujuan_pelaksanaan = $this->input->post('tujuan_pelaksanaan');
        $sasaran_peserta = $this->input->post('sasaran_peserta');
        $jam_pelaksanaan = $this->input->post('jam_pelaksanaan');
        $pelaksanaan_selesai = $this->input->post('pelaksanaan_selesai');
        $tempat = $this->input->post('tempat');

        $this->db->set('pengajuan', $pengajuan);
        $this->db->set('latar_belakang', $latar_belakang);
        $this->db->set('tema_kegiatan', $tema_kegiatan);
        $this->db->set('tujuan_pelaksanaan', $tujuan_pelaksanaan);
        $this->db->set('sasaran_peserta', $sasaran_peserta);
        $this->db->set('jam_pelaksanaan', $jam_pelaksanaan);
        $this->db->set('pelaksanaan_selesai', $pelaksanaan_selesai);
        $this->db->set('tempat', $tempat);
        $this->db->where('id_rak', $id_rak);
        $this->db->update('p_proposal');
    }
    public function edit_acc()
    {
        $id = $this->input->post('id');
        $status = "Perbaikan";

        $this->db->set('status', $status);
        $this->db->where('id', $id);
        $this->db->update('acc');
    }
}
