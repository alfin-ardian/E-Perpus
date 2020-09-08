<?php
class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function register($username, $password, $email, $nama)
    {
        $data_user = array(
            'nama' => $nama,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'email'     => $email
        );
        $this->db->insert('tbl_user', $data_user);
    }

    public function login($username, $password)
    {
        $query = $this->db->get_where('tbl_user', array('username' => $username));

        if ($query->num_rows() > 0) {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('email', $data_user->email);
                $this->session->set_userdata('is_login', true);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect('auth/login');
        }
    }
}
