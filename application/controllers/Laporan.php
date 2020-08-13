<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_cek_kelengkapan');
        // if($this->session->userdata('status') != "admin"){
        // 	echo "<script>
        //         alert('Anda harus login terlebih dahulu');
        //         window.location.href = '".base_url('Owner_controller/A_login')."';
        //     </script>";//Url tujuan
        // }
    }

    public function index(){
        $this->load->view('v_beranda');
    }
    public function cek_kelengkapan(){
        $data['judul'] = 'Cek Kelengkapan' ;
        $this->load->view('v_cek_kelengkapan', $data);
    }
    public function tambah_cek_kelengkapan(){
        if ($this->input->post('Simpan')) {
            $status = 'Lengkap';
            $this->M_data->tambahCekKelengkapan();
            redirect('Akun');
        } else if($this->input->post('Simpan_Sementara')) {
            $status = 'Tidak Lengkap';
            $this->M_data->tambahCekKelengkapan();
            redirect('Akun');
        }  
    }

    public function Laporan()
    {
        $data['judul'] = 'Tabel Cek Kelengkapan';
        $data['cekkel'] = $this->M_cek_kelengkapan->get_cekkel();
        $this->load->view('v_tabel_cekkelengkapan', $data);
    }
}