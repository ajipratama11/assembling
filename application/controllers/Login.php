<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
		$this->load->helper(array('url'));
		if($this->session->userdata('status') == "admin"){
			echo "<script>
                alert('Anda sudah login');
                window.location.href = '".base_url('Beranda')."';
            </script>";//Url tujuan
		}
	}
	function index(){
		$this->load->view('v_login');
	}
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		foreach($this->M_login->iduser($username) as $row){
			$iduser=$row->id_admin;
			$username = $row->username;
		}
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->M_login->cek_login("user",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'username' => $username,
				'iduser' => $iduser,
				'status' => 'admin',
				);
			$this->session->set_userdata($data_session);
 
			redirect('Beranda');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah!</div>');
                redirect('Login');
		}
	}

} 
?>