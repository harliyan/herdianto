<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pembagian_desa extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_pembagian_desa_model');
    } 

    /*
     * Listing of tb_pembagian_desa
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('tb_pembagian_desa/index?');
        $config['total_rows'] = $this->Tb_pembagian_desa_model->get_all_tb_pembagian_desa_count();
        $this->pagination->initialize($config);

        $data['tb_pembagian_desa'] = $this->Tb_pembagian_desa_model->get_all_tb_pembagian_desa($params);
        
        $this->load->template('tb_pembagian_desa/index',$data);
    }

    /*
     * Adding a new tb_pembagian_desa
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_desa' => $this->input->post('id_desa'),
				'dukuh' => $this->input->post('dukuh'),
				'dusun' => $this->input->post('dusun'),
				'rw' => $this->input->post('rw'),
				'rt' => $this->input->post('rt'),
				'tahun' => $this->input->post('tahun'),
            );
            
            $tb_pembagian_desa_id = $this->Tb_pembagian_desa_model->add_tb_pembagian_desa($params);
            redirect('pembagian_desa/index');
        }
        else
        {            

            $this->load->template('tb_pembagian_desa/add');
        }
    }  

    /*
     * Editing a tb_pembagian_desa
     */
    function edit($id)
    {   
        // check if the tb_pembagian_desa exists before trying to edit it
        $data['tb_pembagian_desa'] = $this->Tb_pembagian_desa_model->get_tb_pembagian_desa($id);
        
        if(isset($data['tb_pembagian_desa']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_desa' => $this->input->post('id_desa'),
					'dukuh' => $this->input->post('dukuh'),
					'dusun' => $this->input->post('dusun'),
					'rw' => $this->input->post('rw'),
					'rt' => $this->input->post('rt'),
					'tahun' => $this->input->post('tahun'),
                );

                $this->Tb_pembagian_desa_model->update_tb_pembagian_desa($id,$params);            
                redirect('pembagian_desa/index');
            }
            else
            {
                $this->load->template('tb_pembagian_desa/edit',$data);
            }
        }
        else
            show_error('The tb_pembagian_desa you are trying to edit does not exist.');
    } 

    /*
     * Deleting tb_pembagian_desa
     */
    function remove($id)
    {
        $tb_pembagian_desa = $this->Tb_pembagian_desa_model->get_tb_pembagian_desa($id);

        // check if the tb_pembagian_desa exists before trying to delete it
        if(isset($tb_pembagian_desa['id']))
        {
            $this->Tb_pembagian_desa_model->delete_tb_pembagian_desa($id);
            redirect('pembagian_desa/index');
        }
        else
            show_error('The tb_pembagian_desa you are trying to delete does not exist.');
    }
    
}
