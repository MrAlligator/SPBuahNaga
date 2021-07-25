<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_gejala extends CI_Model
{
    private $_table = "tb_gejala";

    public $id_gejala;
    public $kode_gejala;
    public $gejala;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_gejala" => $id])->row();
    }

    public function getSome($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start)->result();
    }

    public function hitung_jumlah_gejala()
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
        $this->kode_gejala = $post["kd"];
        $this->gejala = $post["gejala"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_gejala" => $id));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_gejala = $post["id"];
        $this->kode_gejala = $post["kd"];
        $this->gejala = $post["gejala"];
        return $this->db->update($this->_table, $this, array('id_gejala' => $post['id']));
    }
}
