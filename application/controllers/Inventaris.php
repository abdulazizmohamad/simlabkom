<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Inventaris extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Inventaris_model');
        $this->load->library('pdf');
    }

    /*
     * Listing of barang
     */
    function index()
    {
        if ($this->session->userdata("level") != NULL) {
            $jumlah_data = $this->Inventaris_model->jumlah_data();
            $config['base_url'] = base_url() . 'inventaris/index/';
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 10;

            // Pagination link format 
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
            $config['cur_tag_close'] = '</a></li>';
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Prev';
            $config['next_tag_open'] = '<li class="pg-next">';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_open'] = '<li class="pg-prev">';
            $config['prev_tag_close'] = '</li>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';

            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);
            $data['inventaris'] = $this->Inventaris_model->get_all_inventaris($config['per_page'], $from);
            // $data['barang'] = $this->Barang_model->get_all_barang();

            $data['_view'] = 'inventaris/index';
            $this->load->view('layouts/main', $data);
        } else {
            $this->load->view('login/login');
        }
    }

    function search()
    {
        $keyword = $this->input->post('search');
        $jumlah_data = $this->Inventaris_model->jumlah_data_by($keyword);
        $config['base_url'] = base_url() . 'inventaris/index/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;

        // Pagination link format 
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['next_tag_open'] = '<li class="pg-next">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="pg-prev">';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['inventaris'] = $this->Inventaris_model->search($config['per_page'], $from, $keyword);
        // $data['barang'] = $this->Barang_model->get_all_barang();

        $data['_view'] = 'inventaris/index';
        if ($this->session->userdata("level") == 'admin') {
            $this->load->view('layouts/main', $data);
        } else {
            $this->load->view('layouts/main_user', $data);
        }
    }

    /*
     * Adding a new inventaris
     */
    function cetak()
    {
        $id_ruangan = $this->input->post('id_ruangan');
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_ahir = $this->input->post('tgl_ahir');

        $pdf = new FPDF('P', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Image('resources/img/poltek.png', 10, 6, 28);
        $pdf->Cell(190, 7, 'UPT SISTEM INFORMASI', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 18);
        $pdf->Cell(190, 7, 'POLITEKNIK HARAPAN BERSAMA TEGAL', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'LAPORAN INVENTARIS BARANG', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(190, 6, 'Periode ' . date('d-m-Y', strtotime($tgl_awal)) . ' s/d ' . date('d-m-Y', strtotime($tgl_ahir)), 0, 1, 'C');
        $pdf->Ln();

        if ($tgl_awal != 0 && $id_ruangan == 'all') {
            $barang = $this->db->select('*');
            $barang = $this->db->from('inventaris a');
            $barang = $this->db->join('barang b', 'b.id_barang=a.id_barang', 'left');
            $barang = $this->db->join('ruangan c', 'c.id_ruangan=a.id_ruangan', 'left');
            $barang = $this->db->join('merk d', 'd.id_merk=b.id_merk', 'left');
            $barang = $this->db->where('b.tgl_masuk BETWEEN "' . date('Y-m-d', strtotime($tgl_awal)) . '" and "' . date('Y-m-d', strtotime($tgl_ahir)) . '"');
            $barang = $this->db->order_by('a.id', 'asc');
            $barang = $this->db->get()->result();

            if ($barang != null) {
                $pdf->Cell(10, 7, '', 0, 1);
                $pdf->SetFont('Arial', 'B', 9);
                $pdf->Cell(10, 6, 'NO.', 1, 0, 'C');
                $pdf->Cell(28, 6, 'KODE INV.', 1, 0);
                $pdf->Cell(40, 6, 'NAMA BARANG', 1, 0);
                $pdf->Cell(20, 6, 'MERK', 1, 0);
                $pdf->Cell(25, 6, 'LOKASI', 1, 0);
                $pdf->Cell(25, 6, 'TGL. MASUK', 1, 0, 'C');
                $pdf->Cell(40, 6, 'KETERANGAN', 1, 1);
                $pdf->SetFont('Arial', '', 9);

                $X = 0;
                foreach ($barang as $row) {
                    $X += 1;
                    $pdf->Cell(10, 6, $X, 1, 0, 'C');
                    $pdf->Cell(28, 6, $row->id_inventaris, 1, 0);
                    $pdf->Cell(40, 6, $row->nm_barang, 1, 0);
                    $pdf->Cell(20, 6, $row->nm_merk, 1, 0);
                    $pdf->Cell(25, 6, $row->nm_ruangan, 1, 0);
                    $pdf->Cell(25, 6, $row->tgl_masuk, 1, 0, 'C');
                    $pdf->Cell(40, 6, $row->ket_kondisi, 1, 1);
                }
            } else {
                $pdf->Ln();
                $pdf->Ln();
                $pdf->SetFont('Arial', '', 12);
                $pdf->Cell(190, 7, 'Tidak ada data pada periode tersebut.', 0, 1, 'C');
            }
            $pdf->Output();
        } else
        if ($tgl_awal != 0 && $id_ruangan != 'all') {
            $barang = $this->db->select('*');
            $barang = $this->db->from('inventaris a');
            $barang = $this->db->join('barang b', 'b.id_barang=a.id_barang', 'left');
            $barang = $this->db->join('ruangan c', 'c.id_ruangan=a.id_ruangan', 'left');
            $barang = $this->db->join('merk d', 'd.id_merk=b.id_merk', 'left');
            $barang = $this->db->where('a.id_ruangan', $id_ruangan);
            $barang = $this->db->where('b.tgl_masuk BETWEEN "' . date('Y-m-d', strtotime($tgl_awal)) . '" and "' . date('Y-m-d', strtotime($tgl_ahir)) . '"');
            $barang = $this->db->order_by('a.id', 'asc');
            $barang = $this->db->get()->result();

            if ($barang != null) {
                $pdf->Cell(10, 7, '', 0, 1);
                $pdf->SetFont('Arial', 'B', 9);
                $pdf->Cell(10, 6, 'NO.', 1, 0, 'C');
                $pdf->Cell(28, 6, 'KODE INV.', 1, 0);
                $pdf->Cell(40, 6, 'NAMA BARANG', 1, 0);
                $pdf->Cell(20, 6, 'MERK', 1, 0);
                $pdf->Cell(25, 6, 'LOKASI', 1, 0);
                $pdf->Cell(25, 6, 'TGL. MASUK', 1, 0, 'C');
                $pdf->Cell(40, 6, 'KETERANGAN', 1, 1);
                $pdf->SetFont('Arial', '', 9);

                $X = 0;
                foreach ($barang as $row) {
                    $X += 1;
                    $pdf->Cell(10, 6, $X, 1, 0, 'C');
                    $pdf->Cell(28, 6, $row->id_inventaris, 1, 0);
                    $pdf->Cell(40, 6, $row->nm_barang, 1, 0);
                    $pdf->Cell(20, 6, $row->nm_merk, 1, 0);
                    $pdf->Cell(25, 6, $row->nm_ruangan, 1, 0);
                    $pdf->Cell(25, 6, $row->tgl_masuk, 1, 0, 'C');
                    $pdf->Cell(40, 6, $row->ket_kondisi, 1, 1);
                }
            } else {
                $pdf->Ln();
                $pdf->Ln();
                $pdf->SetFont('Arial', '', 12);
                $pdf->Cell(190, 7, 'Tidak ada data pada periode tersebut.', 0, 1, 'C');
            }
            $pdf->Output();
        } else {
            $data['ruangan'] = $this->Inventaris_model->get_all_ruangan();
            $data['_view'] = 'inventaris/cetak';
            if ($this->session->userdata("level") == 'admin') {
                $this->load->view('layouts/main', $data);
            } else {
                $this->load->view('layouts/main_user', $data);
            }
        }
    }

    function add()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'id_inventaris' => $this->input->post('id_inventaris'),
                'id_barang' => $this->input->post('id_barang'),
                'ket_kondisi' => $this->input->post('ket_kondisi'),
                'id_ruangan' => $this->input->post('id_ruangan'),
            );
            $inventaris_id = $this->Inventaris_model->add_inventaris($params);
            redirect('inventaris/index');
        } else {
            $data['ruangan'] = $this->Inventaris_model->get_all_ruangan();
            $data['barang'] = $this->Inventaris_model->get_all_barang();
            $data['_view'] = 'inventaris/add';
            if ($this->session->userdata("level") == 'admin') {
                $this->load->view('layouts/main', $data);
            } else {
                $this->load->view('layouts/main_user', $data);
            }
        }
    }

    /*
     * Editing a inventaris
     */
    function edit($id_inventaris)
    {
        // check if the inventaris exists before trying to edit it
        $data['inventaris'] = $this->Inventaris_model->get_inventaris($id_inventaris);

        if (isset($data['inventaris']['id_inventaris'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'id_inventaris' => $this->input->post('id_inventaris'),
                    'id_barang' => $this->input->post('id_barang'),
                    'ket_kondisi' => $this->input->post('ket_kondisi'),
                    'id_ruangan' => $this->input->post('id_ruangan'),
                );

                $this->Inventaris_model->update_inventaris($id_inventaris, $params);
                redirect('inventaris/index');
            } else {
                $data['ruangan'] = $this->Inventaris_model->get_all_ruangan();
                $data['barang'] = $this->Inventaris_model->get_all_barang();
                $data['_view'] = 'inventaris/edit';
                if ($this->session->userdata("level") == 'admin') {
                    $this->load->view('layouts/main', $data);
                } else {
                    $this->load->view('layouts/main_user', $data);
                }
            }
        } else
            show_error('The inventaris you are trying to edit does not exist.');
    }

    /*
     * Deleting inventaris
     */
    function remove($id_inventaris)
    {
        $inventaris = $this->Inventaris_model->get_inventaris($id_inventaris);

        // check if the inventaris exists before trying to delete it
        if (isset($inventaris['id_inventaris'])) {
            $this->Inventaris_model->delete_inventaris($id_inventaris);
            redirect('inventaris/index');
        } else
            show_error('The inventaris you are trying to delete does not exist.');
    }
}
