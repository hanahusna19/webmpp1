<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Auth extends CI_Controller{
    
    public function index()
    {
        check_already_login();
        $data['title'] = 'Login';

        $this->load->view('templates/header', $data);
        $this->load->view('login', $data);
    }
    public function process()
    {
      $post = $this->input->post(null, TRUE);
      if(isset($post['login'])) {
          $this->load->model('user_m');
          $query = $this->user_m->login($post);
          if($query->num_rows() > 0) {
            $row = $query->row();
            $params = array(
              'iduser' => $row->id_user,
              'user' => $row->user
            );
            $this->session->set_userdata($params);
            echo "<script>
              alert('Selamat Login Berhasil!');
              window.location='".site_url('dashboard')."';
            </script>";
          } else {
             echo "<script>
              alert('Login Gagal, Username/Password Salah');
              window.location='".site_url('auth')."';
           </script>";
          }
      }
   }

   public function logout()
  {
    $params = array('iduser', 'user');
    $this->session->unset_userdata($params);
    redirect('auth');
  }
}