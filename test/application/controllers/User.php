<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user','msr');
	}

	public function index()
	{
		if($this->session->userdata('level')){
		$data['user']= $this->msr->ambil_user();
		$data['konten']='v_user';
		$this->load->view('template', $data);
	}else{
			redirect('Login','refresh');

	}

	}

	public function tambah(){

		$this->msr->tambah();
		redirect('User','refresh');

	}

	public function tampil_ubah_user($kode_user){
		$data =  $this->msr->tampil_ubah_user($kode_user);
		echo json_encode($data);

	}


	public function update(){
			if($this->msr->update()){

					$this->session->set_flashdata('pesan', 'sukses ubah data ');
			}else{

				$this->session->set_flashdata('pesan', 'gagal ubah data ');
			}
			redirect('User','refresh');
	}



	public function hapus($kode_user){
	if($this->msr->hapus($kode_user)){

		$this->session->set_flashdata('pesan', 'anda berhasil menghapus user');
			redirect('User','refresh');

	}else{

		$this->session->set_flashdata('pesan', 'anda gagal menghapus user');
			redirect('User','refresh');
	}
}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */

?>
