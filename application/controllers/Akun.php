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
        $this->load->model('M_akun');
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
        $data['jabatan'] = $this->db->query("SELECT * FROM jabatan")->result();
        $username = $this->input->post("username");
        $where = array(
			'username' => $username
			);
		$cek = $this->M_akun->cekusername("user",$where)->num_rows();
        if ($this->input->post('submit')) {
            if($cek != 0){
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username sudah terdaftar</div>');
                redirect('Akun/tambahAkun');
            }else{
                $this->M_akun->addAkun();
                redirect('Akun');
            }
        }
        $this->load->view('v_tambahAkun', $data);
    }
    public function hapusAkun($id_user = null){
        if ($id_user) {
            $this->M_akun->deleteAkun($id_user);
            $this->session->set_flashdata('message2', '<div class="alert alert-danger" role="alert">Berhasil Hapus</div>');
            redirect('Akun');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Akun');
        }
    }
    public function editAkun($id_user = null)
    {
        // $id_user = $this->uri->segment(3);
        if ($this->input->post('submit')) {
            $this->M_akun->updateAkun($id_user);
            redirect('Akun');
        } else {
            $data['akun'] = $this->M_akun->getById($id_user);
            $this->load->view('v_editAkun', $data);
        }  
    }
}