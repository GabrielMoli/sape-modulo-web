<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Forma_ingresso_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get forma_ingresso by id
     */
    function get_forma_ingresso($id)
    {
        return $this->db->get_where('forma_ingresso',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all forma_ingresso
     */
    function get_all_forma_ingresso()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('forma_ingresso')->result_array();
    }
        
    /*
     * function to add new forma_ingresso
     */
    function add_forma_ingresso($params)
    {
        $this->db->insert('forma_ingresso',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update forma_ingresso
     */
    function update_forma_ingresso($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('forma_ingresso',$params);
    }
    
    /*
     * function to delete forma_ingresso
     */
    function delete_forma_ingresso($id)
    {
        return $this->db->delete('forma_ingresso',array('id'=>$id));
    }
}