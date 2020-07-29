<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Import extends CI_Controller
{
  // construct
  public function __construct()
  {
    parent::__construct();
    // load model
    $this->load->model('Import_model', 'import');
    $this->load->model('Barang_model');
    $this->load->helper(array('url', 'html', 'form'));
  }

  public function index()
  {
    $data['file'] = null;
    $data['exceldata'] = null;
    $data['_view'] = 'import/index';
    if ($this->session->userdata("level") == 'admin') {
      $this->load->view('layouts/main', $data);
    } else {
      $this->load->view('layouts/main_user', $data);
    }
  }

  public function importFile()
  {

    if ($this->input->post('submit')) {

      $path = 'resources/uploads/';
      require_once APPPATH . "/third_party/PHPExcel.php";
      $config['upload_path'] = $path;
      $config['file_name'] = 'barang' . date('dmY');
      $config['overwrite']            = true;
      $config['allowed_types'] = 'xlsx|xls|csv';
      $config['remove_spaces'] = TRUE;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('uploadFile')) {
        $error = array('error' => $this->upload->display_errors());
      } else {
        $data = array('upload_data' => $this->upload->data());
      }
      if (empty($error)) {
        if (!empty($data['upload_data']['file_name'])) {
          $import_xls_file = $data['upload_data']['file_name'];
        } else {
          $import_xls_file = 0;
        }
        $inputFileName = $path . $import_xls_file;

        try {
          $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
          $objReader = PHPExcel_IOFactory::createReader($inputFileType);
          $objPHPExcel = $objReader->load($inputFileName);
          $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
          $flag = true;
          $i = 1;
          foreach ($allDataInSheet as $value) {
            if ($flag) {
              $flag = false;
              continue;
            }
            $inserdata[$i]['nm_barang'] = $value['A'];
            $inserdata[$i]['id_kategori'] = $value['B'];
            $inserdata[$i]['id_merk'] = $value['C'];
            $inserdata[$i]['id_satuan'] = $value['D'];
            $inserdata[$i]['stok'] = $value['E'];
            $xls_date = $value['F'];
            $unix_date = ($xls_date - 25569) * 86400;
            $xls_date = 25569 + ($unix_date / 86400);
            $unix_date = ($xls_date - 25569) * 86400;
            $inserdata[$i]['tgl_masuk'] = date("Y-m-d", $unix_date);;
            $inserdata[$i]['id_ruangan'] = $value['G'];
            $i++;
          }
          $data['file'] = $inputFileName;
          $data['exceldata'] = $inserdata;
          $result = $this->import->importData($inserdata);
          if ($result) {
            echo "Imported successfully";
            $result = 0;
          } else {
            echo "ERROR !";
            $result = 0;
          }
        } catch (Exception $e) {
          die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
            . '": ' . $e->getMessage());
        }
      } else {
        echo $error['error'];
      }
    }
    $jumlah_data = $this->Barang_model->jumlah_data();
            $config['base_url'] = base_url() . 'barang/index/';
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
            $data['barang'] = $this->Barang_model->get_all_barang($config['per_page'], $from);
            // $data['barang'] = $this->Barang_model->get_all_barang();

            $data['_view'] = 'barang/index';
            if ($this->session->userdata("level") == 'admin') {
                $this->load->view('layouts/main', $data);
            } else {
                $this->load->view('layouts/main_user', $data);
            }
  }
}
