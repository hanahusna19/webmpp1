<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Verifikasi extends CI_Controller{
    
    public function index()
    {
        $data['title'] = 'Verifikasi';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('verifikasi');
        $this->load->view('templates/footer');
    }
    public function printverif()
    {
        $data['verifikasi'] = $this->baru_model->get_data('tbl_baru')->result();
        $this->load->view('printverif', $data);
    }
}