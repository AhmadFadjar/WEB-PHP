<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header',);
            $this->load->view('layout/sidebar');
            $this->load->view('auth/login');
            $this->load->view('layout/footer');
        } else {
            // validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $users = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($users) {
            if ($users['status'] == 1) {
                if (password_verify($password, $users['password'])) {
                    $data = [
                        'username' => $users['username'],
                        'role' => $users['role']
                    ];
                    $this->session->set_userdata($data);
                    if ($this->session->userdata('role') == 'public') {
                        redirect('users/tampil');
                    } elseif ($this->session->userdata('role') == 'administrator') {
                        redirect('users');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> This username has not been activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Username is not registered!</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => 'Password to Short!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'is_unique' => 'This email has already registered!'
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('auth/registration');
            $this->load->view('layout/footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'created_at' => date('Y-m-d H:i:s'),
                'last_login' => date('Y-m-d H:i:s'),
                'status' => 1,
                'role' => $this->input->post('role')
            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Congratulation! your account has been created. Please Login</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->load->model('Users_model', 'users');
        $data = array('last_login' => date('Y-m-d H:i:s'), 'username' => $this->session->userdata('username'));
        $this->users->lastLogin($data);
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logout</div>');
        redirect('auth');
    }
}
