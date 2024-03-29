<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tr_kependudukan_umur_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tr_kependudukan_umur by id
     */
    function get_tr_kependudukan_umur($id)
    {
        return $this->db->get_where('tr_kependudukan_umur',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all tr_kependudukan_umur
     */
    function get_all_tr_kependudukan_umur()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tr_kependudukan_umur')->result_array();
    }
        
    /*
     * function to add new tr_kependudukan_umur
     */
    function add_tr_kependudukan_umur($params)
    {
        $this->db->insert('tr_kependudukan_umur',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tr_kependudukan_umur
     */
    function update_tr_kependudukan_umur($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('tr_kependudukan_umur',$params);
    }
    
    /*
     * function to delete tr_kependudukan_umur
     */
    function delete_tr_kependudukan_umur($id)
    {
        return $this->db->delete('tr_kependudukan_umur',array('id'=>$id));
    }
}
