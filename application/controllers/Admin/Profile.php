<?php

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Profil Saya';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('template/footer', $data);
    }

    public function editprof()
    {
        $data['title'] = 'Edit Profil';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Fullname', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/editprof', $data);
            $this->load->view('template/footer', $data);
        } else {
            $name = $this->input->post('name');
            $email = $this->session->userdata('email');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png';
                $config['max_size']         = '2048';
                $config['upload_path']     = './assets/img/userimage/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['foto_user'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/userimage/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->where('email', $email);
                    $qq = $this->db->update('tb_user', array('foto_user' => $new_image));
                    if ($qq) {
                        echo $email;
                    } else {
                        $err = $this->db->error();
                        echo $err['message'];
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('admin/profile');
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('tb_user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
            redirect('admin/profile');
        }
    }

    public function editpass()
    {
        $data['title'] = 'Edit Password';
        $data['copyright'] = 'Politeknik Negeri Jember 2022';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules('password_baru', 'Password Baru', 'required|trim|min_length[8]|matches[konfirm_pass]', [
            'matches' => 'Password tidak Sama!',
            'min_length' => 'Password tidak boleh kurang dari 8 karakter!'
        ]);
        $this->form_validation->set_rules('konfirm_pass', 'Konfirmasi Password Baru', 'required|trim|min_length[8]|matches[password_baru]', [
            'matches' => 'Password tidak Sama!',
            'min_length' => 'Password tidak boleh kurang dari 8 karakter!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/editpass', $data);
            $this->load->view('template/footer', $data);
        } else {
            $current_password = $this->input->post('password_lama');
            $new_password = $this->input->post('password_baru');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password lama Salah!</div>');
                redirect('admin/profile/editpass');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password baru tidak boleh sama dengan Password lama!</div>');
                    redirect('admin/profile/editpass');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('tb_user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil diganti!</div>');
                    redirect('admin/profile/editpass');
                }
            }
        }
    }
}
