<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class StatusPegawai extends CI_Controller{
    
    public function index()
    {
        check_not_login();
        $data['title'] = 'Ringkasan Status Pegawai';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('statuspegawai');
        $this->load->view('templates/footer');

    }
}