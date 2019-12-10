<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			$this->load->model('M_kontak','mkk');
		}

	public function index(){
		{
	if($this->session->userdata('level')){
		if ($this->input->get('query') != null) {
			$data['kontak']= $this->mkk->ambilkontakWhere($this->input->get('query'));
		} else {
			$data['kontak']= $this->mkk->ambilkontak();
			$this->load->view('template', $data);
		}
	}else{
			redirect('Login','refresh');
	}

	}
			$this->load->view('home');
	}

	public function search(){
			$keyword = $this->input->post('keyword');
			$data['kontak']=$this->M_kontak->get_product_keyword($keyword);
			$this->load->view('search',$data);
		}
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */


?>
