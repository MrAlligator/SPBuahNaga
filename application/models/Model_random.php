<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_random extends CI_Model
{
    private $_table = "tmp_random";

    public $id_random;
    public $id_pertanyaan;
    public $pertanyaan;
    public $opsi1;
    public $opsi2;
    public $opsi3;

    public function kosongTmpRandom()
    {
        return $this->db->truncate($this->_table);
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function hitung_jumlah_random()
    {
        $query = $this->db->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function get1()
    {
        $this->db->select('*');
        $this->db->where('tb_gejala');
        $query = $this->db->get();
        return $query->result();
    }

    public function getOpsi1()
    {
        $this->db->select('*');
        $this->db->from('tb_gejala');
        $this->db->join('tmp_random', 'tb_gejala.id_gejala = tmp_random.opsi1');
        $query = $this->db->get();
        return $query->result();
    }

    public function getOpsi2()
    {
        $this->db->select('*');
        $this->db->from('tb_gejala');
        $this->db->join('tmp_random', 'tb_gejala.id_gejala = tmp_random.opsi2');
        $query = $this->db->get();
        return $query->result();
    }

    public function getOpsi3()
    {
        $this->db->select('*');
        $this->db->from('tb_gejala');
        $this->db->join('tmp_random', 'tb_gejala.id_gejala = tmp_random.opsi3');
        $query = $this->db->get();
        return $query->result();
    }

    public function getRandom($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start)->result();
    }

    public function save()
    {
        $result = array();
        foreach ($_POST['id_per'] as $key => $val) {
            $result[] = array(
                'id_pertanyaan' => $_POST['id_per'][$key],
                'pertanyaan' => $_POST['pertanyaan'][$key],
                'opsi1' => $_POST['o1'][$key],
                'opsi2' => $_POST['o2'][$key],
                'opsi3' => $_POST['o3'][$key]
            );
        }
        $this->db->insert_batch($this->_table, $result);
    }
}
