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


    // start Konfirmasi Action
    public function payment()
    {
        //get table users
        $data['title'] = "Pembayaran";
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('users', ['email' => $email])->row_array();
        $data['payment'] = $this->db->get_where('payment', ['role_payment' => 0])->result_array();

        $this->load->view('dashboard/sidebar', $data);
        $this->load->view('dashboard/navbar', $data);
        $this->load->view('admin/payment', $data);
        $this->load->view('dashboard/footer');
    }


    public function Konfirmasi($id)
    {



        $this->load->dbforge();


        $payment = $this->db->get_where('payment', ['id_payment' => $id])->row_array();
        $userActive = $this->db->get_where('user_active', ['email' => $payment['email']])->row_array();




     

        if ($userActive) {

            if ($payment['package'] == 1) {

                $time = time() + 60 * 60 * 24 * 7;
            } elseif ($payment['package'] == 2) {

                $time = time() + 60 * 60 * 24 * 30;
            }elseif ($payment['package'] == 3) {
               
                $time = time() + 60 * 60 * 24 * 360;
            }

            $data = [
                'package' => payment['package'],
                'purchase_date' => time(),
                'time_out' => $time

            ];

            $this->db->where('email', $payment['email']);
            $this->db->update('payment', $data);
        } else {


            // insert data to user_active

            $data = [
                'email' => $payment['email'],
                'package' => $payment['package'],
                'purchase_date' => time(),
                'time_out' => time() + 60 * 60 * 24 * 3
            ];
            $this->db->insert('user_active', $data);

            // end insert data to user_active

            // update is_active user
            $data = [
                'is_payment' => 1,
            ];
    
            $this->db->where('email', $payment['email']);
            $this->db->update('users', $data);

            // end update is_active user





            
                            // Separate the @ character in the email
                            $preliminaryData = $payment['email'];

                            // the results of splitting values ​​on email
                            $emailValue = explode("@", $preliminaryData);
            
                    // add new table for user tracking
                    $tbMarker = [
                        'id' => [
                                'type' => 'INT',
                                'constraint' => 11,
                                'auto_increment' => TRUE
                        ],
                        'lat' => [
                                'type' => 'VARCHAR',
                                'constraint' => '128'
                              
                        ],
                        'lng' => [
                                'type' =>'VARCHAR',
                                'constraint' => '128'
                                
                        ],
                        'spd' => [
                                'type' => 'VARCHAR',
                                'constraint' => '128'
            
                              
                        ],
                        'datetime' => [
                                'type' => 'DATETIME'
                                
            
                              
                                ]
                    ];
                    $this->dbforge->add_key('id', TRUE);
            
                $this->dbforge->add_field($tbMarker);
                $this->dbforge->create_table('tb_marker_' . $emailValue[0]);
                // end add table tracking
            
            
                        // add new table for user power
                        $ledStatus = [
                            'ID' => [
                                    'type' => 'INT',
                                    'constraint' => 11,
                                    'auto_increment' => TRUE
                            ],
                            'color' => [
                                    'type' => 'VARCHAR',
                                    'constraint' => '20'
                                  
                            ],
                            'state' => [
                                    'type' =>'INT',
                                    'constraint' => '1'
                                    
                            ]
                        ];
                        $this->dbforge->add_key('ID', TRUE);
                
                    $this->dbforge->add_field($ledStatus);
                    $this->dbforge->create_table('ledStatus_' . $emailValue[0]);
            
                    $data1 = [
                        'color' => 'blue',
                        'state' => '1'
                ];
                $this->db->insert('ledStatus_' . $emailValue[0], $data1);
            
                    $data2 = [
                        'color' => 'red',
                        'state' => '1'
                ];
                $this->db->insert('ledStatus_' . $emailValue[0], $data2);
            
                    $data3 = [
                        'color' => 'green',
                        'state' => '1'
                ];
                
            
                $this->db->insert('ledStatus_' . $emailValue[0], $data3);
                    
            
                    // end add table power

        }

        $data = [
            'role_payment' => 1,
        ];

        $this->db->where('id_payment', $id);
        $this->db->update('payment', $data);

        redirect('admin/payment');
    }


    // end Konfirmasi Action












































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
        $this->load->view('admin/report', $data);
        $this->load->view('dashboard/footer');
    }
}
