<?php

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        redirect('admin/login');
    }

    public function dashboard() {
        $this->load->model('user_model');
        $users = $this->user_model->get();
        $this->load->view('admin/inc/header');
        $this->load->view('admin/admin', ['users' => $users]);
        $this->load->view('admin/inc/footer');
    }

    public function login($submit = null) {

        if ($submit == null) {
            $this->load->view('admin/inc/header');
            $this->load->view('admin/login');
            $this->load->view('admin/inc/footer');
            return true;
        }

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->load->model('user_model');
        $result = $this->user_model->login('admin', $username, $password);
        if ($result == true) {
            $this->session->set_userdata('user_id', 1);

            redirect('/admin/dashboard', 'refresh');
        } else {
            redirect('/admin/login', 'refresh');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('/admin/login', 'refresh');
    }

    public function create_user() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //make sure the username not taken
        $this->db->get('user', ['username' => $username]);
        $this->load->model('user_model');
        $this->user_model->create($username, $password);

        echo "User created successfully";
        echo '<br> <a href="/admin/dashboard">Click here to go back</a>';
    }

    public function delete_user($user_id) {

        $this->load->model('user_model');
        $this->user_model->delete($user_id);
        echo "User deleted successfully";
        echo '<br> <a href="/admin/dashboard">Click here to go back</a>';
    }

}

/* End of file Admin.php */
/* Location: application/controllers/Admin.php */