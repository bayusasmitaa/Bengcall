<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pelanggan','mpl');
  }

  function index()
  {
		if ($this->session->userdata('level')) {
      $data['pelanggan']=$this->mpl->get_pelanggan();
      $data['konten']='v_pelanggan';
      $this->load->view('template',$data);
    } else {
      redirect('Login','refresh');
    }
  }

  public function tambah(){
		$this->mpl->tambah();
		redirect('pelanggan','refresh');
	}

  public function tampil_ubah_pelanggan($kode_pelanggan){
		$data =  $this->mpl->tampil_ubah_pelanggan($kode_pelanggan);
		echo json_encode($data);
	}

  public function update(){
			if($this->mpl->update()){
					$this->session->set_flashdata('pesan', 'Sukses Update Data ');
			}else{

				$this->session->set_flashdata('pesan', 'Gagal Update Data ');
			}
			redirect('Pelanggan','refresh');
	}

  public function hapus($kode_pelanggan){
	if($this->mpl->hapus($kode_pelanggan)){

		$this->session->set_flashdata('pesan', 'Berhasil Hapus Data');
			redirect('Pelanggan','refresh');

	}else{

		$this->session->set_flashdata('pesan', 'Gagal Hapus Data');
			redirect('pelanggan','refresh');
	}
}


}
