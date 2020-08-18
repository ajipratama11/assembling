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
        //datakeseluruhan
        $data1 = $this->db->query("SELECT * FROM `cek_kelengkapan`")->result();
        $datakeseluruhan = count($data1);
        $data['seluruh'] = $datakeseluruhan;
        //data lengkap
        $data2 = $this->db->query("SELECT * FROM `cek_kelengkapan` WHERE cek_kelengkapan.status='Lengkap'")->result();
        $datalengkap = count($data2);
        if ($datalengkap < 1) {
            $data['persenL'] = 0;
        } else {
            $data['persenL'] = substr(($datalengkap / $datakeseluruhan * 100), 0, 5);
        }
        //Tidak Lengkap
        $data3 = $this->db->query("SELECT * FROM `cek_kelengkapan` WHERE cek_kelengkapan.status='Tidak Lengkap'")->result();
        $datatidaklengkap = count($data3);
        if ($datatidaklengkap < 1) {
            $data['persenTL'] = 0;
        } else {
            $data['persenTL'] = substr(($datatidaklengkap / $datakeseluruhan * 100), 0, 5);
        }
        $this->load->view('v_beranda', $data);
    }
    public function admin(){
        redirect('Admin/Beranda');
    }
}