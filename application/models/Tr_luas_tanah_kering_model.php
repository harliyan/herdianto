<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tr_luas_tanah_kering_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tr_luas_tanah_kering by id
     */
    function get_tr_luas_tanah_kering($id)
    {
        return $this->db->get_where('tr_luas_tanah_kering',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all tr_luas_tanah_kering
     */
    function get_all_tr_luas_tanah_kering()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tr_luas_tanah_kering')->result_array();
    }
        
    /*
     * function to add new tr_luas_tanah_kering
     */
    function add_tr_luas_tanah_kering($params)
    {
        $this->db->insert('tr_luas_tanah_kering',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tr_luas_tanah_kering
     */
    function update_tr_luas_tanah_kering($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('tr_luas_tanah_kering',$params);
    }
    
    /*
     * function to delete tr_luas_tanah_kering
     */
    function delete_tr_luas_tanah_kering($id)
    {
        return $this->db->delete('tr_luas_tanah_kering',array('id'=>$id));
    }
}
