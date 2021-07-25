<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_interview extends CI_Model
{
    private $_table = "tb_interview";

    public $id_interview;
    public $id_identitas;
    public $pertanyaan1;
    public $pertanyaan2;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function hitung_jumlah_interview()
    {
        $query = $this->db->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    // public function svpertanyaan1()
    // {
    //     $post = $this->input->post();
    //     $this->id_identitas = $post["identitas"];
    //     $this->pertanyaan1 = $post["radio"];
    //     return $this->db->insert($this->_table, $this);
    // }
}
