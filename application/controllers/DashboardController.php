<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->model('UserModel');
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
    $datahariini = $this->DataModel->hitungdatahariini();
    $data['datahariini']= $datahariini;
    $totaldata = $this->DataModel->hitungtotaldata();
    $data['totaldata']= $totaldata;
    $dataaktif = $this->DataModel->hitungdataaktif();
    $data['dataaktif']= $dataaktif;
    $datadihapus = $this->DataModel->hitungdatadihapus();
    $data['datadihapus']= $datadihapus;
    $id =  $this->session->userdata('userId');
    $userresult = $this->UserModel->getusername($id);
    $data['name'] = $userresult;
    $data['titlepage'] = "Dashboard";

    $this->load->view('elements/header', $data);
    $this->load->view('elements/navbar', $data);
    $this->load->view('elements/sidebar', $data);
    $this->load->view('dashboard', $data);
    $this->load->view('elements/footer');
  }
}
