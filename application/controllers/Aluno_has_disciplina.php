<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Aluno_has_disciplina extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Aluno_has_disciplina_model');
    } 

    /*
     * Listing of aluno_has_disciplina
     */
    function index()
    {
        $data['aluno_has_disciplina'] = $this->Aluno_has_disciplina_model->get_all_aluno_has_disciplina();
        
        $data['_view'] = 'aluno_has_disciplina/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new aluno_has_disciplina
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'aluno_id' => $this->input->post('aluno_id'),
				'disciplina_id' => $this->input->post('disciplina_id'),
				'codigo' => $this->input->post('codigo'),
				'ano' => $this->input->post('ano'),
				'periodo' => $this->input->post('periodo'),
				'nota' => $this->input->post('nota'),
				'frequencia' => $this->input->post('frequencia'),
				'situacao' => $this->input->post('situacao'),
				'hash_aluno' => $this->input->post('hash_aluno'),
            );
            
            $aluno_has_disciplina_id = $this->Aluno_has_disciplina_model->add_aluno_has_disciplina($params);
            redirect('aluno_has_disciplina/index');
        }
        else
        {            
            $data['_view'] = 'aluno_has_disciplina/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a aluno_has_disciplina
     */
    function edit($id)
    {   
        // check if the aluno_has_disciplina exists before trying to edit it
        $data['aluno_has_disciplina'] = $this->Aluno_has_disciplina_model->get_aluno_has_disciplina($id);
        
        if(isset($data['aluno_has_disciplina']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'aluno_id' => $this->input->post('aluno_id'),
					'disciplina_id' => $this->input->post('disciplina_id'),
					'codigo' => $this->input->post('codigo'),
					'ano' => $this->input->post('ano'),
					'periodo' => $this->input->post('periodo'),
					'nota' => $this->input->post('nota'),
					'frequencia' => $this->input->post('frequencia'),
					'situacao' => $this->input->post('situacao'),
					'hash_aluno' => $this->input->post('hash_aluno'),
                );

                $this->Aluno_has_disciplina_model->update_aluno_has_disciplina($id,$params);            
                redirect('aluno_has_disciplina/index');
            }
            else
            {
                $data['_view'] = 'aluno_has_disciplina/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The aluno_has_disciplina you are trying to edit does not exist.');
    } 

    /*
     * Deleting aluno_has_disciplina
     */
    function remove($id)
    {
        $aluno_has_disciplina = $this->Aluno_has_disciplina_model->get_aluno_has_disciplina($id);

        // check if the aluno_has_disciplina exists before trying to delete it
        if(isset($aluno_has_disciplina['id']))
        {
            $this->Aluno_has_disciplina_model->delete_aluno_has_disciplina($id);
            redirect('aluno_has_disciplina/index');
        }
        else
            show_error('The aluno_has_disciplina you are trying to delete does not exist.');
    }
    
}