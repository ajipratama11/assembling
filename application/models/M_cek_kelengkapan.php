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

    public function get_laporan()
    {
        return $this->db->get($this->_table)->result();
    }

    public function add_cek_kelengkapan($status)
    {
        $post = $this->input->post();
        $this->no_rekdis = $post['no_rekdis'];
        $this->nama_pasien = $post['nama_pasien'];
        $this->jenis_pelayanan = $post['jenis_pelayanan'];
        $this->asal_ruangan = $post['asal_ruangan'];
        $this->tgl_cek = $post['tgl_cek'];
        $this->nama_form = $post['nama_form'];
        $this->card_x = $post['card_x'];
        $this->inform_consent = $post['inform_consent'];
        $this->pemantauan = $post['pemantauan'];
        $this->pengkajian_kadar = $post['pengkajian_kadar'];
        $this->sbar = $post['sbar'];
        $this->skrining = $post['skrining'];
        $this->assesmen_awal = $post['assesmen_awal'];
        $this->transfer_ruanga = $post['transfer_ruangan'];
        $this->resume = $post['resume'];
        $this->ringkasan_mk = $post['ringkasan_mk'];
        $this->assesmen_dpjp = $post['assesmen_dpjp'];
        $this->pengkajian_bayi = $post['pengkajian_bayi'];
        $this->pengkajian_perawat = $post['pengkajian_perawat'];
        $this->asuhan_gizi = $post['asuhan_gizi'];
        $this->perencanaan_pasien_pulang = $post['perencanaan_pasien_pulang'];
        $this->obs_tanda_vital = $post['obs_tanda_vital'];
        $this->obs_suhu_nadi = $post['obs_suhu_nadi'];
        $this->laporan_operasi = $post['laporan_operasi'];
        $this->assesmen_prabedah = $post['assesmen_prabedah'];
        $this->assesmen_praanastasi = $post['assesmen_pranastasi'];
        $this->assesmen_keperawat = $post['assesmen_keperawatan'];
        $this->timbang_terima = $post['timbang_terima'];
        $this->set_marking = $post['set_marking'];
        $this->ceklist_keselamatan = $post['ceklist_keselamatan'];
        $this->ppi = $post['ppi'];
        $this->status = $post[$status];      
        $this->db->insert($this->_table, $this);
    }
}