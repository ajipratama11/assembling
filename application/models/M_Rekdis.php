<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Rekdis extends CI_Model
{
    private $_table = 'rekam_medis';


    function __construct()
    {
        parent::__construct();
    }

    public function get_rekdis()
    {
        return $this->db->get_where($this->_table, ['status' => 'Terbaca'])->result();
    }
    public function get_rekdis2()
    {
        return $this->db->get_where($this->_table, ['status' => 'Terhapus'])->result();
    }

    public function get_byid($no_rekdis)
    {
        return $this->db->get_where($this->_table, ['no_rekdis' => $no_rekdis])->row();
    }

    public function add_rekdis()
    {
        $post = $this->input->post();
        $this->no_rekdis = $post['no_rekdis'];
        $this->nama_pasien = $post['nama_pasien'];
        $this->tgl_lahir = $post['tgl_lahir'];
        $this->jenis_kelamin = $post['jenis_kelamin'];
        $this->alamat = $post['alamat'];
        $this->status = $post['status'];

        $this->db->insert($this->_table, $this);
    }

    public function update_rekdis($no_rekdis)
    {
        $post = $this->input->post();
        $this->no_rekdis = $post['no_rekdis'];
        $this->nama_pasien = $post['nama_pasien'];
        $this->tgl_lahir = $post['tgl_lahir'];
        $this->jenis_kelamin = $post['jenis_kelamin'];
        $this->alamat = $post['alamat'];

        $this->db->update($this->_table,$this, array("no_rekdis" => $no_rekdis));
    }

   public function hapus_sementara($status,$no_rekdis){
		 $this->db->query("UPDATE `rekam_medis` SET `status`='$status' WHERE rekam_medis.no_rekdis='$no_rekdis'");
	}
    function restore($status,$no_rekdis){
		$query = $this->db->query("UPDATE `rekam_medis` SET `status`='$status' WHERE no_rekdis='$no_rekdis'");
    }
    function hapus($no_rekdis)
    {
        return $this->db->delete($this->_table, array("no_rekdis" => $no_rekdis));
    }


}