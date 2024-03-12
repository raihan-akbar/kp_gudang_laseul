<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inputs_model extends MY_Model 
{
    public $table = 'barang_masuk';

    public function laporan_masuk($tanggal_awal, $tanggal_akhir) {
        // Query database untuk mengambil mutasi barang masuk dari rentang tanggal tertentu
        $query = $this->db->query("
            SELECT
                user.nama as nama_user,
                bm.waktu,
                barang.nama as nama_barang,
                dbm.id_barang_masuk,
                supplier.nama as nama_supplier,
                dbm.qty,
                dbm.subtotal
            FROM
                barang_masuk bm
            JOIN
                user ON user.id = bm.id_user
            JOIN
                barang_masuk_detail dbm ON bm.id = dbm.id_barang_masuk
            JOIN
                barang ON barang.id = dbm.id_barang
            JOIN
                supplier ON supplier.id = barang.id_supplier
            WHERE
                bm.waktu BETWEEN '$tanggal_awal' AND '$tanggal_akhir'
        ");
        return $query->result_array();

    }
}

/* End of file Inputs_model.php */
