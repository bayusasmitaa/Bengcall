<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepage extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
		$this->load->model('M_home','hm');
  }

  function index()
  {
    $data['kontak']= $this->hm->getbengkel();
    $this->load->view('homepage/index');
  }


}
