<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
			'valid_email' => 'Email Tidak Valid',
			'required' => 'Email Tidak Boleh Kosong!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'required' => 'Kata Sandi Tidak Boleh Kosong!'
		]);

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Masuk';
			$this->load->view('template/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('template/auth_footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
		// var_dump($user);
		// die;
		//jika user ada
		if ($user) {
			//Jika hak akses admin
			if ($user['role_id'] == 1) {
				//user aktif
				if ($user['is_active'] == 1) {
					//cek pass
					if (password_verify($password, $user['password'])) {
						$data = [
							'email' => $user['email'],
							'id_user' => $user['id_user'],
							'name' => $user['name'],
							'role_id' => $user['role_id']
						];
						$this->session->set_userdata($data);
						// var_dump($data);
						// die;
						redirect('admin/home');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
						redirect('auth');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Diaktifkan</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Bukan Admin</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Terdaftar</div>');
			redirect('auth');
		}
	}

	public function register()
	{
		$this->form_validation->set_rules('name', 'Nama', 'required|trim', [
			'required' => 'Nama Tidak Boleh Kosong!'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
			'is_unique' => 'Email Telah Terdaftar',
			'required' => 'Email Tidak Boleh Kosong!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
			'matches' => 'Kata Sandi tidak Sama!',
			'min_length' => 'Kata Sandi tidak boleh kurang dari 8 karakter!',
			'required' => 'Kata Sandi Tidak Boleh Kosong!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Daftar Akun';
			$this->load->view('template/auth_header', $data);
			$this->load->view('auth/register');
			$this->load->view('template/auth_footer');
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'foto_user' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 1,
				'is_active' => 1,
				'date_created' => time()
			];

			$this->db->insert('tb_user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun berhasil dibuat.</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Sudah Logout</div>');
		redirect('overview');
	}
}
