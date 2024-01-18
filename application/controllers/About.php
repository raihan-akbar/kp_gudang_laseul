<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller 
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
        $data['title']              = 'Easy WMS - About us';
        $data['breadcrumb_title']   = "About us";
        $data['breadcrumb_path']    = 'Extra / About us';
        $data['page']               = 'pages/about/index';

        $this->view($data);
    }
}

/* End of file About.php */
