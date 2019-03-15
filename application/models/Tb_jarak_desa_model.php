<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tb_jarak_desa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tb_jarak_desa by id
     */
    function get_tb_jarak_desa($id)
    {
        return $this->db->get_where('tb_jarak_desa',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all tb_jarak_desa count
     */
    function get_all_tb_jarak_desa_count()
    {
        $this->db->from('tb_jarak_desa');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all tb_jarak_desa
     */
    function get_all_tb_jarak_desa($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tb_jarak_desa')->result_array();
    }
        
    /*
     * function to add new tb_jarak_desa
     */
    function add_tb_jarak_desa($params)
    {
        $this->db->insert('tb_jarak_desa',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tb_jarak_desa
     */
    function update_tb_jarak_desa($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('tb_jarak_desa',$params);
    }
    
    /*
     * function to delete tb_jarak_desa
     */
    function delete_tb_jarak_desa($id)
    {
        return $this->db->delete('tb_jarak_desa',array('id'=>$id));
    }
}