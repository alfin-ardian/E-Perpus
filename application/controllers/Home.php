<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->model('home_model');
        $this->home_model->getData();
        $this->auth_model->cek_login();
    }

    public function index()
    {

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('home');
        $this->load->view('template/footer');
    }

    public function user()
    {
        $data['user'] = $this->home_model->getData();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('user', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['edit'] = $this->home_model->getId($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('edit', $data);
        $this->load->view('template/footer');
    }

    public function update()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == true) {
            $id = $this->input->post('id');
            $data['nama'] = $this->input->post('nama');
            $data['email'] = $this->input->post('email');
            $data['username'] = $this->input->post('username');
            $this->home_model->update($data, $id);
            redirect('home/user');
        } else {
            $id = $this->input->post('id');
            $data['edit'] = $this->home_model->getId($id);
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('edit', $data);
            $this->load->view('template/footer');
        }
    }

    public function delete($id)
    {
        $this->home_model->delete($id);
        redirect('home/user');
    }
}
