<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user','msr');
		$this->load->model('M_transaksi','mts');
		$this->load->model('M_pelanggan','mpl');
	}

	public function index(){
		if ($this->session->userdata('username')) {
			$id=0;
			$data['transaksi']=$this->mts->get_transaksi();
			$data['pelanggan']=$this->mpl->get_pelanggan();
			$data['user']= $this->msr->ambil_user();
			$data['konten']='v_dashboard';
			$this->load->view('template', $data);
		}

	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */


?>
