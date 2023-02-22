<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    // ===== START CONSTRUCT FUNCTION =====

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('email')) {

            $user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();



            if ($user['is_active'] == 1) {
                redirect('user');
            } elseif ($user['is_active'] == 2) {
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
        // Disini untuk dasboard admin ya yas
        // iya yud

        //get table users
        $data['title'] = "User Data";
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('users', ['email' => $email])->row_array();

        $this->load->view('dashboard/sidebar', $data);
        $this->load->view('dashboard/navbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('dashboard/footer');
    }

    public function payment()
    {
        //get table users
        $data['title'] = "Pembayaran";
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('users', ['email' => $email])->row_array();

        $this->load->view('dashboard/sidebar', $data);
        $this->load->view('dashboard/navbar', $data);
        $this->load->view('admin/payment', $data);
        $this->load->view('dashboard/footer');
    }

    public function serialNumber()
    {
        //get table users
        $data['title'] = "Serial Number";
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('users', ['email' => $email])->row_array();

        $this->load->view('dashboard/sidebar', $data);
        $this->load->view('dashboard/navbar', $data);
        $this->load->view('admin/serialNumber', $data);
        $this->load->view('dashboard/footer');
    }

    public function report()
    {
        //get table users
        $data['title'] = "Laporan";
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('users', ['email' => $email])->row_array();

        $this->load->view('dashboard/sidebar', $data);
        $this->load->view('dashboard/navbar', $data);
        $this->load->view('admin/laporan', $data);
        $this->load->view('dashboard/footer');
    }
}
