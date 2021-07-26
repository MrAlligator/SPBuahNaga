<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    private $_table = "tb_user";

    public $id_user;
    public $name;
    public $email;
    public $foto_user;
    public $password;
    public $role_id;
    public $is_active;
    public $date_created;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function getSome($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start)->result();
    }

    public function hitung_jumlah_user()
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
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->foto_user = $post["foto"];
        $this->password = password_hash($post["password"], PASSWORD_DEFAULT);
        $this->role_id = $post["hak"];
        $this->is_active = 1;
        $this->date_created = time();
        return $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }
}
