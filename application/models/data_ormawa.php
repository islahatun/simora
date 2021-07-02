<?php

class data_ormawa extends CI_Model
{
    public function tampil_artikleById($id)
    {
        $tampil = "SELECT * FROM artikel WHERE id = $id";
        return $this->db->query($tampil)->row();
        var_dump($tampil);
        die;
    }
}
