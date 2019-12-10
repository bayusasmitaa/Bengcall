<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sparepart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_sparepart','mbk');
		$this->load->model('M_kategori','mkt');
		$this->load->library('form_validation');
	}

	public function index()
	{
		if($this->session->userdata('level')){

			$data['kategori']=$this->mkt->ambilkategori();
			$data['sparepart']=$this->mbk->ambilsparepart();
			$data['konten']='v_sparepart';
			$this->load->view('template',$data);
		}else{
			redirect('Login','refresh');
		}
	}

	public function tambah(){
		if ($this->mbk->tambah()) {
			$this->session->set_flashdata('pesan','Berhasil Tambah Data');
		}else {
			$this->session->set_flashdata('pesan','Gagal Tambah Data');
		}
		redirect('sparepart','refresh');
		}

	public function tampil_ubah_sparepart($kode_sparepart){
		$data =  $this->mbk->tampil_ubah_sparepart($kode_sparepart);
		echo json_encode($data);
	}

	public function update(){
		if ($this->mbk->update()) {
			$this->session->set_flashdata('pesan','Berhasil Update Data');
		} else {
			$this->session->set_flashdata('pesan','Gagal Update Data');
		}
		redirect('sparepart','refresh');
	}

	public function hapus($kode_sparepart){
		if($this->mbk->hapus($kode_sparepart)){

			$this->session->set_flashdata('pesan', 'Data Berhasil dihapus');
			redirect('sparepart','refresh');

		}else{

			$this->session->set_flashdata('pesan', 'Data Gagal dihapus');
			redirect('sparepart','refresh');
		}
	}
}

/* End of file sparepart.php */
/* Location: ./application/controllers/sparepart.php */


?>
