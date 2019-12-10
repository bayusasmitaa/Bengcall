<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_pelanggan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pelanggan','mpl');
  }

  function index()
  {
    $this->load->view('v_login_pelanggan');
  }

  public function login()
  {
    if ($this->mpl->login()->num_rows()>0) {
      $pelanggan = $this->mpl->login()->row();
      $array = array(
        'kode_pelanggan' => $pelanggan->kode_pelanggan,
        'nama' => $pelanggan->nama,
        'username' => $pelanggan->username,
        'password' => $pelanggan->password,
        'alamat' => $pelanggan->alamat,
      );

      $this->session->set_userdata( $array );
      redirect(base_url('index.php/pemesanan'),'refresh');
    }
    else{
      redirect('Login_pelanggan','refresh');
    }
  }

  public function register(){
    if ($this->mpl->register() == TRUE) {
     $this->session->set_flashdata('success', 'Berhasil Register');
     redirect(base_url('index.php/pemesanan'),'refresh');
   }else{
     $this->session->set_flashdata('failed', 'Gagal Register');
     redirect('login_pelanggan');
   }
   }

   public function logout()
   {
       $this->session->sess_destroy();
       redirect('Login_pelanggan','refresh');
   }

}
