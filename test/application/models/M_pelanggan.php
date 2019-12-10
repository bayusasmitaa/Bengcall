<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model{

  public function login(){
  	return $this->db
  	->where('password',$this->input->post('password'))
  	->where('username',$this->input->post('username'))
  	->get('pelanggan');
  }

  public function get_pelanggan(){
  	$get_pelanggan = $this->db->get('pelanggan')->result();
    return $get_pelanggan;
  }

  public function tambah(){
      $tambah = array(
        'nama' => $this->input->post('nama'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'alamat' => $this->input->post('alamat'),
      );
      return $this->db->insert('pelanggan', $tambah);
  }

  public function hapus($kode_pelanggan){
  	return $this->db
  		->where('kode_pelanggan', $kode_pelanggan)
  		->delete('pelanggan');
  }

  public function tampil_ubah_pelanggan($kode_pelanggan){
  		return $this->db->where('kode_pelanggan',$kode_pelanggan)->get('pelanggan')->row();
  }

  public function update(){
      $ubah = array(
        'nama' => $this->input->post('nama'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'alamat' => $this->input->post('alamat'),
      );
    return $this->db->where('kode_pelanggan',$this->input->post('kode_pelanggan'))->update('pelanggan', $ubah);
  }

  public function register()
  {
    $object = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama' => $this->input->post('nama'),
		);
		$this->db->insert('pelanggan', $object);

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}

   }




}
