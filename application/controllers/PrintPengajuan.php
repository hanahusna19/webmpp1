<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class PrintPengajuan extends CI_Controller{
    
    public function index()
    {
        check_not_login();
        $data['title'] = 'Print Pengajuan';

        $this->load->view('printpengajuan');

    }
}