<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->helper(array('url'));
        // if($this->session->userdata('status') != "admin"){
        // 	echo "<script>
        //         alert('Anda harus login terlebih dahulu');
        //         window.location.href = '".base_url('Owner_controller/A_login')."';
        //     </script>";//Url tujuan
        // }
    }

    public function index()
    {
        $this->db->join('kategori', 'kategori.id_kategori=galeri.id_kategori');
        $this->db->limit('8');
        $data['galeri'] = $this->db->get('galeri')->result();
        $this->load->view('Customer/v_beranda', $data);
    }
}
