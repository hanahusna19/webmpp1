<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Ganti extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ganti_model');
    }
    
    public function index()
    {
        $data['title'] = 'Pegawai Pengganti';
        $data['ganti'] = $this->ganti_model->get_data('tbl_ganti')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('ganti', $data);
        $this->load->view('templates/footer');

    }
    public function tambahganti()
    {
            $data['title'] = 'Pegawai Pengganti';
    
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('tambahganti');
            $this->load->view('templates/footer');

        }

    public function tambahaksiganti()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambahganti();
        } else {
            $data = array(
                'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan'),
                'awal_periode' => $this->input->post('awal_periode'),   
                'akhir_periode' => $this->input->post('akhir_periode'),
                'nama_pegawai' => $this->input->post('nama_pegawai'),
                'posisi_jabatan' => $this->input->post('posisi_jabatan'),
                'status_pegawai' => $this->input->post('status_pegawai'),
                'deskripsi' => $this->input->post('deskripsi'),
            );

            $this->ganti_model->insert_data($data, 'tbl_ganti');  
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil Di Tambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('ganti');
        }
    }

    public function edit($id_ganti)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_ganti' => $id_ganti,   
                'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan'),
                'awal_periode' => $this->input->post('awal_periode'), 
                'akhir_periode' => $this->input->post('akhir_periode'),
                'nama_pegawai' => $this->input->post('nama_pegawai'),
                'posisi_jabatan' => $this->input->post('posisi_jabatan'),
                'status_pegawai' => $this->input->post('status_pegawai'),
                'deskripsi' => $this->input->post('deskripsi'),
            );

            $this->ganti_model->update_data($data, 'tbl_ganti');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil Di Edit <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button></div>');
          redirect('ganti');
        }
    }
    public function printganti()
    {
        $data['ganti'] = $this->ganti_model->get_data('tbl_ganti')->result();
        $this->load->view('print_ganti', $data);
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
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required', array(
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
    }

    public function delete($id)
    {
        $where = array('id_ganti' => $id);

        $this->ganti_model->delete($where, 'tbl_ganti');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Berhasil Di Hapus <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span></button></div>');
      redirect('ganti');

    }
}