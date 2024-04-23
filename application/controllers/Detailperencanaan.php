<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Detailperencanaan extends CI_Controller{
    
    public function index()
    {
        check_not_login();
        $data['title'] = 'Detail Perencanaan';

        $this->load->view('templates/header', $data);
        $this->load->view('sidebar', $data);
        $this->load->view('detailperencanaan');
        $this->load->view('templates/footer');

    }
}