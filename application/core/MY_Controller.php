<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model','user_model');
	}
	
	public function is_logged(){
		$login_check = session_getall();
		// $get_ip = 
		// vdebug($login_check);

		if ( !$login_check ){
			// Allow some methods?
			$allowed_class = array(
				'login',
			);
			$allowed_method = array(
				'auth',
				'index',
				'update_all_password',
			);
			if ( ! in_array($this->router->fetch_method(), $allowed_method) || ! in_array($this->router->fetch_class(), $allowed_class) )
			{
				redirect('login');
			}
		}else{
			return true;
		}
	}

	public function is_perawat(){
		if ( session_getlevel() == 'perawat' || session_getlevel() == 'admin'){
			return true;
		}
		else{
			redirect('dashboard');
		}
	}


	public function is_pegawai(){
		if ( session_getlevel() == 'perawat' || session_getlevel() == 'dokter' || session_getlevel() == 'admin'){
			return true;
		}
		else{
			redirect('dashboard');
		}
	}

	public function is_dokter(){
		if ( session_getlevel() == 'dokter' || session_getlevel() == 'admin'){
			return true;
		}
		else{
			redirect('dashboard');
		}
	}


	public function is_admin(){
		if ( session_getlevel() == 'admin'){
			return true;
		}
		else{
			redirect('dashboard');
		}
	}

	public function is_tambah_data(){
		$cek = $this->user_model->get_data_status(session_getnip());
		if ($cek == 0) {
			// vdebug($hmm);
			redirect('login/form_tambah_data');
			
		}else{
			return true;
		}
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */