<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Docente_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get docente by id
     */
    function get_docente($id)
    {
        return $this->db->get_where('docente',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all docente
     */
    function get_all_docente()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('docente')->result_array();
    }
        
    /*
     * function to add new docente
     */
    function add_docente($params)
    {
        $this->db->insert('docente',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update docente
     */
    function update_docente($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('docente',$params);
    }
    
    /*
     * function to delete docente
     */
    function delete_docente($id)
    {
        return $this->db->delete('docente',array('id'=>$id));
    }
}
