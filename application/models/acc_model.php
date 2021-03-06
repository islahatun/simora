<?php

class acc_model extends CI_Model
{
    public function accKemahasiswaan()
    {
        $join = "SELECT *,pengguna.nama,acc.id FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.acc =1 or acc.acc=2 or acc.acc=3 OR acc.acc=7 and acc.status='Acc BEM' or acc.status='Acc Kemahasiswaan' or acc.status='Revisi Biro Akademik' or acc.status='Perbaikan' or acc.status='Acc Biro Akademik'and  acc.status='Acc Kemahasiswaan' or acc.status='Revisi Biro Akademik' or acc.status='Perbaikan' or acc.status='Acc Biro Akademik' ORDER BY acc.id desc"; // 3 = berdasarkan level dpm
        return $this->db->query($join)->result_array();
    }
    public function accbiro()
    {
        $join = "SELECT *,pengguna.nama,acc.id FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.acc =1 or acc.acc =2 and  acc.status='Acc Kemahasiswaan' or acc.status='Revisi Biro Akademik' or acc.status='Perbaikan' or acc.status='Acc Biro Akademik'  and  acc.pengajuan ='proposal' or acc.pengajuan ='lpj'   ORDER BY acc.id desc"; // 1 = berdasarkan level kemahasiswaan
        return $this->db->query($join)->result_array();
        // var_dump($n);
        // die;
    }
    public function acckaprodiTI()
    {
        $join = "SELECT *,pengguna.nama,pengguna.level_id,acc.id FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE  acc.id_ormawa = 8   ORDER BY acc.id desc"; // 1 = berdasarkan level kemahasiswaan
        return $this->db->query($join)->result_array();
        // var_dump($n);
        // die;
    }
    public function acckaprodiSI()
    {
        $join = "SELECT *,pengguna.nama,pengguna.level_id,acc.id FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa  WHERE acc.id_ormawa = 9   ORDER BY acc.id desc";
        return $this->db->query($join)->result_array();
        // var_dump($n);
        // die;
    }
    public function acckaprodiPBI()
    {
        $join = "SELECT *,pengguna.nama,pengguna.level_id,acc.id FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE  acc.id_ormawa = 10    ORDER BY acc.id desc";
        return $this->db->query($join)->result_array();
        // var_dump($n);
        // die;
    }
    // public function acckaprodiAKUTANSI()
    // {
    //     $join = "SELECT *,pengguna.nama,pengguna.level_id,acc.id FROM pengguna JOIN acc ON pengguna.id = 23 WHERE  acc.id_ormawa = 23 AND pengguna.level_id = 5 and acc.status='Acc Kemahasiswaan' or acc.status='Revisi Biro Akademik' or acc.status='Acc Biro Akademik'or acc.status='Revisi Kaprodi' and  acc.pengajuan ='proposal' or acc.pengajuan ='lpj'  or acc.status='Perbaikan'   ORDER BY acc.id desc"; // 1 = berdasarkan level kemahasiswaan
    //     return $this->db->query($join)->result_array();
    //     // var_dump($n);
    //     // die;
    // }
    // public function acckaprodiPPKN()
    // {
    //     $join = "SELECT *,pengguna.nama,pengguna.level_id,acc.id FROM pengguna JOIN acc ON pengguna.id = 2 WHERE  acc.id_ormawa = 2 AND pengguna.level_id = 5 and acc.status='Acc Kemahasiswaan' or acc.status='Revisi Biro Akademik' or acc.status='Acc Biro Akademik'or acc.status='Revisi Kaprodi' and  acc.pengajuan ='proposal' or acc.pengajuan ='lpj'  or acc.status='Perbaikan'   ORDER BY acc.id desc"; // 1 = berdasarkan level kemahasiswaan
    //     return $this->db->query($join)->result_array();
    //     // var_dump($n);
    //     // die;
    // }
    // public function acckaprodiTeknik_I()
    // {
    //     $join = "SELECT *,pengguna.nama,pengguna.level_id,acc.id FROM pengguna JOIN acc ON pengguna.id = 4 WHERE  acc.id_ormawa = 4 AND pengguna.level_id = 5 and acc.status='Acc Kemahasiswaan' or acc.status='Revisi Biro Akademik' or acc.status='Acc Biro Akademik'or acc.status='Revisi Kaprodi' and  acc.pengajuan ='proposal' or acc.pengajuan ='lpj'  or acc.status='Perbaikan'   ORDER BY acc.id desc"; // 1 = berdasarkan level kemahasiswaan
    //     return $this->db->query($join)->result_array();
    //     // var_dump($n);
    //     // die;
    // }
    public function accdpm()
    {
        $join = "SELECT *,pengguna.nama,acc.id FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.pengajuan ='RAK' ORDER BY acc.id desc";
        return $this->db->query($join)->result_array();
    }
    public function accbem()
    {
        $join = "SELECT *,pengguna.nama,acc.id FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.pengajuan ='proposal' or acc.pengajuan ='LPJ'  ORDER BY acc.id desc";
        return $this->db->query($join)->result_array();
    }
    public function accbemHMJ()
    {
        $join = "SELECT *,pengguna.nama FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.acc =6 and acc.pengajuan ='proposal' OR acc.pengajuan ='lpj' or acc.status='Perbaikan'  ORDER BY acc.id desc"; // 6 = berdasarkan level kaprodi
        return $this->db->query($join)->result_array();
    }
    public function getaccbyid($id)
    {
        $periode = date('Y');
        $query = "SELECT *,acc.id FROM p_rak JOIN acc ON p_rak.id_pengguna = acc.id_ormawa
        WHERE acc.id = $id and p_rak.periode = $periode ";

        return $this->db->query($query)->result_array();
    }

    public function tampilnama($id)
    {
        $join = "SELECT *,pengguna.nama FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.id=$id";
        return $this->db->query($join)->row_array();
    }
    public function detailacc($id)
    {

        $acc = $this->input->post('acc');
        $status = $this->input->post('status');
        $komentar = $this->input->post('komentar');

        $this->db->set('acc', $acc);
        $this->db->set('status', $status);
        $this->db->set('komentar', $komentar);
        $this->db->where('id', $id);
        $this->db->update('acc');
    }
    public function getidacc($id)
    {
        return $this->db->get_where('acc', ['id' => $id])->row_array();;
    }
    public function artikel()
    {
        $this->db->order_by('author', 'desc');
        $query = $this->db->get('artikel');
        return $query->result_array();
        // return $this->db->get('artikel')->result_array();
    }
    public function artikelById($id)
    {
        return $this->db->get_where('artikel', ['id_artikel' => $id])->row_array();
    }
    public function accartikel($id)
    {
        $data = [
            'komentar' => htmlspecialchars($this->input->post('komentar')),
            'status' => $this->input->post('status')
        ];
        //    $komentar = $this->input->post('komentar');
        //    $this->db->set('komentar',$komentar);
        $this->db->where('id_artikel', $id);
        $this->db->update('artikel', $data);
    }
    public function tampilartikel()
    {
        $t = "SELECT * FROM artikel WHERE `status`='Acc' ORDER BY id_artikel DESC ";
        return $this->db->query($t)->result_array();
    }
    public function detail_pendahuluan1($id)
    {
        $proposal = "SELECT * from p_proposal JOIN acc ON p_proposal.id_rak = acc.id_rak JOIN p_rak ON p_rak.id = p_proposal.id_rak WHERE acc.id = $id  ";
        return $this->db->query($proposal)->result_array();
    }
    public function detail_pendahuluan_proposal($id)
    {
        $proposal = "SELECT * from p_proposal JOIN acc ON p_proposal.id_rak = acc.id_rak JOIN p_rak ON p_rak.id = p_proposal.id_rak WHERE acc.id = $id and p_proposal.pengajuan ='proposal' ";
        return $this->db->query($proposal)->result_array();
    }
    public function detail_pendahuluan($id)
    {
        $r = "SELECT * FROM acc  where `status`='Revisi Kemahasiswaan' or `status`='Revisi Biro Akademik' or `status`='Revisi Ka Prodi' or `status`='Revisi BEM'  ";
        $n = $this->db->query($r)->row_array();
        $p = $n['pengajuan'];

        $proposal = "SELECT * from p_proposal JOIN acc ON p_proposal.id_rak = acc.id_rak JOIN p_rak ON p_rak.id = p_proposal.id_rak WHERE acc.id = $id and p_proposal.pengajuan='$p' ";
        return $this->db->query($proposal)->result_array();
    }
    public function detail_pendahuluan_lpj($id)
    {
        $proposal = "SELECT * from p_proposal JOIN acc ON p_proposal.id_rak = acc.id_rak JOIN p_rak ON p_rak.id = p_proposal.id_rak WHERE acc.id = $id and p_proposal.pengajuan='LPJ' ";
        return $this->db->query($proposal)->result_array();
    }
    public function detail_panitia($id)
    {

        $proposal = "SELECT * from p_panitia JOIN acc ON p_panitia.id_rak = acc.id_rak WHERE acc.id = $id ";
        return $this->db->query($proposal)->result_array();
    }
    public function detail_anggaran1($id)
    {

        $proposal = "SELECT * from p_anggaran JOIN acc ON p_anggaran.id_rak = acc.id_rak WHERE acc.id = $id ";
        return $this->db->query($proposal)->result_array();
    }
    public function detail_anggaran($id)
    {
        $r = "SELECT * FROM acc  where `status`='Revisi Kemahasiswaan' or `status`='Revisi Biro Akademik' or `status`='Revisi Ka Prodi' or `status`='Revisi BEM'  ";
        $n = $this->db->query($r)->row_array();
        $p = $n['pengajuan'];

        $proposal = "SELECT * from p_anggaran JOIN acc ON p_anggaran.id_rak = acc.id_rak WHERE acc.id = $id and p_anggaran.pengajuan='$p' ";
        return $this->db->query($proposal)->result_array();
    }
    public function detail_anggaran_lpj($id)
    {
        $r = "SELECT * FROM acc  where `status`='Revisi Kemahasiswaan' or `status`='Revisi Biro Akademik' or `status`='Revisi Ka Prodi' or `status`='Revisi BEM'  ";
        $n = $this->db->query($r)->row_array();
        $p = $n['pengajuan'];

        $proposal = "SELECT * from p_anggaran JOIN acc ON p_anggaran.id_rak = acc.id_rak WHERE acc.id = $id and p_anggaran.pengajuan='lpj' ";
        return $this->db->query($proposal)->result_array();
    }
    public function detail_jadwal1($id)
    {

        $proposal = "SELECT * from p_jadwal JOIN acc ON p_jadwal.id_rak = acc.id_rak WHERE acc.id = $id ";
        return $this->db->query($proposal)->result_array();
    }
    public function detail_jadwal($id)
    {
        $r = "SELECT * FROM acc  where `status`='Revisi Kemahasiswaan' or `status`='Revisi Biro Akademik' or `status`='Revisi Ka Prodi' or `status`='Revisi BEM'  ";
        $n = $this->db->query($r)->row_array();
        $p = $n['pengajuan'];

        $proposal = "SELECT * from p_jadwal JOIN acc ON p_jadwal.id_rak = acc.id_rak WHERE acc.id = $id and p_jadwal.pengajuan='$p'";
        return $this->db->query($proposal)->result_array();
    }
    public function detail_jadwal_lpj($id)
    {
        $proposal = "SELECT * from p_jadwal JOIN acc ON p_jadwal.id_rak = acc.id_rak WHERE acc.id = $id and p_jadwal.pengajuan='lpj'";
        return $this->db->query($proposal)->result_array();
    }
    public function detail_lampiran($id)
    {
        $proposal = "SELECT *, acc.id from p_lampiran JOIN acc ON p_lampiran.id_rak = acc.id_rak WHERE acc.id = $id";
        return $this->db->query($proposal)->row_array();
    }
    public function tampil_proposal_acc()
    {
        //menampilkan proposal berdasarkan pengguna
        $p = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();
        $id = $p['id'];
        $proposal = "SELECT id,pengajuan,periode from  acc  WHERE id_ormawa = $id and `status` ='Acc Biro Akademik' ";
        return $this->db->query($proposal)->result_array();
    }
    public function tampil_rak_acc()
    {
        //menampilkan proposal berdasarkan pengguna
        $p = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();
        $id = $p['id'];
        $RAK = "SELECT id,pengajuan,periode from  acc  WHERE id_ormawa = $id and `status` ='Acc Kemahasiswaan' and pengajuan ='RAK' ";
        return $this->db->query($RAK)->result_array();
    }
    public function disable_button_rak()
    {
        $p = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();
        $id = $p['id'];

        return $this->db->get_where('acc', ['id_ormawa' => $id])->row_array();
    }
    public function disable_button_download()
    {
        return $this->db->get_where('acc')->result_array();
    }
}
