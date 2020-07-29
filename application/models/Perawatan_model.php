<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Perawatan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tb_barang by id_barang
     */
    function get_perawatan($id_perawatan)
    {
        return $this->db->get_where('perawatan',array('id_perawatan'=>$id_perawatan))->row_array();
    }

    function data($number,$offset){
		return $query = $this->db->get('perawatan',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('perawatan')->num_rows();
	}  
    /*
     * Get all perawatan
     */
    function get_all_perawatan($number,$offset)
    {
		$this->db->select('*');
    $this->db->from('perawatan a'); 
    $this->db->join('inventaris b', 'b.id_inventaris=a.id_inventaris', 'left');
    $this->db->join('barang c', 'c.id_barang=b.id_barang', 'left');
    //$this->db->join('kondisi d', 'd.id_kondisi=a.kondisi', 'left');
    $this->db->join('user e', 'e.id_user=a.id_cek', 'left');
    //$this->db->where('c.album_id',$id);
    $this->db->order_by('a.id_perawatan','asc');  
    $this->db->limit($number,$offset);              
    $query = $this->db->get(); 
    return $query->result_array();
	
    //    $this->db->order_by('id_perawatan', 'desc');
    //    return $this->db->get('perawatan')->result_array();
    }
        
    /*
     * function to add new perawatan
     */
    function add_perawatan($params)
    {
        $this->db->insert('perawatan',$params);
        return $this->db->insert_id();
    }
    
    function get_all_inventaris()
    {
        $this->db->select('*');
        $this->db->from('inventaris a');
        $this->db->join('barang b', 'b.id_barang=a.id_barang', 'left');
        $this->db->join('ruangan c', 'c.id_ruangan=a.id_ruangan', 'left');
        //$this->db->where('c.album_id',$id);
        $this->db->order_by('a.id_inventaris', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function get_inventaris($id)
    {
        $this->db->select('*');
        $this->db->from('inventaris a');
        $this->db->join('barang b', 'b.id_barang=a.id_barang', 'left');
        $this->db->join('ruangan c', 'c.id_ruangan=a.id_ruangan', 'left');
        $this->db->where('c.id_ruangan',$id);
        $this->db->order_by('a.id_inventaris', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }
	
    function get_all_kondisi()
    {
        $this->db->order_by('id_kondisi', 'asc');
        return $this->db->get('kondisi')->result_array();
    }
    function get_lokasi()
    {
        $this->db->order_by('id_ruangan', 'asc');
        return $this->db->get('ruangan')->result_array();
    }

    function get_all_user()
    {
        $this->db->order_by('id_user', 'asc');
        return $this->db->get('user')->result_array();
    }
	
    /*
     * function to update perawatan
     */
    function update_perawatan($id_perawatan,$params)
    {
        $this->db->where('id_perawatan',$id_perawatan);
        return $this->db->update('perawatan',$params);
    }
    
    /*
     * function to delete perawatan
     */
    function delete_perawatan($id_perawatan)
    {
        return $this->db->delete('perawatan',array('id_perawatan'=>$id_perawatan));
    }
}