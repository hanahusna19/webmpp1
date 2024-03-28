<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Pengelolaan extends CI_Controller{
    
    public function index()
    {
        $data['title'] = 'Pengelolaan';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pengelolaan');
        $this->load->view('templates/footer');

    }
}