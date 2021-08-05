<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_pertanyaan extends CI_Model
{
    private $_table = "tb_pertanyaan";
    private $_table2 = "tmp_random";

    public $id_random;
    public $id_pertanyaan;
    public $pertanyaan;
    public $opsi1;
    public $opsi2;
    public $opsi3;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function get()
    {
        $sql = "SELECT * FROM tb_pertanyaan WHERE id_pertanyaan = ?";
        return $this->db->query($sql, (18))->result();
        // return $this->db->get($this->_table)->result();
    }

    public function getRandom()
    {
        $this->db->limit(9, 0);
        $this->db->order_by("RAND ()");
        $this->db->where("id_pertanyaan NOT IN (select id_pertanyaan from tb_pertanyaan where id_pertanyaan = '18')");

        return $this->db->get($this->_table)->result();

        // return $this->db->insert($this->_table2, $this);
    }

    public function getRandom1()
    {
        $this->db->limit(1, 0);
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
