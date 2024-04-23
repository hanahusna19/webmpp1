<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Detailpengajuan extends CI_Controller{
    
    public function index()
    {
        check_not_login();
        $data['title'] = 'Detail Pengajuan';

        $this->load->view('templates/header', $data);
        $this->load->view('sidebar', $data);
        $this->load->view('detailpengajuan');
        $this->load->view('templates/footer');

    }
}