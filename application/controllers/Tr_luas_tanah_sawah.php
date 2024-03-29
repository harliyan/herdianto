<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tr_luas_tanah_sawah extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tr_luas_tanah_sawah_model');
    } 

    /*
     * Listing of tr_luas_tanah_sawah
     */
    function index()
    {
        $data['tr_luas_tanah_sawah'] = $this->Tr_luas_tanah_sawah_model->get_all_tr_luas_tanah_sawah();
        
        $this->load->template('tr_luas_tanah_sawah/index',$data);
    }

    /*
     * Adding a new tr_luas_tanah_sawah
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_luas_wilayah' => $this->input->post('id_luas_wilayah'),
				'irigasi_teknis' => $this->input->post('irigasi_teknis'),
				'irigasi_setengah_teknis' => $this->input->post('irigasi_setengah_teknis'),
				'irigasi_sederhana' => $this->input->post('irigasi_sederhana'),
				'hujan_tadah' => $this->input->post('hujan_tadah'),
            );
            
            $tr_luas_tanah_sawah_id = $this->Tr_luas_tanah_sawah_model->add_tr_luas_tanah_sawah($params);
            redirect('tr_luas_tanah_sawah/index');
        }
        else
        {            
            $this->load->template('tr_luas_tanah_sawah/add');
        }
    }  

    /*
     * Editing a tr_luas_tanah_sawah
     */
    function edit($id)
    {   
        // check if the tr_luas_tanah_sawah exists before trying to edit it
        $data['tr_luas_tanah_sawah'] = $this->Tr_luas_tanah_sawah_model->get_tr_luas_tanah_sawah($id);
        
        if(isset($data['tr_luas_tanah_sawah']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_luas_wilayah' => $this->input->post('id_luas_wilayah'),
					'irigasi_teknis' => $this->input->post('irigasi_teknis'),
					'irigasi_setengah_teknis' => $this->input->post('irigasi_setengah_teknis'),
					'irigasi_sederhana' => $this->input->post('irigasi_sederhana'),
					'hujan_tadah' => $this->input->post('hujan_tadah'),
                );

                $this->Tr_luas_tanah_sawah_model->update_tr_luas_tanah_sawah($id,$params);            
                redirect('tr_luas_tanah_sawah/index');
            }
            else
            {
                $this->load->template('tr_luas_tanah_sawah/edit',$data);
            }
        }
        else
            show_error('The tr_luas_tanah_sawah you are trying to edit does not exist.');
    } 

    /*
     * Deleting tr_luas_tanah_sawah
     */
    function remove($id)
    {
        $tr_luas_tanah_sawah = $this->Tr_luas_tanah_sawah_model->get_tr_luas_tanah_sawah($id);

        // check if the tr_luas_tanah_sawah exists before trying to delete it
        if(isset($tr_luas_tanah_sawah['id']))
        {
            $this->Tr_luas_tanah_sawah_model->delete_tr_luas_tanah_sawah($id);
            redirect('tr_luas_tanah_sawah/index');
        }
        else
            show_error('The tr_luas_tanah_sawah you are trying to delete does not exist.');
    }
    
}
