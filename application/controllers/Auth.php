<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    // ===== START CONSTRUCT FUNCTION =====

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('email')) {

            $user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

            if ($user['is_active'] == 1) {

                if ($user['is_payment'] == 1) {
                    redirect('user');
                }
            } elseif ($user['is_active'] == 2) {

                redirect('admin');
            } else {
                $this->session->set_flashdata('auth_message', '<div class="alert alert-danger" role="alert">Akun anda belum diaktifasi, silahkan cek email dan lakukan aktifasi</div>');
            }
        }
    }

    // ===== END CONSTRUCT FUNCTION =====


    // ===== START LOGIN =====

    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');

        if ($this->form_validation->run() == FALSE) {

            $data['title'] = "Login";

            $this->load->view('layout/header', $data);
            $this->load->view('layout/navbar', $data);
            $this->load->view('auth/index', $data);
            $this->load->view('layout/footer');
        } else {

            $this->_IsLogin();
        }
    }

    private function _IsLogin()
    {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        if ($user) {
            // Check if the email entered by the user is in the database

            // Check if the passwords match
            if (password_verify($password, $user['password'])) {

                // check the account whether it is active or not
                if ($user['is_active'] == 1) {

                    // Check if the user has made a payment
                    if ($user['is_payment'] == 1) {
                        // If it is already

                        $data = [
                            'email' => $user['email']
                        ];

                        $this->session->set_userdata($data);

                        redirect('user');
                    } else {
                        // if not
                        $data = [

                            'email' => $user['email']

                        ];

                        $this->session->set_userdata($data);

                        redirect('auth/payment');
                    }
                } elseif ($user['is_active'] == 2) {

                    $data = [

                        'email' => $user['email']

                    ];

                    $this->session->set_userdata($data);

                    redirect('admin');
                } else {
                    $this->session->set_flashdata('auth_message', '<div class="alert alert-danger text-center" role="alert">Akun anda belum diaktifasi, silahkan cek email dan lakukan aktifasi</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('auth_message', '<div class="alert alert-danger text-center" role="alert">Password tidak sesuai</div>');
                redirect('auth');
            }

            // end check password


        } else {
            // notify the user the email entered does not exist

            // notify user
            $this->session->set_flashdata('auth_message', '<div class="alert alert-danger text-center" role="alert">Email tidak terdaftar</div>');
            redirect('auth');
        }
    }

    // ===== END LOGIN =====


    // ===== START REGISTER =====

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
    }

    // ===== END REGISTER =====


    // ===== START SEND EMAIL =====

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

            $this->email->message('klik link ini untuk mengaktifkan akun anda : <a href="' . base_url() . 'auth/verify?email=' . $email . '&token=' . $token . '">Aktifkan</a>');
        }




        if ($this->email->send()) {
            return true;
            $this->session->set_flashdata('auth_message', '<div class="alert alert-success" role="alert"> Akun anda berhasil dibuat silahkan cek email anda dan lakukan aktifasi</div>');
        } else {
            echo $this->email->print_debugger();
            $this->session->set_flashdata('auth_message', '<div class="alert alert-danger" role="alert"> Akun anda gagal dibuat silahkan cek email anda dan lakukan aktifasi</div>');
        }
    }

    // ===== END SEND EMAIL =====


    // ===== START VERIFY EMAIL ACCOUNT =====

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
    // ===== END VERIFY EMAIL ACOUNT =====


    // ===== START PAYMENT =====

    public function payment()
    {
        if (!$this->session->userdata('email')) {
            redirect('auth');
        } else {
            $user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            if ($user['is_payment'] == 1) {
                redirect('auth');
            } else {
                $data['title'] = "Pembayaran";

                $this->load->view('layout/header', $data);
                $this->load->view('layout/navbar', $data);
                $this->load->view('auth/payment', $data);
                $this->load->view('layout/footer');
            }
        }
    }
    // ===== END PAYMENT =====


    // ===== Start Pay ======

    public function pay()
    {
        $user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();


        // Cek apakah user ada mengupload gambar
        $upload_bukti =   $_FILES['bukti']['name'];

        $bukti = 'kosong';

        if ($upload_bukti) {

            $config['allowed_types'] = 'jpg|png|jpeg|pdf|doc|docx';
            $config['max_size']     = '2024';
            $config['upload_path'] = './assets/images/bukti';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('bukti')) {

                $bukti = $this->upload->data('file_name');
            } else {

                echo $this->upload->display_errors();
            }
        }

        // akhir dari pengecekan gambar

        if ($bukti == 'kosong') {

            $this->session->set_flashdata('auth_message', '<div class="alert alert-danger" role="alert">
            <p>Pastikan yang anda upload adalah gambar dan type :</p>
            <p>(.jpg | .jpeg | .png | .pdf | .doc | . docx)</p> </div>');
            redirect('auth/payment');
        } else {
            $data = [
                'package' => 4,
                'bukti' => $bukti,
                'email' => $user['email'],
                'purchase_date' => time(),
                'role_payment' => 0,
            ];

            $this->db->insert('payment', $data);

            redirect('auth/payment');
        }
    }




    // ===== End Pay ======


    public function forgetPass()
    {
        $data['title'] = "Forget";

        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('auth/forget-pass', $data);
        $this->load->view('layout/footer');
    }
}
