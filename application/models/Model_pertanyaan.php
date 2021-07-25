<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_pertanyaan extends CI_Model
{
    private $_table = "tb_pertanyaan";

    public $id_pertanyaan;
    public $pertanyaan;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getPertanyaan($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start)->result();
    }

    public function hitung_jumlah_pertanyaan()
    {
        $query = $this->db->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
