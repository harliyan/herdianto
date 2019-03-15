<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model','user_model');
		$this->load->model('Admin_model','admin_model');
		$this->is_logged();
		// $this->is_tambah_data();
		// $this->is_pass_changed();
	}

	public function index()
	{
		if (session_getlevel() == 'admin') {
				redirect('admin');
			}else{
				redirect('pegawai/form_kegiatan');
			}
		
	}

	function update_data()
	{
		// $this->is_admin();

		$id = session_getid();
		// vdebug($id);
		$nomor_seri_karpeg = $this->input->post('nomor_seri_karpeg');
		$pangkat_golongan = $this->input->post('pangkat_golongan');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$pendidikan = $this->input->post('pendidikan');
		$jabatan = $this->input->post('jabatan');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$unit_kerja = $this->input->post('unit_kerja');
		
		$data = array(
			'nomor_seri_karpeg' => $nomor_seri_karpeg,
			'pangkat_golongan' => $pangkat_golongan,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'pendidikan' => $pendidikan,
			'jabatan' => $jabatan,
			'jenis_kelamin' => $jenis_kelamin,
			'unit_kerja' => $unit_kerja,
			'data_status' => 1,
		);

		$add_user = $this->admin_model->update_user($data,$id);
		if ($add_user){
			redirect('dashboard');
		}
	}

	
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */