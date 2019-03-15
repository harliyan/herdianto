<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model','user_model');
		// $this->load->model('Gaji_apbn_model','gaji_apbn_model');
		// $this->load->model('Gaji_honor_model','gaji_honor_model');
		// $this->load->model('Gaji_undip_model','gaji_undip_model');
		// $this->load->model('Pegawai_model','pegawai_model');
		// $this->load->model('Unit_konversi_model','unit_konversi_model');
		$this->is_logged();
		$this->is_tambah_data();
		// $this->is_pass_changed();
	}

	public function change_password()
	{
		$new_pass = $this->input->post('password');
		if ($new_pass != '') {
			$data = array(
				'password' => sha1(sha1(md5($new_pass))),
				'pass_status' => 1
			);
			$update_pass = $this->user_model->update_password(session_getnip(),$data);
			// vdebug($data);
			if ($update_pass) {
				$this->session->set_flashdata('message', '<strong><i class="icon-exclamation-triangle"></i> Selamat.</strong> Password Anda Berhasil Diganti');
					if (session_getlevel() == 'pegawai') {
						redirect('pegawai/form_kegiatan');
					}else{
						redirect('admin');
					}

			}else{
				$this->session->set_flashdata('message', '<strong><i class="icon-exclamation-triangle"></i> Perhatian!</strong> Terjadi Kesalahan');
				redirect('login/force_change_password');
			}
		}else{
			$this->session->set_flashdata('message', '<strong><i class="icon-exclamation-triangle"></i> Perhatian!</strong> Password Tidak Boleh Kosong');
			redirect('login/force_change_password');
		}
	}


}

/* End of file User.php */
/* Location: ./application/controllers/User.php */