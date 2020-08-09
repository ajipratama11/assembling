<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
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
        $this->load->view('v_beranda');
    }
    public function admin(){
        redirect('Admin/Beranda');
    }
}