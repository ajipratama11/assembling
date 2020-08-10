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
        return $this->db->get($this->_table)->result();
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


}