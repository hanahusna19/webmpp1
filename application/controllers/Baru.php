<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Baru extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('baru_model');
    }
    
    public function index()
    {
        $data['title'] = 'Pegawai Baru';
        $data['baru'] = $this->baru_model->get_data('tbl_baru')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('baru', $data);
        $this->load->view('templates/footer');

    }
    public function tambahbaru()
    {
            $data['title'] = 'Pegawai Baru';
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('tambahbaru');
            $this->load->view('templates/footer');

        }

    public function tambahaksibaru()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahbaru();
        } else {
            $data = array(
                'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan'),
                'awal_periode' => $this->input->post('awal_periode'),   
                'akhir_periode' => $this->input->post('akhir_periode'),
                'posisi_jabatan' => $this->input->post('posisi_jabatan'),
                'status_pegawai' => $this->input->post('status_pegawai'),
                'deskripsi' => $this->input->post('deskripsi'),
                'jumlah' => $this->input->post('jumlah'),
            );

            $this->baru_model->insert_data($data, 'tbl_baru');  
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil Di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('baru');
        }
    }

    public function edit($id_baru)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_baru' => $id_baru,   
                'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan'),
                'awal_periode' => $this->input->post('awal_periode'), 
                'akhir_periode' => $this->input->post('akhir_periode'),
                'posisi_jabatan' => $this->input->post('posisi_jabatan'),
                'status_pegawai' => $this->input->post('status_pegawai'),
                'deskripsi' => $this->input->post('deskripsi'),
                'jumlah' => $this->input->post('jumlah'),
            );

            $this->baru_model->update_data($data, 'tbl_baru');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil Di Edit <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button></div>');
          redirect('baru');
        }
    }
    public function printbaru()
    {
        $data['baru'] = $this->baru_model->get_data('tbl_baru')->result();
        $this->load->view('print_baru', $data);
    }

    public function _rules()
    {
        $this->form_validation->set_rules('tanggal_pengajuan', 'Tanggal Pengajuan', 'required', array(
            'required' => '%s wajib diisi!!'
        ));
        $this->form_validation->set_rules('awal_periode', 'Awal Periode', 'required', array(
            'required' => '%s wajib diisi!!'
        ));
        $this->form_validation->set_rules('akhir_periode', 'Akhir Periode', 'required', array(
            'required' => '%s wajib diisi!!'
        ));
        $this->form_validation->set_rules('posisi_jabatan', 'Posisi Jabatan', 'required', array(
            'required' => '%s wajib diisi!!'
        ));
        $this->form_validation->set_rules('status_pegawai', 'Status Karyawan', 'required', array(
            'required' => '%s wajib diisi!!'
        ));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array(
            'required' => '%s wajib diisi!!'
        ));
        $this->form_validation->set_rules('jumlah', 'Jumlah Karyawan', 'required', array(
            'required' => '%s wajib diisi!!'
        ));
    }

    public function delete($id)
    {
        $where = array('id_baru' => $id);

        $this->baru_model->delete($where, 'tbl_baru');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil Di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span></button></div>');
      redirect('baru');

    }
}