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

    public function index()
    {
        $this->load->view('v_beranda');
    }
    public function cek_kelengkapan()
    {
        $id = $this->uri->segment(3);
        $data['judul'] = 'Cek Kelengkapan';
        $data['rm'] = $this->db->query("SELECT * FROM rekam_medis WHERE no_rekdis='$id'")->result();
        $this->load->view('v_cek_kelengkapan', $data);
    }
    public function tambah_cek_kelengkapan()
    {
        //$validation = $this->form_validation->set_rules();
        if ($this->input->post('Simpan')) {
            $status = 'Lengkap';
            $this->M_cek_kelengkapan->add_cek_kelengkapan($status);
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Cek Kelengkapan Berhasil Disimpan :)</div>');
            redirect('Laporan/laporan');
        } else if ($this->input->post('Simpan_Sementara')) {
            $status = 'Tidak Lengkap';
            $this->M_cek_kelengkapan->add_cek_kelengkapan($status);
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Cek Kelengkapan Berhasil Disimpan :)</div>');
            redirect('Laporan/laporan');
        }
    }

    public function laporan()
    {
        $data['judul'] = 'Tabel Cek Kelengkapan';
        $data['laporan'] = $this->M_cek_kelengkapan->get_laporan();
        $this->load->view('v_laporan', $data);
    }

    public function update_cekkel($no_transaksi = NULL)
    {
        $data['judul'] = 'edit cek kelengkapan';
        $data['update'] = $this->M_cek_kelengkapan->get_by_id($no_transaksi);
        $this->load->view('v_edit_cek_kelengkapan', $data);
    }

    public function update_cek_kelengkapan()
    {
        if ($this->input->post('Simpan')) {
            $status = 'Lengkap';
            $this->M_cek_kelengkapan->update_cek_kelengkapan($status);
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Cek Kelengkapan Berhasil Diubah :)</div>');
            redirect('Laporan/laporan');
        } else if ($this->input->post('Simpan_Sementara')) {
            $status = 'Tidak Lengkap';
            $this->M_cek_kelengkapan->update_cek_kelengkapan($status);
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Cek Kelengkapan Berhasil Diubah :)</div>');
            redirect('Laporan/laporan');
        }
    }

    public function hapus_cek_kelengkapan()
    {
        $no_transaksi = $this->uri->segment(3);
        $this->M_cek_kelengkapan->delete_cek_kelengkapan($no_transaksi);
        redirect('Laporan/laporan');
    }

    public function cek_rm(){
        $id = $this->input->post('no_rm');
        $cek = $this->db->query("SELECT * FROM cek_kelengkapan WHERE no_rekdis='$id'")->num_rows();
        $cek2 = $this->db->query("SELECT * FROM rekam_medis WHERE no_rekdis='$id'")->num_rows();
 
        if($cek != 1){
         if($cek2 == 1){
            echo "<script>
                  alert('Sudah Benar');
                  window.location.href = '".base_url('Laporan/cek_kelengkapan/'.$id.'')."';
              </script>";//Url tujuan
         }else{
            echo "<script>
            alert('salah');
            window.location.href = '".base_url('Beranda')."';
        </script>";//Url tujuan
         }
        }else{
            echo "<script>
            alert('Sudah ada');
            window.location.href = '".base_url('Beranda')."';
        </script>";//Url tujuan
        }
        
     }
}
