<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tipo_atividade_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tipo_atividade by id
     */
    function get_tipo_atividade($id)
    {
        return $this->db->get_where('tipo_atividade',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all tipo_atividade
     */
    function get_all_tipo_atividade()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tipo_atividade')->result_array();
    }
        
    /*
     * function to add new tipo_atividade
     */
    function add_tipo_atividade($params)
    {
        $this->db->insert('tipo_atividade',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tipo_atividade
     */
    function update_tipo_atividade($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('tipo_atividade',$params);
    }
    
    /*
     * function to delete tipo_atividade
     */
    function delete_tipo_atividade($id)
    {
        return $this->db->delete('tipo_atividade',array('id'=>$id));
    }
}
