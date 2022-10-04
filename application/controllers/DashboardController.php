<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
	function __construct()
    {
        parent::__construct();

        $this->load->model('usermodel');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('DataModel');
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
		if (!$this->isUserLoggedIn) {
            redirect('/login');
        }
    }

	public function index()
	{
        $dataresult = $this->DataModel->displaydata();
        $data['dataresult'] = $dataresult;
        $id =  $this->session->userdata('userId');
        $userresult = $this->usermodel->getusername($id);
        $user['name'] = $userresult;
        $data['titlepage'] = "Dashboard";

        $this->load->view('elements/header', $data);
        $this->load->view('elements/navbar', $user);
		$this->load->view('dashboard', $data);
        $this->load->view('elements/footer');
	}
}
