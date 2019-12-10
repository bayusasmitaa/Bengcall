<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Register extends CI_Model {


  function register(){
    $nm = $this->input->post('name');
    $un = $this->input->post('username');
    $lev = $this->input->post('level');
    $pw = $this->input->post('password');
    $al = $this->input->post('alamat');
    $data = array(
     'nama'=>$nm,
     'username'=>$un,
     'password'=>$pw,
     'level'=>$lev,
     'alamat'=>$al,
    );
    $this->db->insert('pelanggan', $data);
   }
}


/* End of file M_Register.php */
/* Location: ./application/models/M_Register.php */

 ?>
