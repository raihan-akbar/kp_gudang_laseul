<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller List Barang
 */
class Items extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $is_login = $this->session->userdata('is_login');

        if (!$is_login) {
            $this->session->set_flashdata('warning', 'Anda belum login');
            redirect(base_url('login'));
            return;
        }
    }

    public function index($page = null)
    {
        $this->session->unset_userdata('keyword');

        $data['title']              = 'La Seul - List Barang';
        $data['breadcrumb_title']   = "List Barang";
        $data['breadcrumb_path']    = 'Pendataan Barang / List Barang';
        $data['content']            = $this->items->select([
                'barang.id AS id_barang', 'barang.nama AS nama_barang', 'qty', 'harga',
                'supplier.nama AS nama_supplier'
            ])
            ->join('supplier')
            ->paginate($page)
            ->get();
        $data['total_rows']         = $this->items->count();
        $data['pagination']         = $this->items->makePagination(base_url('items'), 2, $data['total_rows']);
        $data['page']               = 'pages/items/index';

        // print_r(getUnitName(1)); exit;

        $this->view($data);
    }

    /**
     * Menampilkan barang berdasarkan ketersediannya ada/kosong
     * Param 1: string 'available' / 'empty'
     * Param 2: nilai pagination
     */
    public function availability($param, $page = null)
    {
        $this->session->unset_userdata('keyword');

        $data['title']              = 'Easy WMS - List Barang';
        $data['breadcrumb_title']   = "List Barang";
        $data['breadcrumb_path']    = 'Pendataan Barang / Ketersediaan / ' . ucfirst($param);
        $data['page']               = 'pages/items/index';

        if ($param === 'available') {
            $data['total_rows'] = $this->items->where('qty >', 0)->count();
            $data['content']    = $this->items->paginate($page)->select([
                    'barang.id AS id_barang', 'barang.nama AS nama_barang', 'qty', 'harga',
                    'supplier.nama AS nama_supplier'
                ])
                ->join('supplier')
                ->where('qty >', 0)
                ->get();
        } else {
            $data['total_rows'] = $this->items->where('qty', 0)->count();
            $data['content']    = $this->items->paginate($page)->select([
                    'barang.id AS id_barang', 'barang.nama AS nama_barang', 'qty', 'harga',
                    'supplier.nama AS nama_supplier'
                ])
                ->join('supplier')
                ->where('qty', 0)->get();
        }

        $data['pagination'] = $this->items->makePagination(
            base_url("items/availability/$param"), 4, $data['total_rows']
        );

        $this->view($data);
    }

    /**
     * Pencarian barang berdasarkan nama
     * 
     * Param berupa keyword yang diambil dari POST 
     * setelah keyword diambil dari POST, keyword tersebut diset ke dalam session
     */
    public function search($page = null)
    {
        if (isset($_POST['keyword'])) {
            $this->session->set_userdata('keyword', $this->input->post('keyword'));
        }

        $keyword = $this->session->userdata('keyword');

        if (empty($keyword)) {
            redirect(base_url('items'));
        }

        $data['title']              = 'Easy WMS - List Barang';
        $data['breadcrumb_title']   = "List Barang";
        $data['breadcrumb_path']    = "Pendataan Barang / Search / $keyword";
        $data['content'] = $this->items->select([
                'barang.id AS id_barang', 'barang.nama AS nama_barang', 'qty', 'harga',
                'supplier.nama AS nama_supplier'
            ])
            ->join('supplier')
            ->like('barang.nama', $keyword)
            ->paginate($page)
            ->get();
        $data['total_rows'] = $this->items->like('nama', $keyword)->count();
        $data['pagination'] = $this->items->makePagination(
            base_url('items/search'), 3, $data['total_rows']
        );
        $data['page'] = 'pages/items/index';

        $this->view($data);
    }
}

/* End of file Items.php */
