<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function index()
    {
        $this->load->view('Auth/login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($this->auth_model->login($username, $password)) {
            redirect('home');
        } else {
            $this->session->set_flashdata('error', 'Username atau Password salah');
            redirect('auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|is_unique[tbl_user.username]');
        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|required|min_length[3]|matches[password2]',
            ['matches' => 'password tidak sama']
        );
        $this->form_validation->set_rules(
            'password2',
            'Password',
            'trim|required|min_length[3]'
        );
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');

        if ($this->form_validation->run() == true) {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $this->auth_model->register($username, $password, $email, $nama);
            $this->session->set_flashdata('success_register', 'proses pendaftaran berhasil');
            redirect('auth');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('auth#content1');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('is_login');
        redirect('auth');
    }
}
