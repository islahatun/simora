<?php

class acc_model extends CI_Model
{
    public function accKemahasiswaan()
    {
        $join = "SELECT *,pengguna.nama FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.persetujuan =3"; // 3 = berdasarkan level dpm
        return $this->db->query($join)->result_array();
    }
    public function accbiro()
    {
        $join = "SELECT *,pengguna.nama FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.persetujuan =1"; // 1 = berdasarkan level kemahasiswaan
        return $this->db->query($join)->result_array();
    }
    public function accdpm()
    {
        $join = "SELECT *,pengguna.nama FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.pengajuan='RAK'";
        return $this->db->query($join)->result_array();
    }
    public function detailaccDPM()
    {
        $data = [
            'id' => $this->db->input->post('id'),
            'persetujuan' => $this->db->input->post('persetujuan'),
            'status' => $this->db->post('status'),
            'revisi' => $this->db->post('revisi')
        ];
        $this->db->update('acc', $data);
    }
    public function accbem()
    {
        $join = "SELECT *,pengguna.nama FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa";
        return $this->db->query($join)->result_array();
    }
    public function accbemHMJ()
    {
        $join = "SELECT *,pengguna.nama FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.persetujuan =6"; // 6 = berdasarkan level kaprodi
        return $this->db->query($join)->result_array();
    }
    public function getaccbyid($id)
    {
        $query = "SELECT * FROM p_rak JOIN acc ON p_rak.id_pengguna = acc.id_ormawa
        WHERE acc.id = $id";
        return $this->db->query($query)->result_array();
    }
}
