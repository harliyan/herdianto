<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


	function is_user($nip='') {
		$this->db->select('id');
		$this->db->where('nip', $nip);
		$this->db->or_where('username', $nip);
		$query = $this->db->get('tb_user');

		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}	
	function is_user2($nip='',$username="",$id="") {
		$this->db->select('id');
		$this->db->where('id !=', $id);
		$this->db->group_start();
			$this->db->where('nip', $nip);
			$this->db->or_where('username', $username);	
     	$this->db->group_end();
		$query = $this->db->get('tb_user');

		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function add_user($data){
        $query = $this->db->insert('tb_user', $data);
        return ($query) ? true : false;
    }
    public function update_user($data,$id){
    	$this->db->where('id', $id);
    	$query = $this->db->update('tb_user', $data);
        return ($query) ? true : false;
    } 
    public function delete_kabag(){
    	$data = array(
			'ka_bag' => 0,
		);
    	$this->db->where('ka_bag', 1);
    	$query = $this->db->update('tb_user', $data);
        return ($query) ? true : false;
    }

    function get_all_user() {
		$this->db->select('*');
		$query = $this->db->get('tb_user');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	function get_user($id='') {
		$this->db->select('*');
		$this->db->where('id', $id);
		$query = $this->db->get('tb_user');

		if ($query->num_rows() > 0) {
			return $query->row();
		} else {
			return array();
		}
	}

	public function delete_user($id){
		$this->db->where('id', $id);
		$query =$this->db->delete('tb_user');
		return ($query) ? true : false;
	}

	function get_all_unsur() {
		$this->db->select('*');
		$query = $this->db->get('tb_unsur');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function get_subunsur($nomor) {
		$this->db->select('*');
		$this->db->where('no_unsur', $nomor);

		$query = $this->db->get('tb_subunsur');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	function get_butir($nomor) {
		$this->db->select('*');
		$this->db->where('no_subunsur', $nomor);

		$query = $this->db->get('tb_butir_kegiatan');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	public function add_butir_kegiatan($data){
        $query = $this->db->insert('tb_butir_kegiatan', $data);
        return ($query) ? true : false;
    }
    


}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */