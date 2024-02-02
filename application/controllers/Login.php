<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $is_login = $this->session->userdata('is_login');

        if ($is_login) {
            redirect(base_url('home'));
            return;
        }
    }
    
    public function index()
    {
        if (!$_POST) {
            $input = (object) $this->login->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        if (!$this->login->validate()) {
            $data['title'] = 'Login - La Seul Plus';
            $data['input'] = $input;

            return $this->view($data, true);
        }

        if ($this->login->run($input)) {
            $this->session->set_flashdata('success', 'Berhasil melakukan login');
            redirect(base_url('home'));
        } else {
            $this->session->set_flashdata('error', 'E-mail/Password salah atau akun anda sedang tidak aktif');
            redirect(base_url('login'));
        }
    }

    public function forgot_password($token=null){
        $data['title'] = 'La Seul - Password Recover';
        $this->load->view('pages/auth/forgot_password', $data);
    }

    function recover_password(){
        $email = $this->input->post('email');
        $where = array('email' => $email);
        $check_address = $this->db->get_where('user',$where)->num_rows();

        if ($check_address == 1) {
            $this->do_recover_password($email);
        }else{
            $this->session->set_flashdata('error', 'E-mail Tidak Ditemukan');
            redirect(base_url('forgot_password'));

        }

    }

    private function do_recover_password($email){
        $seed = str_split(
            'abcdefghijklmnopqrstuvwxyz'.
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.
            '0123456789');
        shuffle($seed);
        $rand = '';
        foreach (array_rand($seed, 18) as $k) $rand .= $seed[$k];
        $where = array('email' => $email);
        $user = $this->db->get_where('user',$where)->result();
        foreach ($user as $u) {

            date_default_timezone_set("Asia/Jakarta");
            $created = date('Y-m-d');
            $period  = strtotime('+1 days', strtotime($created));
            $expired = date('Y-m-d', $period);

            $data = array(
                'id_user'  => $u->id,
                'token'    => $rand,
                'created'  => $created,
                'expired'  => $expired,
            );

            $this->db->insert('user_recover',$data);
            $this->mail_recover($email,$expired,$rand);
        }

    }

    private function mail_recover($email,$expired,$rand){
        $where = array('email' => $email);
        $user = $this->db->get_where('user',$where)->result();

        foreach ($user as $u) {
          $config['mailtype']    = 'html';
          $config['protocol']    = 'smtp';
          $config['smtp_host']   = 'mail.tdpindonesia.id';
          $config['smtp_user']   = 'dev@tdpindonesia.id';
          $config['smtp_pass']   = 'TDP#Indonesia123';
          $config['smtp_port']   = 465;
          $config['smtp_crypto'] = 'ssl';
          $config['charset']     = 'utf-8';
          $config['newline']     = "\r\n";

          $this->load->library('email', $config);

          $adjusted_expired = date("d,F Y", strtotime($expired));

          $data = array(
            'token' => $rand,
            'expired' => $adjusted_expired,
            'nama' => $u->nama
            );

            $mail_content = $this->load->view('layouts/mail', $data, TRUE);

            $this->email->from('dev@tdpindonesia.id', 'La Seul+');
            $this->email->to($email);
            $this->email->subject('Password Reset');
            $this->email->message($mail_content);

            if($this->email->send()) {
               $this->session->set_flashdata('success', 'Link Reset Password Telah Dikirim ke : '.$email);
               redirect(base_url('forgot_password'));
            }
            else {
               echo $this->email->print_debugger();
            }
        }

    }

    public function recover_password_page($token=null){
        date_default_timezone_set("Asia/Jakarta");
        if ($token != null) {
            $where = array('token' => $token);
            $token_check = $this->db->get_where('user_recover',$where)->num_rows();
            if ($token_check >= 1) {
                $token_data = $this->db->get_where('user_recover',$where)->result();
                foreach ($token_data as $td) {}
                $expired = date("dmY", strtotime($td->expired));
                $today = date("dmY");
                if ($today >= $expired) {
                   $this->session->set_flashdata('error', 'Link Expired!');
                    redirect(base_url('forgot_password')); 
                }else{
                    $where_user = array('id' => $td->id_user);
                    $get_user = $this->db->get_where('user',$where_user)->result();
                    $adjusted_expired = date("dmy", strtotime($td->expired));
                    $adjusted_created = date("dmy", strtotime($td->created));
                    foreach ($get_user as $i) {}
                        $data_session = array(
                            'id' => $i->id,
                            'id' => $i->email,
                            'nama' => $i->nama,
                            'adjusted_expired' => $adjusted_expired,
                            'adjusted_created' => $adjusted_created
                        );

                        $this->session->set_userdata($data_session);
                        $this->load->view('pages/auth/recover_password');
                }

            }else{
                // $this->session->set_flashdata('error', 'Halaman Tidak Ditemukan! Mungkin Rusak,Expired,Salah URL');
                $this->session->set_flashdata('error', '1');
                redirect(base_url('forgot_password'));
            }

        }else{
            // $this->session->set_flashdata('error', 'Halaman Tidak Ditemukan! Mungkin Rusak,Expired,Salah URL');
                $this->session->set_flashdata('error', '2');
            redirect(base_url('forgot_password'));
        }
    }

}/* End of file Login.php */