<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Login Page";

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('auth/index', $data);
        $this->load->view('layout/footer');
    }

    public function test()
    {
        $data['title'] = "Login Page";

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('auth/index', $data);
        $this->load->view('layout/footer');
    }

}
