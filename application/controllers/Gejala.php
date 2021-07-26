<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('model_pertanyaan');
    }

    public  function index()
    {
        $data['pertanyaan'] = $this->model_pertanyaan->getRandom();
        $data['pertanyaan'] = $this->model_pertanyaan->get4();
        $data['title'] = 'Konsul Hama dan Penyakit';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // var_dump($data);
        // die;
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('gejala/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function pertanyaan()
    {
        // $interview = $this->model_interview;

        // $config['base_url'] = 'http://localhost/SPBuahNaga/gejala/pertanyaan';
        // $config['total_rows'] = $this->model_pertanyaan->hitung_jumlah_pertanyaan();
        // $config['per_page'] = '1';

        // $config['full_tag_open'] = '<nav><ul class="pagination pagination-sm justify-content-center">';
        // $config['full_tag_close'] = '</ul></nav>';

        // $config['first_link'] = 'First';
        // $config['first_tag_open'] = '<li class="page-item">';
        // $config['first_tag_close'] = '</li>';

        // $config['last_link'] = 'Last';
        // $config['last_tag_open'] = '<li class="page-item">';
        // $config['last_tag_close'] = '</li>';

        // $config['next_link'] = '&raquo';
        // $config['next_tag_open'] = '<li class="page-item">';
        // $config['next_tag_close'] = '</li>';

        // $config['prev_link'] = '&laquo';
        // $config['prev_tag_open'] = '<li class="page-item">';
        // $config['prev_tag_close'] = '</li>';

        // $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        // $config['cur_tag_close'] = '</a></li>';

        // $config['num_tag_open'] = '<li class="page-item">';
        // $config['num_tag_close'] = '</li>';

        // $config['attributes'] = array('class' => 'page-link');

        // $this->pagination->initialize($config);
        // $data['start'] = $this->uri->segment(3);
        // $data['pertanyaan'] = $this->model_pertanyaan->getPertanyaan($config['per_page'], $data['start']);
        $data['pertanyaan'] = $this->model_pertanyaan->getRandom();
        $data['title'] = 'Konsul Hama dan Penyakit';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // var_dump($data);
        // die;
        $this->form_validation->set_rules('radio', 'Pilihan', 'required', [
            'required' => 'Harap pilih salah satu'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('gejala/gejala1', $data);
            $this->load->view('template/footer', $data);
        } else {
        }
    }
}
