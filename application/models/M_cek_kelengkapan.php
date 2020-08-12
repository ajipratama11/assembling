<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_cek_kelengkapan extends CI_Model
{
    private $_table = 'cek_kelengkapan';

    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [

            [
                'field' => 'no_transaksi',
                'label' => 'No Transaksi',
                'rules' => 'required'
            ],

        ];
    }

    public function get_cekkel()
    {
        return $this->db->get($this->_table)->result();
    }

    public function add_cekkel()
    {
        $post = $this->input->post();
        $this->no_transaksi = $post['no_transaksi'];
        $this->no_rekdis = $post['no_rekdis'];
        $this->nama_pasien = $post['nama_pasien'];
        $this->jenis_pelayanan = $post['jenis_pelayanan'];
        $this->asal_ruangan = $post['asal_ruangan'];
        $this->tgl_cek = $post['tgl_cek'];
        $this->card_x = $post['card_x'];
        $this->inform_consent = $post['inform_consent'];
        $this->pemantauan = $post['pemantauan'];
        $this->pengkajian_kadar = $post['pengkajian_kadar'];
        $this->sbar = $post['sbar'];
        $this->skrining = $post['skrining'];
        
        $this->db->insert($this->_table, $this);
    }
}