<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_sparepart','mbk');
		$this->load->model('M_transaksi','mts');
	}



	public function index()
	{

	if($this->session->userdata('level')){
		$id = 0;
		$data['transaksi']=$this->mts->get_transaksi($id);
		$data['sparepart']=$this->mbk->ambilsparepart($id);
		$data['konten']="v_transaksi";
		$this->load->view('template', $data, FALSE);
		}else{
			redirect('Login','refresh');
		}
	}

	public function tambah()
	{
		if ($this->mts->tambah()) {
			$this->session->set_flashdata('pesan','Berhasil Hubungi Bengkel');
		}else {
			$this->session->set_flashdata('pesan','Gagal Hubungi Bengkel');
		}
		redirect('homepage/index','refresh');
	}

	public function konfirmasi_pembayaran($id)
	{
		if ($this->session->userdata('username')) {
			if ($this->mts->konfirmasi($id) == TRUE) {
				$this->session->set_flashdata('success', 'Konfirmasi Success');
				redirect('transaksi');
			}else{
				$this->session->set_flashdata('failed', 'Konfirmasi Failed');
				redirect('transaksi');
			}
		}else{
			redirect('login');
		}
	}

	public function delete_transaksi($id)
	{
		if ($this->session->userdata('username')) {
			if ($this->mts->delete_transaksi($id) == TRUE) {
				$this->session->set_flashdata('success', 'Delete Transaksi Success');
				redirect('transaksi');
			}else{
				$this->session->set_flashdata('failed', 'Delete Transaksi Failed');
				redirect('transaksi');
			}
		}else{
			redirect('login');
		}
	}



}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */

?>
