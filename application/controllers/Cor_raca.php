<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Cor_raca extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Cor_raca_model');
    } 

    /*
     * Listing of cor_raca
     */
    function index()
    {
        $data['cor_raca'] = $this->Cor_raca_model->get_all_cor_raca();
        
        $data['_view'] = 'cor_raca/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new cor_raca
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'descricao' => $this->input->post('descricao'),
            );
            
            $cor_raca_id = $this->Cor_raca_model->add_cor_raca($params);
            redirect('cor_raca/index');
        }
        else
        {            
            $data['_view'] = 'cor_raca/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a cor_raca
     */
    function edit($id)
    {   
        // check if the cor_raca exists before trying to edit it
        $data['cor_raca'] = $this->Cor_raca_model->get_cor_raca($id);
        
        if(isset($data['cor_raca']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'descricao' => $this->input->post('descricao'),
                );

                $this->Cor_raca_model->update_cor_raca($id,$params);            
                redirect('cor_raca/index');
            }
            else
            {
                $data['_view'] = 'cor_raca/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The cor_raca you are trying to edit does not exist.');
    } 

    /*
     * Deleting cor_raca
     */
    function remove($id)
    {
        $cor_raca = $this->Cor_raca_model->get_cor_raca($id);

        // check if the cor_raca exists before trying to delete it
        if(isset($cor_raca['id']))
        {
            $this->Cor_raca_model->delete_cor_raca($id);
            redirect('cor_raca/index');
        }
        else
            show_error('The cor_raca you are trying to delete does not exist.');
    }
    
}