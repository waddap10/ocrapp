<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ReaddataController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('usermodel');
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
        if (!$this->isUserLoggedIn) {
            redirect('/login');
        }
    }

    public function index()
    {
        $myVar = $this->session->flashdata('item');
        #echo $myVar;
        $path = "C:/xampp/htdocs/ocrapp/assets/python/env/Scripts/python.exe C:/xampp/htdocs/ocrapp/assets/python/final.py ".$myVar;
        
        $command = escapeshellcmd($path);
        $output = shell_exec($command);

        $json = file_get_contents("./assets/json/read_data.json");
        $json_data  = json_decode($json);
        $id =  $this->session->userdata('userId');
        $userresult = $this->usermodel->getusername($id);
        $user['name'] = $userresult;
        $data['titlepage'] = "Read Data";

        $this->load->view('elements/header', $data);
        $this->load->view('elements/navbar', $user);
        $this->load->view('readdata', $json_data);
        $this->load->view('elements/footer');
    }

    public function insertdata()
    {
        $this->load->database();
	    $this->load->model('DataModel');
        $this->load->helper(array('form', 'url'));
        if($this->input->post('tambah'))
		{
		    $data['provinsi'] = $this->input->post('provinsi');
			$data['kota'] = $this->input->post('kota');
			$data['nik'] = $this->input->post('nik');
            $data['nama'] = $this->input->post('nama');
			$data['ttl'] = $this->input->post('ttl');
			$data['gender'] = $this->input->post('gender');
            $data['alamat'] = $this->input->post('alamat');
			$data['rtrw'] = $this->input->post('rtrw');
			$data['desa'] = $this->input->post('desa');
            $data['kec'] = $this->input->post('kec');
			$data['agama'] = $this->input->post('agama');
			$data['sts_kawin'] = $this->input->post('sts_kawin');
            $data['job'] = $this->input->post('job');
			$data['nation'] = $this->input->post('nation');
			$data['exp'] = $this->input->post('exp');
            $data['goldar'] = $this->input->post('goldar');
            
			$response = $this->DataModel->saverecords($data);
			if($response==true){
                    redirect('/');
			}
			else{
					echo "Insert error !";
			}
		}
    }

    public function editdata($id='')
    {
        $this->load->database();
	    $this->load->model('DataModel');
        $this->load->helper(array('form', 'url'));
        $iduser =  $this->session->userdata('userId');
        $userresult = $this->usermodel->getusername($iduser);
        $user['name'] = $userresult;
        $data['titlepage'] = "Edit Data";
        $data['id'] = $id;

        $dataresult = $this->DataModel->searchdata($id);
        $data['dataresult'] = $dataresult;

        $this->load->view('elements/header', $data);
        $this->load->view('elements/navbar', $user);
        $this->load->view('editdata', $data);
        $this->load->view('elements/footer');
    }

    public function savedata($id='')
    {
        $this->load->database();
	    $this->load->model('DataModel');
        $this->load->helper(array('form', 'url'));
        $this->DataModel->editdata($id);
        if($this->input->post('simpan'))
		{
		    $data['provinsi'] = $this->input->post('provinsi');
			$data['kota'] = $this->input->post('kota');
			$data['nik'] = $this->input->post('nik');
            $data['nama'] = $this->input->post('nama');
			$data['ttl'] = $this->input->post('ttl');
			$data['gender'] = $this->input->post('gender');
            $data['alamat'] = $this->input->post('alamat');
			$data['rtrw'] = $this->input->post('rtrw');
			$data['desa'] = $this->input->post('desa');
            $data['kec'] = $this->input->post('kec');
			$data['agama'] = $this->input->post('agama');
			$data['sts_kawin'] = $this->input->post('sts_kawin');
            $data['job'] = $this->input->post('job');
			$data['nation'] = $this->input->post('nation');
			$data['exp'] = $this->input->post('exp');
            $data['goldar'] = $this->input->post('goldar');
            
			$response = $this->DataModel->saverecords($data);
			if($response==true){
                    redirect('/');
			}
			else{
					echo "Insert error !";
			}
		}
    }

    public function deletedata($id='')
    {
        $this->load->database();
	    $this->load->model('DataModel');
        $this->load->helper(array('form', 'url'));
        $this->DataModel->deletedata($id);
        redirect('/');
    }

}