<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Profil_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get user by id_user
     */
    function get_user($id_user)
    {
        return $this->db->get_where('user',array('id_user'=>$id_user))->row_array();
    }
        
    /*
     * Get all user
     */
    function get_profil($id_user)
    {
        $this->db->select('*');
    $this->db->from('user'); 
    $this->db->where('id_user',$id_user);
    //$this->db->order_by('a.id_perbaikan','asc');         
    $query = $this->db->get(); 
    return $query->result_array();
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('user',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($id_user,$params)
    {
        $this->db->where('id_user',$id_user);
        return $this->db->update('user',$params);
    }
    
    /*
     * function to delete user
     */
    function delete_user($id_user)
    {
        return $this->db->delete('user',array('id_user'=>$id_user));
    }
}
