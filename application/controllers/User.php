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
                } else {
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
        $data['title'] = "Dashboard";
        //get table users
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('users', ['email' => $email])->row_array();

        $this->load->view('dashboard/sidebar', $data);
        $this->load->view('dashboard/navbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('dashboard/footer');
    }

    public function tracker()
    {
        $data['title'] = "Tracker";
        //get table users
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('users', ['email' => $email])->row_array();

        // Separate the @ character in the email
        $preliminaryData = $this->session->userdata('email');

        // the results of splitting values ​​on email
        $emailValue = explode("@", $preliminaryData);


        // select data by user

        $data['koordinat'] = $this->db->get('tb_marker_' . $emailValue[0])->result_array();


        $this->load->view('dashboard/sidebar', $data);
        $this->load->view('dashboard/navbar', $data);
        $this->load->view('user/tracker', $data);
        $this->load->view('dashboard/footer');
    }

    public function power()
    {
        $data['title'] = "Power";
        //get table users
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('users', ['email' => $email])->row_array();

        //check time out
        $data['active_check'] = $this->db->get_where('payment', ['email' => $email])->row_array();
        $data['waktuSekarang'] = time();

        $this->load->view('dashboard/sidebar', $data);
        $this->load->view('dashboard/navbar', $data);
        $this->load->view('user/power', $data);
        $this->load->view('dashboard/footer');
    }

    public function on()
    {

        $email = $this->session->userdata('email');

        $emailName = explode('@', $email);

        $dbStateName = $emailName[0];

        $this->db->set('state', 1);
        $this->db->update('ledstatus_' . $dbStateName);



        redirect('user/power');
    }
    public function Off()
    {
        $email = $this->session->userdata('email');

        $emailName = explode('@', $email);

        $dbStateName = $emailName[0];

        $this->db->set('state', 0);
        $this->db->update('ledstatus_' . $dbStateName);



        redirect('user/power');
    }
}
