<?php

/**
 * Mendapatkan jumlah karyawan
 */
function getJumlahStaff()
{
    $CI =& get_instance();
    return $CI->db->get('user')->num_rows();
}

/**
 * Mendapatkan jumlah supplier
 */
function getJumlahSupplier()
{
    $CI =& get_instance();
    return $CI->db->get('supplier')->num_rows();
}

/**
 * Mendapatkan jumlah supplier
 */
function getJumlahBarang()
{
    $CI =& get_instance();
    return $CI->db->where('qty !=', 0)->get('barang')->num_rows();
}

/**
 * Mendapatkan jumlah stok
 */
function getJumlahStok()
{
    $CI =& get_instance();
    $CI->db->select_sum('qty');
    $result = $CI->db->get('barang')->row();  
    return $result->qty;
}

/**
 * Mendapatkan seluruh list satuan barang
 */
function getUnits()
{
    $CI =& get_instance();
    $CI->db->where('status', 'valid');
    return $CI->db->get('satuan')->result();
}

/**
 * Mendapatkan satuan barang berdasarkan id
 */
function getUnitName($id_satuan)
{
    $CI =& get_instance();
    $CI->db->where('id', $id_satuan);
    return $CI->db->get('satuan')->row()->nama;
}

/**
 * Mendapatkan list supplier
 */
function getSuppliers()
{
    $CI =& get_instance();
    $CI->db->where('status', 'aktif');
    return $CI->db->get('supplier')->result();
}

/**
 * Mendapatkan pendapatan bulan ini
 */
function getTodayEarning()
{
    $CI =& get_instance();

    $CI->db->select_sum('total_harga', 'total_harga');
    $CI->db->where('DATE(waktu_penjualan)', date('Y-m-d'));
    return $CI->db->get('penjualan')->row()->total_harga;
}

/**
 * Mendapatkan banyak penjualan hari ini
 */
function getTodayCountSales()
{
    $CI =& get_instance();

    $CI->db->where('DATE(waktu_penjualan)', date('Y-m-d'));
    return $CI->db->get('penjualan')->num_rows();
}

/**
 * Mendapatkan banyak menu yang disediakan
 */
function getCountMenu()
{
    $CI =& get_instance();
    return $CI->db->get('stock_barang')->num_rows();
}

/**
 * Fungsi ini mengembalikan banyak barang dan total penjualan berdasarkan
 * tipe barang (makanan/minuman) dari tabel detail_penjualan
 */
function getSalesInfoByType($type)
{
    $CI =& get_instance();
    $CI->db->select('
        COUNT(detail_penjualan.qty_jual) AS banyak, 
        SUM(detail_penjualan.subtotal_jual) as total
    ');
    $CI->db->from('detail_penjualan');
    $CI->db->join('stock_barang', 'detail_penjualan.id_barang = stock_barang.id_barang');
    $CI->db->where('stock_barang.tipe_barang', $type);
    return $CI->db->get()->row();
}

/**
 * Mengenkripsi input
 */
function hashEncrypt($input)
{
    $hash = password_hash($input, PASSWORD_DEFAULT);
    return $hash;
}

/**
 * Mendecrypt hash password dari table user
 * Mengembalikan true jika plain-text sama
 */
function hashEncryptVerify($input, $hash)
{
    if (password_verify($input, $hash)) {
        return true;
    } else {
        return false;
    }
}