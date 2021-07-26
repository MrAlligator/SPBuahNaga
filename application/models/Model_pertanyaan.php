<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_pertanyaan extends CI_Model
{
    private $_table = "tb_pertanyaan";
    private $_table2 = "tmp_random";

    public $id_pertanyaan;
    public $pertanyaan;
    public $opsi1;
    public $opsi2;
    public $opsi3;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function get4()
    {
        return $this->db->get($this->_table, ["id_pertanyaan" => "4"])->result();
    }

    public function getRandom()
    {
        $this->db->limit(10, 0);
        $this->db->order_by("RAND ()");
        return $this->db->get($this->_table)->result();

        // return $this->db->insert($this->_table2, $this);
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
