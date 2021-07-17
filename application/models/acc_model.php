<?php

class acc_model extends CI_Model
{
    public function accKemahasiswaan()
    {
        $join = "SELECT *,pengguna.nama,acc.id FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.acc =1 or acc.acc=2 or acc.acc=3 OR acc.acc=7  ORDER BY acc.id desc"; // 3 = berdasarkan level dpm
        return $this->db->query($join)->result_array();
    }

    public function accbiro()
    {
        $join = "SELECT *,pengguna.nama,acc.id FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.pengajuan ='proposal' or acc.pengajuan ='lpj' and acc.acc =1 or acc.acc =2  ORDER BY acc.id desc"; // 1 = berdasarkan level kemahasiswaan
        return $this->db->query($join)->result_array();
        // var_dump($n);
        // die;
    }
    public function accdpm()
    {
        $join = "SELECT *,pengguna.nama,acc.id FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.pengajuan ='RAK' ORDER BY acc.id desc";
        return $this->db->query($join)->result_array();
    }
    public function accbem()
    {
        $join = "SELECT *,pengguna.nama FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa  WHERE acc.pengajuan ='proposal' OR acc.pengajuan ='lpj'  ORDER BY acc.id desc";
        return $this->db->query($join)->result_array();
    }
    public function accbemHMJ()
    {
        $join = "SELECT *,pengguna.nama FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.acc =6 and acc.pengajuan ='proposal' OR acc.pengajuan ='lpj'  ORDER BY acc.id desc"; // 6 = berdasarkan level kaprodi
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
    public function detailacc()
    {
        $id = $this->input->post('id');
        $acc = $this->input->post('acc');
        $status = $this->input->post('status');
        $revisi = $this->input->post('revisi');

        $this->db->set('acc', $acc);
        $this->db->set('status', $status);
        $this->db->set('revisi', $revisi);
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
        return $this->db->get_where('artikel', ['status' => 'Acc'])->result_array();
    }
    public function detail_pendahuluan($id)
    {
        $proposal = "SELECT * from p_proposal JOIN acc ON p_proposal.id_rak = acc.id_rak JOIN p_rak ON p_rak.id = p_proposal.id_rak WHERE acc.id = $id and p_proposal.pengajuan='proposal' ";
        return $this->db->query($proposal)->result_array();
    }
    public function detail_panitia($id)
    {
        $proposal = "SELECT * from p_panitia JOIN acc ON p_panitia.id_rak = acc.id_rak WHERE acc.id = $id";
        return $this->db->query($proposal)->result_array();
    }
    public function detail_anggaran($id)
    {
        $proposal = "SELECT * from p_anggaran JOIN acc ON p_anggaran.id_rak = acc.id_rak WHERE acc.id = $id and p_anggaran.pengajuan='proposal'";
        return $this->db->query($proposal)->result_array();
    }
    public function detail_jadwal($id)
    {
        $proposal = "SELECT * from p_jadwal JOIN acc ON p_jadwal.id_rak = acc.id_rak WHERE acc.id = $id and p_jadwal.pengajuan='proposal'";
        return $this->db->query($proposal)->result_array();
    }
    public function detail_lampiran($id)
    {
        $proposal = "SELECT * from p_lampiran JOIN acc ON p_lampiran.id_rak = acc.id_rak WHERE acc.id = $id and p_lampiran.pengajuan='proposal'";
        return $this->db->query($proposal)->result_array();
    }
}
