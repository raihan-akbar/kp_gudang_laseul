<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Outputs_model extends MY_Model 
{
    public $table = 'barang_keluar';
    public function laporan_keluar($tanggal_awal, $tanggal_akhir) {
        // Query database untuk mengambil mutasi barang keluar dari rentang tanggal tertentu
        $query = $this->db->query("
            SELECT
                user.nama as nama_user,
                bk.waktu,
                barang.nama as nama_barang,
                dbk.id_barang_keluar,
                dbk.qty
            FROM
                barang_keluar bk
            JOIN
            	user ON user.id = bk.id_user
            JOIN
                barang_keluar_detail dbk ON bk.id = dbk.id_barang_keluar
            JOIN
            	barang ON barang.id = dbk.id_barang
            WHERE
                bk.waktu BETWEEN '$tanggal_awal' AND '$tanggal_akhir'
        ");
        return $query->result_array();
    }

}

/* End of file Outputs_model.php */
