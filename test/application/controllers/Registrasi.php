<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
 public function __construct()
 {
   parent::__construct();
   $this->load->model('M_register','rg');
 }

 public function index()
 {
   $this->load->view('Register');
 }

 public function register(){
    $this->rg->register();
  }

  

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
?>
