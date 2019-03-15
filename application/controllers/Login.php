<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model','user_model');
		$this->is_logged();
	}

	public function index()
	{
		session_destroy();
		session_unset();
		$this->load->view('login');
	}

	public function auth()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				if (session_getlevel() == 'admin') {
					redirect('admin');
				}else{
					redirect('pegawai/form_kegiatan');
				}
			}else{
				redirect('login');
			}
		}
		else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => sha1(sha1(md5($this->input->post('password'))))
			);

			$result = $this->user_model->auth($data);
			// vdebug($result);
			if ($result == true) {

				// $data_peg = $this->user_model->get_data_peg($result->nip);
				
				$username = $result->username;
				$nip = $result->nip;

				$session_data = array(
					'username' => $username,
					'nip' => $nip,
					'nama' => $result->nama,
					'level' => $result->level,
					'id' => $result->id,
					'data_status' => $result->data_status,
				);

				$this->session->set_userdata('logged_in', $session_data);
				if ($result->pass_status == 0) {
						redirect('login/force_change_password');
					}else{
						if ($result->level == 'admin') {
							redirect('admin');
						}else{
							redirect('pegawai/form_kegiatan');
							
						}
					}
			}
			else {
				$this->session->set_flashdata('message', '<strong><i class="icon-exclamation-triangle"></i> Perhatian!</strong> Invalid Username or Password');
				redirect('login');
			}
		}
	}

	public function logout() {
		session_destroy();
		session_unset();
		redirect('login');
	}

	public function force_change_password(){
		$pass_status = $this->user_model->get_pass_status(session_getnip());
		if ($pass_status == 0) {
			$this->load->view('force_change_password');
		}else{
			if (session_getlevel() == 'admin') {
				redirect('admin');
			}else{
				redirect('pegawai/form_kegiatan');

			}
		}
	}


	function form_tambah_data(){
		$this->load->view('form_tambah_data');
	}


}