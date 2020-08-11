<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_Rekdis');
        // if($this->session->userdata('status') != "admin"){
        // 	echo "<script>
        //         alert('Anda harus login terlebih dahulu');
        //         window.location.href = '".base_url('Owner_controller/A_login')."';
        //     </script>";//Url tujuan
        // }
    }

    public function index()
    {
        $this->load->view('v_beranda');
    }
    public function dataterhapus()
    {
        $this->load->view('v_data_terhapus');
    }
    public function formterhapus()
    {
        $this->load->view('v_form_terhapus');
    }

    // public function rekdis() 
    // {
    //     $data['judul'] = 'Rekam Medis';
    //     $this->load->view('v_rekam_medis', $data);
    // }

    public function add_rekdis()
    {
        $data['judul'] = 'Rekam Medis';
        $validation = $this->form_validation->set_rules('no_rekdis', 'No Rekam Medis', 'required|is_unique[rekam_medis.no_rekdis]|max_length[8]', [
            'is_unique' => 'No Rekam Medis sudah terpakai',
            'required' => 'No Rekam Medis Tidak Boleh Kosong',
            'max_length' => 'No Rekam Medis tidak lebih dari 8 Karakter!'
        ]);
        $validation = $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required', [
            'required' => 'Nama Pasien Tidak boleh kosong'
        ]);

        $tambahrekdis = $this->M_Rekdis;
        if ($validation->run()) {
            $tambahrekdis->add_rekdis();
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Rekam Medis Berhasil Disimpan :)</div>');
            redirect('Data/tabel_rekdis');
        }

        $this->load->view('v_rekam_medis', $data);
    }

    public function tabel_rekdis()
    {
        $data['judul'] = 'tabel rekam medis';
        $data['rekdis'] = $this->M_Rekdis->get_rekdis();
        $this->load->view('v_tabel_rekdis', $data);
    }

    public function update_rekdis($no_rekdis = null)
    {
        $data['judul'] = 'edit rekam medis';
        $data['rekdis'] = $this->M_Rekdis->get_byid($no_rekdis);
        $this->load->view('v_edit_rekdis', $data);
    }

    public function edit()
    {
        // $validation = $this->form_validation->set_rules('no_rekdis', 'No Rekam Medis', 'required|is_unique[rekam_medis.no_rekdis]|max_length[8]', [
        //     'is_unique' => 'No Rekam Medis sudah terpakai',
        //     'required' => 'No Rekam Medis Tidak Boleh Kosong',
        //     'max_length' => 'No Rekam Medis tidak lebih dari 8 Karakter!'
        // ]);
        // $validation = $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required', [
        //     'required' => 'Nama Pasien Tidak boleh kosong'
        // ]);
        $updaterekdis = $this->M_Rekdis;
        // if ($validation->run()) {
        $updaterekdis->update();
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Rekam Medis Berhasil Diubah :)</div>');
        redirect('Data/tabel_rekdis');
        //}
    }
}
