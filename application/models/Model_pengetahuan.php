<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_pengetahuan extends CI_Model
{
    private $_table = "tb_pengetahuan";

    public $id_pengetahuan;
    public $id_hamapenyakit;
    public $id_gejala;
    public $probabilitas;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pengetahuan" => $id])->row();
    }

    public function getSome($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start)->result();
    }

    public function hitung_jumlah_pengetahuan()
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
        $this->id_hamapenyakit = $post["hp"];
        $this->id_gejala = $post["gj"];
        $this->probabilitas = $post["prb"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pengetahuan" => $id));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pengetahuan = $post["id"];
        $this->id_hamapenyakit = $post["hp"];
        $this->id_gejala = $post["gj"];
        $this->probabilitas = $post["prb"];
        return $this->db->update($this->_table, $this, array('id_pengetahuan' => $post['id']));
    }

    public function selectGj($id)
    {
        $query = "SELECT 'tb_gejala'.'gejala' FROM 'tb_gejala' WHERE 'id_gejala' = $id";
        return $this->db->query($query)->result_array();
    }
}
