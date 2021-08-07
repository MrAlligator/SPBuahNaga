<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->model("model_hamapenyakit");
        $this->load->model("model_gejala");
        $this->load->model("model_penilaian");
    }

    public function index()
    {
        $penilaian = $this->model_penilaian;

        $data['title'] = 'Penilaian Pakar';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hamapenyakit'] = $this->model_hamapenyakit->getAll();
        $data['gejala'] = $this->model_gejala->getAll();

        $this->form_validation->set_rules('hama', 'Hama Penyakit', 'required', [
            'required' => 'Harap pilih hama dan penyakit'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('penilaian/input', $data);
            $this->load->view('template/footer', $data);
        } else {
            if ($penilaian->save() == true && $penilaian->sv() == true) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
                redirect("penilaian");
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>');
                redirect("penilaian");
            }
        }
    }
}
