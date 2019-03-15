<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function auth($data) {
		$this->db->select('tb_user.id,tb_user.username,tb_user.nip,tb_user.level,tb_user.nama,tb_user.pass_status,tb_user.data_status');
		$this->db->from('tb_user');
		$this->db->group_start();
			$this->db->where('tb_user.password',$data['password']);
     	$this->db->group_end();
		$this->db->group_start();
			$this->db->where('tb_user.username',$data['username']);
			$this->db->or_where('tb_user.username',$data['nip']);
     	$this->db->group_end();

		$this->db->limit(1);
		$query = $this->db->get();
		// vdebug($query->row());
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function get_pass_status($nip){
		$query = "SELECT pass_status
				  FROM tb_user
				  WHERE nip = '{$nip}'
				";
		$query = $this->db->query($query);
		if ($query->num_rows() > 0) {
			return $query->row()->pass_status;
		} else {
			return false;
		}
	}
	public function get_data_status($nip){
		$query = "SELECT data_status
				  FROM tb_user
				  WHERE nip = '{$nip}'
				";
		$query = $this->db->query($query);
		if ($query->num_rows() > 0) {
			return $query->row()->data_status;
		} else {
			return 0;
		}
	}

	public function update_password($nip,$data){
    	$this->db->where('nip', $nip);
    	$query = $this->db->update('tb_user', $data);
        return ($query) ? true : false;
    } 


}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */