<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class PosisiPegawai extends CI_Controller{
    
    public function index()
    {
        check_not_login();
        $data['title'] = 'Ringkasan Posisi Pegawai';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('posisipegawai');
        $this->load->view('templates/footer');

    }
}