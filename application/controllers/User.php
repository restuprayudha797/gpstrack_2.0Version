<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    // ===== START CONSTRUCT FUNCTION =====

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('email')) {
            $user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

            if ($user['is_active'] == 1) {

                if ($user['is_payment'] != 1) {
                    redirect('auth/payment');
                }
            } elseif ($user['is_active'] == 2) {

                redirect('admin');
            } else {
                $this->session->set_flashdata('auth_message', '<div class="alert alert-danger" role="alert">Akun anda belum diaktifasi, silahkan cek email dan lakukan aktifasi</div>');
                redirect('auth');
            }
        } else {
            redirect('auth');
        }
    }

    public function index()
    {
        // $data['title'] = "Application";

        // $this->load->view('layout/header', $data);
        // $this->load->view('layout/navbar', $data);
        // $this->load->view('user/index', $data);
        // $this->load->view('layout/footer');
    }
}
