<?php

class acc_model extends CI_Model
{
    public function accKemahasiswaan()
    {
        $join = "SELECT *,pengguna.nama,acc.id FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.acc =3"; // 3 = berdasarkan level dpm
        return $this->db->query($join)->result_array();
    }
    public function accbiro()
    {
        $join = "SELECT *,pengguna.nama,acc.id FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.acc =1"; // 1 = berdasarkan level kemahasiswaan
        return $this->db->query($join)->result_array();
    }
    public function accdpm()
    {
        $join = "SELECT *,pengguna.nama,acc.id FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.acc='RAK'";
        return $this->db->query($join)->result_array();
    }
    public function accbem()
    {
        $join = "SELECT *,pengguna.nama FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa";
        return $this->db->query($join)->result_array();
    }
    public function accbemHMJ()
    {
        $join = "SELECT *,pengguna.nama FROM pengguna JOIN acc ON pengguna.id = acc.id_ormawa WHERE acc.acc =6"; // 6 = berdasarkan level kaprodi
        return $this->db->query($join)->result_array();
    }
    public function getaccbyid($id)
    {
        $query = "SELECT *,acc.id FROM p_rak JOIN acc ON p_rak.id_pengguna = acc.id_ormawa
        WHERE acc.id = $id";

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
        return $this->db->get('acc', ['id' => $id])->row_array();;
    }
}
