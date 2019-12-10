<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
		$this->load->model('M_transaksi','mts');
    $this->load->model('M_user','msr');
    $this->load->model('M_pemesanan','mps');
  }

  function index()
  {
		if($this->session->userdata('nama')){
		$data['user']= $this->mps->ambil_user();
		$this->load->view('homepage/index', $data);
	}else{
			redirect('Login_pelanggan','refresh');

	}
}

public function add_transaksi()
{
  if ($this->session->userdata('nama')) {
    $lokasi = $this->input->post('lokasi');
    $masalah = $this->input->post('masalah');

    $data = null;
    if ($this->session->userdata('nama')) {
      $data = array(
        'kode_pelanggan' => $this->session->userdata('kode_pelanggan'),
        'lokasi' => $this->input->post('lokasi'),
        'masalah' => $this->input->post('masalah'),
        'status' => 'pending',
      );
    }else{
      $data = array(
        'lokasi' => $this->input->post('lokasi'),
        'masalah' => $this->input->post('masalah'),
        'status' => 'pending',
        'kode_pelanggan' => 4,
      );
    }


      if ($this->mps->add_order_detail($detail) == TRUE) {
        $this->session->set_flashdata('pesan', 'Berhasil Menghubungi Bengkel, Tunggu yaa :)');
        if ($this->session->userdata('name')) {
          redirect('homepage/index');
        }else{
          redirect('homepage/index');
        }
      }else{
        if ($this->mps->delete_order($kode_transaksi)) {
          $this->session->set_flashdata('pesan', 'Yah Maaf, Gagal Menghubungi Bengkel:(');
          if ($this->session->userdata('nama')) {
            redirect('homepage/index');
          }else{
            redirect('homepage/index');
          }
        }else{
          $this->session->set_flashdata('pesan', 'Yah Maaf, Gagal Menghubungi Bengkel:(');
          if ($this->session->userdata('nama')) {
            redirect('homepage/index');
          }else{
            redirect('homepage/index');
          }
        }
      }
    }else{
      $this->session->set_flashdata('pesan', 'Yah Maaf, Gagal Menghubungi Bengkel:(');
      if ($this->session->userdata('nama')) {
        redirect('homepage/index');
      }else{
        redirect('homepage/index');
      }
    }
  }

    public function tambah(){
      if ($this->mts->tambah()) {
        $this->session->set_flashdata('pesan','Berhasil Tambah Data');
      }else {
        $this->session->set_flashdata('pesan','Gagal Tambah Data');
      }
      redirect('pemesanan','refresh');
      return $this->db->insert('transaksi', $tambah);
      }





}
