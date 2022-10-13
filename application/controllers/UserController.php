<?php defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        // Load form validation library & user model 
        $this->load->library('form_validation');
        $this->load->model('usermodel');

        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
        /* if ($this->isUserLoggedIn) {
            redirect('/');
        } */
    }

    public function login()
    {
        $data = array();

        if ($this->isUserLoggedIn) {
            redirect('/');
        }

        // Get messages from the session 
        if ($this->session->userdata('success_msg')) {
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if ($this->session->userdata('error_msg')) {
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }

        // If login request submitted 
        if ($this->input->post('loginSubmit')) {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');

            if ($this->form_validation->run() == true) {
                $con = array(
                    'returnType' => 'single',
                    'conditions' => array(
                        'email' => $this->input->post('email'),
                        'password' => md5($this->input->post('password')),
                        'status' => 1
                    )
                );
                $checkLogin = $this->usermodel->getRows($con);
                if ($checkLogin) {
                    $this->session->set_userdata('isUserLoggedIn', TRUE);
                    $this->session->set_userdata('userId', $checkLogin['id']);
                    redirect('/');
                } else {
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            } else {
                $data['error_msg'] = 'Please fill all the mandatory fields.';
            }
        }

        $data['titlepage'] = "Login Page";
        // Load view 
        $this->load->view('elements/header', $data);
        $this->load->view('users/login', $data);
        $this->load->view('elements/footer');
    }

    public function registration()
    {
        $data = $userData = array();

        if ($this->isUserLoggedIn) {
            redirect('/');
        }

        // If registration request is submitted 
        if ($this->input->post('signupSubmit')) {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

            $userData = array(
                'name' => strip_tags($this->input->post('name')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password')),
            );

            if ($this->form_validation->run() == true) {
                $insert = $this->usermodel->insert($userData);
                if ($insert) {
                    $this->session->set_userdata('success_msg', 'Your account registration has been successful. Please login to your account.');
                    redirect('/login');
                } else {
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            } else {
                $data['error_msg'] = 'Please fill all the mandatory fields.';
            }
        }

        // Posted data 
        $data['usermodel'] = $userData;

        $data['titlepage'] = "Register Page";

        // Load view 
        $this->load->view('elements/header', $data);
        $this->load->view('users/registration', $data);
        $this->load->view('elements/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('/login');
    }

    // Existing email check during validation 
    public function email_check($str)
    {
        $con = array(
            'returnType' => 'count',
            'conditions' => array(
                'email' => $str
            )
        );
        $checkEmail = $this->usermodel->getRows($con);
        if ($checkEmail > 0) {
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
