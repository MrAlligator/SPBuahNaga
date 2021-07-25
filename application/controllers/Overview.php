<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_hamapenyakit");
        $this->load->model("model_gejala");
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hamapenyakit'] = $this->model_hamapenyakit->hitung_jumlah_hama();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('overview', $data);
        $this->load->view('template/footer', $data);
    }

    public function buahnaga()
    {
        $data['title'] = 'Buah Naga';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('buahnaga', $data);
        $this->load->view('template/footer', $data);
    }

    public function sistempakar()
    {
        $data['title'] = 'Sistem Pakar';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('sistempakar', $data);
        $this->load->view('template/footer', $data);
    }

    public function hama()
    {
        $data['title'] = 'Hama Tanaman Buah Naga';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('hama', $data);
        $this->load->view('template/footer', $data);
    }

    public function penyakit()
    {
        $data['title'] = 'Penyakit Tanaman Buah Naga';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('penyakit', $data);
        $this->load->view('template/footer', $data);
    }

    public function about()
    {
        $data['title'] = 'Tentang';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('tentang', $data);
        $this->load->view('template/footer', $data);
    }
}
