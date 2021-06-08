<?php

class acc_model extends CI_Model
{
    public function getPengajuan()
    {
        return $this->db->get('p_proposal')->result_array();
    }
}
