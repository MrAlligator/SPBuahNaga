<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_penilaian extends CI_Model
{
    private $_table = "tb_gejalapakar";

    public $id_gejalapakar;
    public $hamapenyakit;
    public $gejala;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function save()
    {
        $result = array();
        foreach ($_POST['gjl'] as $key => $val) {
            $result[] = array(
                'gejala' => $_POST['gjl'][$key]
            );
        }
        $this->db->insert_batch($this->_table, $result);
        // $post = $this->input->post();
        // $this->id_hamapenyakit = $post["hp"];
        // return $this->db->insert($this->_table, $this);
    }

    public function sv()
    {
        $post = $this->input->post();
        $this->hamapenyakit = $post["hama"];
        return $this->db->insert($this->_table, $this);
    }
}