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
    public function add_cekkel()
    {
        $tambahcekkel = $this->M_cek_kelengkapan;
        $validation = $this->form_validation;
        $validation->set_rules($tambahcekkel->rules());
        if ($validation->run()) {
            $tambahcekkel->add_cekkel();
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Cek Kelengkapan Berhasil Disimpan :)</div>');
            redirect('Data/tabel_rekdis');
        }
    }

    public function tabel_cekkel()
    {
        $data['judul'] = 'Tabel Cek Kelengkapan';
        $data['cekkel'] = $this->M_cek_kelengkapan->get_cekkel();
        $this->load->view('v_tabel_cekkelengkapan', $data);
    }
}