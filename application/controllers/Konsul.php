<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_identitas');
    }

    public function index()
    {
        $identitas = $this->model_identitas;

        $data['title'] = 'Konsul Hama dan Penyakit';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // var_dump($data);
        // die;
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim', [
            'required' => 'Lokasi tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('hamapenyakit', $data);
            $this->load->view('template/footer', $data);
        } else {
            if ($identitas->save() == true) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
                redirect("gejala/pertanyaan");
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>');
                redirect("konsul");
            }
        }
    }

    // public function register()
    // {
    //     $this->load->view('template/auth_header');
    //     $this->load->view('auth/register');
    //     $this->load->view('template/auth_footer');
    // }
}
