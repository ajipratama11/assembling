<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        if($this->session->userdata('status') != "admin"){
        	echo "<script>
                alert('Anda harus login terlebih dahulu');
                window.location.href = '".base_url('Login')."';
            </script>";//Url tujuan
        }
    }

    public function index(){
        $data['jabatan'] = $this->session->userdata('jabatan');
        $data['user'] = $this->db->query("SELECT * FROM user JOIN jabatan ON user.id_jabatan=jabatan.id_jabatan")->result();
        $this->load->view('v_akun',$data);
    }
    public function admin(){
        redirect('Admin/Beranda');
    }
    public function tambahAkun()
    {
        if ($this->input->post('submit')) {
            $this->M_Gtk->addAkun();
            redirect('Akun');
        }
        $this->load->view('v_tambahAkun');
    }
}