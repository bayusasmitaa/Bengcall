
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {


public function login(){


	return $this->db
	->where('password',$this->input->post('password'))
	->where('username',$this->input->post('username'))
	->get('user');
}




public function ambil_user(){
	return $this->db->where('level','bengkel')->get('user')->result();
}


public function ambil_semua(){
	return $this->db->get('user')->result();
}



public function tambah(){
$usert = array('nama_user' => $this->input->post('nama_user'),
				'username' => $this->input->post('username'),
				'kode_user' => $this->input->post('kode_user'),
				'password' => $this->input->post('password'),
				'alamat' => $this->input->post('alamat'),
				'level' => $this->input->post('level'),
			);

		return $this->db->insert('user', $usert);

}

function register(){
	$nm = $this->input->post('nama_user');
	$un = $this->input->post('username');
	$pw = $this->input->post('password');
	$lev = 'bengkel';
	$al = $this->input->post('alamat');
	$data = array(
	 'nama_user'=>$nm,
	 'username'=>$un,
	 'password'=>$pw,
	 'level'=>$lev,
	 'alamat'=>$al,
	);
	$this->db->insert('user', $data);
}


public function hapus($kode_user){

	return $this->db
		->where('kode_user', $kode_user)
		->delete('user');
}



public function tampil_ubah_user($kode_user){
		return $this->db->where('kode_user',$kode_user)->get('user')->row();

}


	public function update(){
			$ubah = array(
				'nama_user' => $this->input->post('nama_user'),
				'username' => $this->input->post('username'),
				'alamat' => $this->input->post('alamat'),
				'password' => $this->input->post('password'),);

		return $this->db->where('kode_user',$this->input->post('kode_user'))->update('user', $ubah);

}

}


/* End of file M_user.php */
/* Location: ./application/models/M_user.php */
?>
