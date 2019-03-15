<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model','admin_model');
		$this->is_logged();
		$this->is_admin();
		$this->is_tambah_data();
		// $this->is_pass_changed();
	}

	//user kelola

	public function index()
	{
		$data['user'] = $this->admin_model->get_all_user();
		// vdebug($data);
		$this->load->template('admin/user',$data);
	}

	function is_user() {

		$nip = $this->input->post('nip');
		$exists = $this->admin_model->is_user($nip);
		if($exists){
			$msg = array(
				'valid' => false);
		}else{
			$msg = array(
				'valid' => true);
		}
		echo json_encode($msg);
	}	
	function is_user2() {
		$nip = $this->input->post('nip');
		$username = $this->input->post('nip');
		$id = $this->input->post('id');
		$exists = $this->admin_model->is_user2($nip,$username,$id);
		if($exists){
			$msg = array(
				'valid' => false);
		}else{
			$msg = array(
				'valid' => true);
		}
		echo json_encode($msg);
	}

	public function add_user()
	{
		$this->is_admin();
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$jenis = $this->input->post('jenis');
		$password = $this->input->post('password');

		$data = array(
			'nip' => $nip,
			'username' => $nip,
			'password' => sha1(sha1(md5($password))),
			'nama' => $nama,
			'level' => $jenis,
		);

		$add_user = $this->admin_model->add_user($data);
		if ($add_user){
			redirect('admin','refresh');
		}
	}

	function delete_user(){
		$id = $this->input->post("id");

		$delete = $this->admin_model->delete_user($id);
		if ($delete) {
			echo "berhasil";
		}

	}

	function edituser($id="")
	{
		$this->is_admin();
		$data['data']  = $this->admin_model->get_user($id);
		// vdebug($data);
		$this->load->template('admin/edit_user',$data);
	}

	public function add_edit_user()
	{
		$this->is_admin();
		$id = $this->input->post('id');
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$level = $this->input->post('level');
		$password = $this->input->post('password');
		$nomor_seri_karpeg = $this->input->post('nomor_seri_karpeg');
		$pangkat_golongan = $this->input->post('pangkat_golongan');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$pendidikan = $this->input->post('pendidikan');
		$jabatan = $this->input->post('jabatan');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$unit_kerja = $this->input->post('unit_kerja');

		if ($password == "") {
			$data = array(
				'nip' => $nip,
				'level' => $level,
				'nama' => $nama,
				'nomor_seri_karpeg' => $nomor_seri_karpeg,
				'pangkat_golongan' => $pangkat_golongan,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'pendidikan' => $pendidikan,
				'jabatan' => $jabatan,
				'jenis_kelamin' => $jenis_kelamin,
				'unit_kerja' => $unit_kerja,
			);
		}else{
			$data = array(
				'nip' => $nip,
				'password' => sha1(sha1(md5($password))),
				'level' => $level,
				'nama' => $nama,
				'nomor_seri_karpeg' => $nomor_seri_karpeg,
				'pangkat_golongan' => $pangkat_golongan,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'pendidikan' => $pendidikan,
				'jabatan' => $jabatan,
				'jenis_kelamin' => $jenis_kelamin,
				'unit_kerja' => $unit_kerja,
			);
		}

		$add_user = $this->admin_model->update_user($data,$id);

		$add_user = $this->admin_model->update_user($data,$id);
		if ($add_user){
			redirect('admin','refresh');
		}
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */