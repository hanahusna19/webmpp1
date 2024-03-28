<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Pengajuan extends CI_Controller{
    
    public function index()
    {
        $data['title'] = 'Pengajuan';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pengajuan');
        $this->load->view('templates/footer');
    }
}