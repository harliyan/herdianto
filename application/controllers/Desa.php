<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Desa extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_desa_model');
    } 

    /*
     * Listing of tb_desa
     */
    function index()
    {
        $data['tb_desa'] = $this->Tb_desa_model->get_all_tb_desa();
        
        $this->load->template('tb_desa/index',$data);
    }

    /*
     * Adding a new tb_desa
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nama_desa' => $this->input->post('nama_desa'),
            );
            
            $tb_desa_id = $this->Tb_desa_model->add_tb_desa($params);
            redirect('desa/index');
        }
        else
        {            
            $this->load->template('tb_desa/add');
        }
    }  

    /*
     * Editing a tb_desa
     */
    function edit($id_desa)
    {   
        // check if the tb_desa exists before trying to edit it
        $data['tb_desa'] = $this->Tb_desa_model->get_tb_desa($id_desa);
        
        if(isset($data['tb_desa']['id_desa']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nama_desa' => $this->input->post('nama_desa'),
                );

                $this->Tb_desa_model->update_tb_desa($id_desa,$params);            
                redirect('desa/index');
            }
            else
            {
                $this->load->template('tb_desa/edit',$data);
            }
        }
        else
            show_error('The tb_desa you are trying to edit does not exist.');
    } 

    /*
     * Deleting tb_desa
     */
    function remove($id_desa)
    {
        $tb_desa = $this->Tb_desa_model->get_tb_desa($id_desa);

        // check if the tb_desa exists before trying to delete it
        if(isset($tb_desa['id_desa']))
        {
            $this->Tb_desa_model->delete_tb_desa($id_desa);
            redirect('desa/index');
        }
        else
            show_error('The tb_desa you are trying to delete does not exist.');
    }
    
}
