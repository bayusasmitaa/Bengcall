<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getbengkel()
  {
    $getbengkel = $this->db->get('kontak')->result();
    return $getbengkel;
  }

}
