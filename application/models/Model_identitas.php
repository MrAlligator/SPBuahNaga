<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_identitas extends CI_Model
{
    private $_table = "tb_identitas";

    public $id_identitas;
    public $nama;
    public $jenis;
    public $lokasi;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function hitung_jumlah_identitas()
    {
        $query = $this->db->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->jenis = $post["jenis"];
        $this->lokasi = $post["lokasi"];
        return $this->db->insert($this->_table, $this);
    }
}
