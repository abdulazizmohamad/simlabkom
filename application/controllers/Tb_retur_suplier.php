<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tb_retur_suplier extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_retur_suplier_model');
    } 

    /*
     * Listing of tb_retur_suplier
     */
    function index()
    {
        $data['tb_retur_suplier'] = $this->Tb_retur_suplier_model->get_all_tb_retur_suplier();
        
        $data['_view'] = 'tb_retur_suplier/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tb_retur_suplier
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_barang' => $this->input->post('id_barang'),
				'nama_suplier' => $this->input->post('nama_suplier'),
				'tgl_retur' => $this->input->post('tgl_retur'),
				'petugas' => $this->input->post('petugas'),
				'keterangan' => $this->input->post('keterangan'),
            );
            
            $tb_retur_suplier_id = $this->Tb_retur_suplier_model->add_tb_retur_suplier($params);
            redirect('tb_retur_suplier/index');
        }
        else
        {            
            $data['_view'] = 'tb_retur_suplier/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tb_retur_suplier
     */
    function edit($id_retur_suplier)
    {   
        // check if the tb_retur_suplier exists before trying to edit it
        $data['tb_retur_suplier'] = $this->Tb_retur_suplier_model->get_tb_retur_suplier($id_retur_suplier);
        
        if(isset($data['tb_retur_suplier']['id_retur_suplier']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_barang' => $this->input->post('id_barang'),
					'nama_suplier' => $this->input->post('nama_suplier'),
					'tgl_retur' => $this->input->post('tgl_retur'),
					'petugas' => $this->input->post('petugas'),
					'keterangan' => $this->input->post('keterangan'),
                );

                $this->Tb_retur_suplier_model->update_tb_retur_suplier($id_retur_suplier,$params);            
                redirect('tb_retur_suplier/index');
            }
            else
            {
                $data['_view'] = 'tb_retur_suplier/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tb_retur_suplier you are trying to edit does not exist.');
    } 

    /*
     * Deleting tb_retur_suplier
     */
    function remove($id_retur_suplier)
    {
        $tb_retur_suplier = $this->Tb_retur_suplier_model->get_tb_retur_suplier($id_retur_suplier);

        // check if the tb_retur_suplier exists before trying to delete it
        if(isset($tb_retur_suplier['id_retur_suplier']))
        {
            $this->Tb_retur_suplier_model->delete_tb_retur_suplier($id_retur_suplier);
            redirect('tb_retur_suplier/index');
        }
        else
            show_error('The tb_retur_suplier you are trying to delete does not exist.');
    }
    
}
