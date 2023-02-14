<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{


    public function index()
    {

        $this->session->unset_userdata('email');
        
        // arahkan ke form login kembali
        redirect('auth');
    }
}
