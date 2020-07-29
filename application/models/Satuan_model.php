<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Satuan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tb_satuan by id_satuan
     */
    function get_satuan($id_satuan)
    {
        return $this->db->get_where('satuan',array('id_satuan'=>$id_satuan))->row_array();
    }
    function data($number,$offset){
		return $query = $this->db->get('barang',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('barang')->num_rows();
	}
    /*
     * Get all tb_satuan
     */
    function get_all_satuan($number,$offset)
    {
        $this->db->order_by('id_satuan', 'desc');
        $this->db->limit($number,$offset);       
        return $this->db->get('satuan')->result_array();
    }
        
    /*
     * function to add new tb_satuan
     */
    function add_satuan($params)
    {
        $this->db->insert('satuan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tb_satuan
     */
    function update_satuan($id_satuan,$params)
    {
        $this->db->where('id_satuan',$id_satuan);
        return $this->db->update('satuan',$params);
    }
    
    /*
     * function to delete tb_satuan
     */
    function delete_satuan($id_satuan)
    {
        return $this->db->delete('satuan',array('id_satuan'=>$id_satuan));
    }
}