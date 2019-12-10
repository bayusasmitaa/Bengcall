<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bengkel extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->model('M_bengkel','mbl');
	}

	public function index()
	{
			if($this->session->userdata('level')){
		$data['bengkel']= $this->mbl->ambil_user();
		$data['konten']='v_bengkel';
		$this->load->view('template', $data);
	}else{
			redirect('Login','refresh');

	}

	}

	public function tambah(){

		$this->msr->tambah();
		redirect('bengkel','refresh');

	}

	public function tampil_ubah_user($kode_bengkel){
		$data =  $this->mbl->tampil_ubah_bengkel($kode_bengkel);
		echo json_encode($data);

	}


	public function update(){
			if($this->mbl->update()){

					$this->session->set_flashdata('pesan', 'sukses ubah data ');
			}else{

				$this->session->set_flashdata('pesan', 'gagal ubah data ');
			}
			redirect('bengkel','refresh');
	}



	public function hapus($kode_bengkel){
	if($this->mbl->hapus($kode_bengkel)){

		$this->session->set_flashdata('pesan', 'anda berhasil menghapus barang');
			redirect('bengkel','refresh');

	}else{

		$this->session->set_flashdata('pesan', 'anda gagal menghapus barang');
			redirect('bengkel','refresh');
	}
}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */

?>
