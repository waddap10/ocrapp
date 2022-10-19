<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ImageController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('UserModel');
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
        if (!$this->isUserLoggedIn) {
            redirect('/login');
        }
    }

    public function imageupload()
    {
        $id =  $this->session->userdata('userId');
        $userresult = $this->UserModel->getusername($id);
        $data['name'] = $userresult;
        $data['titlepage'] = "Upload Image";

        $this->load->view('elements/header', $data);
        $this->load->view('elements/navbar', $data);
        $this->load->view('elements/sidebar', $data);
        $this->load->view('imageupload', array('error' => ' '));
        $this->load->view('elements/footer');
        
    }

    public function do_upload()
    {
        $config = array(
            'upload_path' => "./assets/images/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "20480000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "7680",
            'max_width' => "10240"
        );
        $this->load->library('upload', $config);
        if ($this->upload->do_upload()) {
            $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
            $file_name = $upload_data['file_name'];
            $this->load->library('session');
            $this->session->set_flashdata('item', $file_name);
            redirect('/readdata');
        } else {
            $error = array('error' => $this->upload->display_errors());
            $id =  $this->session->userdata('userId');
            $userresult = $this->UserModel->getusername($id);
            $data['name'] = $userresult;
            $data['titlepage'] = "Upload Image";

            $this->load->view('elements/header', $data);
            $this->load->view('elements/navbar', $data);
            $this->load->view('elements/sidebar', $data);
            $this->load->view('imageupload', $error);
            $this->load->view('elements/footer');
        }
    }
}
