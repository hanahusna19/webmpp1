<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Ringkasan extends CI_Controller{
    
    public function index()
    {
        $data['title'] = 'Ringkasan';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('ringkasan');
        $this->load->view('templates/footer');
    }
}