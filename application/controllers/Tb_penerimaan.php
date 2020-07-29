<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tb_penerimaan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_penerimaan_model');
    } 

    /*
     * Listing of tb_penerimaan
     */
    function index()
    {
        $data['tb_penerimaan'] = $this->Tb_penerimaan_model->get_all_tb_penerimaan();
        
        $data['_view'] = 'tb_penerimaan/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tb_penerimaan
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'tgl_masuk' => $this->input->post('tgl_masuk'),
				'penerima' => $this->input->post('penerima'),
				'kondisi_barang' => $this->input->post('kondisi_barang'),
				'id_barang' => $this->input->post('id_barang'),
				'jumlah' => $this->input->post('jumlah'),
				'keterangan' => $this->input->post('keterangan'),
            );
            
            $tb_penerimaan_id = $this->Tb_penerimaan_model->add_tb_penerimaan($params);
            redirect('tb_penerimaan/index');
        }
        else
        {            
            $data['_view'] = 'tb_penerimaan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tb_penerimaan
     */
    function edit($id_pemasukan)
    {   
        // check if the tb_penerimaan exists before trying to edit it
        $data['tb_penerimaan'] = $this->Tb_penerimaan_model->get_tb_penerimaan($id_pemasukan);
        
        if(isset($data['tb_penerimaan']['id_pemasukan']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'tgl_masuk' => $this->input->post('tgl_masuk'),
					'penerima' => $this->input->post('penerima'),
					'kondisi_barang' => $this->input->post('kondisi_barang'),
					'id_barang' => $this->input->post('id_barang'),
					'jumlah' => $this->input->post('jumlah'),
					'keterangan' => $this->input->post('keterangan'),
                );

                $this->Tb_penerimaan_model->update_tb_penerimaan($id_pemasukan,$params);            
                redirect('tb_penerimaan/index');
            }
            else
            {
                $data['_view'] = 'tb_penerimaan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tb_penerimaan you are trying to edit does not exist.');
    } 

    /*
     * Deleting tb_penerimaan
     */
    function remove($id_pemasukan)
    {
        $tb_penerimaan = $this->Tb_penerimaan_model->get_tb_penerimaan($id_pemasukan);

        // check if the tb_penerimaan exists before trying to delete it
        if(isset($tb_penerimaan['id_pemasukan']))
        {
            $this->Tb_penerimaan_model->delete_tb_penerimaan($id_pemasukan);
            redirect('tb_penerimaan/index');
        }
        else
            show_error('The tb_penerimaan you are trying to delete does not exist.');
    }
    
}
