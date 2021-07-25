<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_hamapenyakit extends CI_Model
{
    private $_table = "tb_hamapenyakit";

    public $id_hamapenyakit;
    public $kode_hamapenyakit;
    public $hamapenyakit;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_hamapenyakit" => $id])->row();
    }

    public function hitung_jumlah_hama()
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
        $this->kode_hamapenyakit = $post["kd"];
        $this->hamapenyakit = $post["nama"];
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_hamapenyakit" => $id));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_hamapenyakit = $post["id"];
        $this->kode_hamapenyakit = $post["kd"];
        $this->hamapenyakit = $post["nama"];
        return $this->db->update($this->_table, $this, array('id_hamapenyakit' => $post['id']));
    }
}
