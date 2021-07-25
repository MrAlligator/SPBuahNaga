<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("pagination");
        $this->load->library("form_validation");
        $this->load->model("model_hamapenyakit");
        $this->load->model("model_gejala");
        $this->load->model("model_pengetahuan");
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jumlahhama'] = $this->model_hamapenyakit->hitung_jumlah_hama();
        // var_dump($data);
        // die;
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function hamapenyakit()
    {
        $data['title'] = 'Data Hama dan Penyakit';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hama'] = $this->model_hamapenyakit->getAll();
        $data['jumlahhama'] = $this->model_hamapenyakit->hitung_jumlah_hama();
        // var_dump($data);
        // die;
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/data/hamapenyakit', $data);
        $this->load->view('template/footer', $data);
    }

    public function gejala()
    {
        //PAGINATION
        //Config
        $config['base_url'] = 'http://localhost/siskar_buahnaga/admin/home/gejala';
        $config['total_rows'] = $this->model_gejala->hitung_jumlah_gejala();
        $config['per_page'] = '7';

        //Styling
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-sm justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //Initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(4);
        $data['gejala'] = $this->model_gejala->getSome($config['per_page'], $data['start']);
        $data['title'] = 'Data Gejala';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['gejala'] = $this->model_gejala->getAll();
        // var_dump($data);
        // die;
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/data/gejala', $data);
        $this->load->view('template/footer', $data);
    }

    public function pengetahuan()
    {
        //PAGINATION
        //Config
        $config['base_url'] = 'http://localhost/siskar_buahnaga/admin/home/pengetahuan';
        $config['total_rows'] = $this->model_pengetahuan->hitung_jumlah_pengetahuan();
        $config['per_page'] = '10';

        //Styling
        $config['full_tag_open'] = '<nav><ul class="pagination pagination-sm justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //Initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(4);
        $data['pengetahuan'] = $this->model_pengetahuan->getSome($config['per_page'], $data['start']);
        $data['title'] = 'Data Pengetahuan';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['gejala'] = $this->model_gejala->getAll();
        // var_dump($data);
        // die;
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/data/pengetahuan', $data);
        $this->load->view('template/footer', $data);
    }

    public function tambah_hp()
    {
        $data['title'] = 'Data Hama dan Penyakit';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hama'] = $this->model_hamapenyakit->getAll();
        $data['jumlahhama'] = $this->model_hamapenyakit->hitung_jumlah_hama();
        $hamapenyakit = $this->model_hamapenyakit;
        // var_dump($data);
        // die;
        $this->form_validation->set_rules('nama', 'Nama Hama / Penyakit', 'required|trim', [
            'required' => 'Nama Hama / Penyakit tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/data/+hamapenyakit', $data);
            $this->load->view('template/footer', $data);
        } else {
            if ($hamapenyakit->save() == true) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
                redirect("admin/home/hamapenyakit");
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>');
                redirect("admin/home/tambah_hp");
            }
        }
    }

    public function edithp($id = null)
    {
        //if (!isset($id)) redirect('admin/admin/produk');
        $data['title'] = 'Data Hama dan Penyakit';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hpid'] = $this->model_hamapenyakit->getById($id);
        $data['jumlahhama'] = $this->model_hamapenyakit->hitung_jumlah_hama();
        $hamapenyakit = $this->model_hamapenyakit;
        //if (!$data["produk"]) show_404();
        $this->form_validation->set_rules('nama', 'Nama Hama / Penyakit', 'required|trim', [
            'required' => 'Nama Hama / Penyakit tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/data/edithamapenyakit', $data);
            $this->load->view('template/footer', $data);
        } else {
            if ($hamapenyakit->update() == true) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
                redirect("admin/home/hamapenyakit");
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diubah</div>');
                redirect("admin/home/edithp/", $data);
            }
        }
    }

    public function deletehp($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->model_hamapenyakit->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('admin/home/hamapenyakit'));
        }
    }

    public function tambah_gj()
    {
        $data['title'] = 'Data Gejala';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['gejala'] = $this->model_gejala->getAll();
        $data['jumlahgejala'] = $this->model_gejala->hitung_jumlah_gejala();
        $gejala = $this->model_gejala;
        // var_dump($data);
        // die;
        $this->form_validation->set_rules('gejala', 'Gejala', 'required|trim', [
            'required' => 'Gejala tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/data/+gejala', $data);
            $this->load->view('template/footer', $data);
        } else {
            if ($gejala->save() == true) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
                redirect("admin/home/gejala");
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>');
                redirect("admin/home/tambah_gj");
            }
        }
    }

    public function editgj($id = null)
    {
        $data['title'] = 'Data Gejala';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['gjid'] = $this->model_gejala->getById($id);
        $data['jumlahgejala'] = $this->model_gejala->hitung_jumlah_gejala();
        $gejala = $this->model_gejala;
        // var_dump($data);
        // die;
        $this->form_validation->set_rules('gejala', 'Gejala', 'required|trim', [
            'required' => 'Gejala tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/data/editgejala', $data);
            $this->load->view('template/footer', $data);
        } else {
            if ($gejala->update() == true) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
                redirect("admin/home/gejala");
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diubah</div>');
                redirect("admin/home/editgj");
            }
        }
    }

    public function deletegj($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->model_gejala->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('admin/home/gejala'));
        }
    }

    public function tambah_prb()
    {
        $data['title'] = 'Data Probabilitas';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hamapenyakit'] = $this->model_hamapenyakit->getAll();
        $data['gejala'] = $this->model_gejala->getAll();
        $data['pengetahuan'] = $this->model_pengetahuan->getAll();
        $pengetahuan = $this->model_pengetahuan;
        // var_dump($data);
        // die;
        $this->form_validation->set_rules('prb', 'Probabilitas', 'required|trim', [
            'required' => 'Probabilitas tidak boleh kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/data/+pengetahuan', $data);
            $this->load->view('template/footer', $data);
        } else {
            if ($pengetahuan->save() == true) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
                redirect("admin/home/pengetahuan");
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal ditambahkan</div>');
                redirect("admin/home/tambahprb");
            }
        }
    }

    public function editprb($id = null)
    {
        $data['title'] = 'Data Gejala';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prbid'] = $this->model_pengetahuan->getById($id);
        $data['hamapenyakit'] = $this->model_hamapenyakit->getAll();
        $data['gejala'] = $this->model_gejala->getAll();
        $data['pengetahuan'] = $this->model_pengetahuan->getAll();
        $data['jumlahprb'] = $this->model_pengetahuan->hitung_jumlah_pengetahuan();
        $prob = $this->model_pengetahuan;
        // var_dump($data);
        // die;
        // $this->form_validation->set_rules('gejala', 'Gejala', 'required|trim', [
        //     'required' => 'Gejala tidak boleh kosong'
        // ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/data/editprob', $data);
            $this->load->view('template/footer', $data);
        } else {
            if ($prob->update() == true) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
                redirect("admin/home/pengetahuan");
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diubah</div>');
                redirect("admin/home/editprb");
            }
        }
    }

    public function deleteprb($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->model_pengetahuan->delete($id)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
            redirect(site_url('admin/home/pengetahuan'));
        }
    }
}
