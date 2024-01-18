<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Controller Tambah Supplier
 */
class Supplier extends MY_Controller
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

    public function index()
    {
        if ($this->session->userdata('role') != 'admin') { 
            $this->session->set_flashdata('warning', 'Anda tidak memiliki akses ke menu registrasi');
            redirect(base_url('home'));
            return;
        }

        if (!$_POST) {
            $input = (object) $this->supplier->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        if (!$this->supplier->validate()) {     // Jika validasi gagal maka arahkan ke form register lagi
            $data['title'] = 'Easy WMS - Register Supplier';
            $data['input'] = $input;
            $data['page']  = 'pages/supplier/index';
            $data['breadcrumb_title']   = 'Register Supplier';
            $data['breadcrumb_path']    = 'Manajemen Supplier / Register Supplier';

            return $this->view($data);
        }

        // Input data
        if ($this->supplier->run($input)) {
            $this->session->set_flashdata('success', 'Berhasil melakukan registrasi supplier');
            redirect(base_url('supplier'));
        } else {
            $this->session->set_flashdata('error', 'Oops terjadi suatu kesalahan');
            redirect(base_url('supplier'));
        }
    }

    public function reset()
    {
        redirect(base_url('supplier'));
    }
}
    
/* End of file Suppliers.php */
