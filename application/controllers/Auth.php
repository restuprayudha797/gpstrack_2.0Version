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
        $data['title'] = "Login";

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('auth/index', $data);
        $this->load->view('layout/footer');
    }

    public function Register()
    {

        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', [

            'is_unique' => 'Email yang anda gunakan sudah terdaftar'
        ]);
        $this->form_validation->set_rules('contact', 'Kontak', 'required|min_length[12]|max_length[13]|numeric', [
            'numeric' => 'Yang anda masukkan bukan nomor telepon'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password]');


        if ($this->form_validation->run() == FALSE) {


            $data['title'] = "Register";

            $this->load->view('layout/header', $data);
            $this->load->view('layout/navbar', $data);
            $this->load->view('auth/register', $data);
            $this->load->view('layout/footer');
        } else {

            $this->_Register();
        }
    }


    private function _Register()
    {
        $data = [
            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'contact' => $this->input->post('contact', true),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'is_payment' => 0,
            'is_active' => 0
        ];


        $token = password_hash('token', PASSWORD_DEFAULT);

        $user_token = [
            'email' => $this->input->post('email', true),
            'token' => $token,
            'date_create' => time()
        ];

        $this->db->insert('users', $data);

        $this->db->insert('users_token', $user_token);


        $this->_sendEmail($token, 'verify');


        $this->session->set_flashdata('auth_message', '<div class="alert alert-success" role="alert"> Akun anda berhasil dibuat silahkan cek email anda dan lakukan aktifasi</div>');
        redirect('auth');
    }

    private function _sendEmail($token, $type)
    {

        $email = $this->input->post('email', true);

        $config = [

            'protocol' => 'smtp',
            'smtp_host' => 'ssl://mail.gpstracklimbungan.site',
            'smtp_user' => 'gpstracker@gpstracklimbungan.site',
            'smtp_pass' => '^*}-OczG9Tu1',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"



        ];


        $this->load->library('email', $config);

        $this->email->from('gpstracker@gpstracklimbungan.site', 'Gpstracklimbungan');
        $this->email->to($email);
        $this->email->subject('Akun verifikasi');

        if ($type == 'verify') {

            $this->email->message('klik link ini untuk mengaktifkan akun anda : <a href="' . base_url() . 'auth/verify?email=' . $email .  '&token=' . $token . '">Aktifkan</a>');
        }




        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
        }
    }


    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');


        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        if ($user) {



            $users_token = $this->db->get_where('users_token', ['token' => $token])->row_array();


            if ($users_token) {

                if (time() - $users_token['date_create'] < (60 * 60 * 24)) {


                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('users');
                    $this->db->delete('users_token', ['email' => $email]);

                    $this->session->set_flashdata('auth_message', '<div class="alert alert-success" role="alert"> Akun anda sudah aktif, Silah Login  </div>');
                    redirect('auth');
                } else {


                    $this->db->delete('users', ['email' => $email]);
                    $this->db->delete('users_token', ['email' => $email]);

                    $this->session->set_flashdata('auth_message', '<div class="alert alert-danger" role="alert"> Akun gagal diaktifkan, Akun telah kadaluarsa silahkan Mendaftar kembali  </div>');
                    redirect('auth');
                }
            } else {

                $this->session->set_flashdata('auth_message', '<div class="alert alert-danger" role="alert"> Akun gagal diaktifkan, token aktifasi tidak sesuai  </div>');
                redirect('auth');
            }
        } else {

            $this->session->set_flashdata('auth_message', '<div class="alert alert-danger" role="alert"> Akun gagal diaktifkan, email tidak sesuai  </div>');
            redirect('auth');
        }
    }
}
