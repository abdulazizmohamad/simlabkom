<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //   if (! isset($_SESSION)) {
        //      session_start();
        //   }
        //   $this->load->model(array('user_model'));
        //   if ($this->session->userdata('nama')) {
        //   redirect('dashboard');
        //   }

        $this->load->model('user_model');
    }
    function index()
    {
        $session = $this->session->userdata('nama');
        if ($session == '') {
            $this->load->view('login/login');
        } else {
            redirect('dashboard');
        }
        //$this->load->view('login/login');
    }
    function proses()
    {
        $this->form_validation->set_rules('username', 'username', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $usr = $this->input->post('username');
            $psw = $this->input->post('password');
            $u = $usr;
            $p = md5($psw);
            $cek = $this->user_model->cek($u, $p);
            if ($cek->num_rows() > 0) {
                //login berhasil, buat session
                foreach ($cek->result() as $qad) {
                    $sess_data['logged_in'] = TRUE;
                    $sess_data['id_user'] = $qad->id_user;
                    $sess_data['nama'] = $qad->nama;
                    $sess_data['username'] = $qad->username;
                    $sess_data['level'] = $qad->level;
                    $sess_data['foto'] = $qad->foto;
                    $sess_data['tgl_daftar'] = $qad->tgl_daftar;
                    $this->session->set_userdata($sess_data);
                }
                // set temp data  
                $this->session->set_tempdata('coupon_code', 'XYEceQ!', 30);
                // mark existing data as temp data  
                $this->session->set_userdata('coupon_code', 'XYEceQ!');
                $this->session->mark_as_temp('coupon_code', 30);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
                redirect('login');
            }
        }
    }
    public function tempdata()
    {
        // set temp data  
        $this->session->set_tempdata('coupon_code', 'XYEceQ!', 30);
        // mark existing data as temp data  
        $this->session->set_userdata('coupon_code', 'XYEceQ!');
        $this->session->mark_as_temp('coupon_code', 30);
        // get temp data  
        echo $this->session->tempdata('coupon_code');
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
