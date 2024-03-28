<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Perencanaan extends CI_Controller{
    
    public function index()
    {
        check_not_login();
        $data['title'] = 'Perencanaan';

        $this->load->view('templates/header', $data);
        $this->load->view('sidebar', $data);
        $this->load->view('perencanaan');
        $this->load->view('templates/footer');

    }
}