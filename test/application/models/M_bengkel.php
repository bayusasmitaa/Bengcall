
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bengkel extends CI_Model {


public function login(){


	return $this->db
	->where('password',$this->input->post('password'))
	->where('username',$this->input->post('username'))
	->get('bengkel');
}




public function ambil_bengkel(){
	return $this->db->where('level','bengkel')->get('bengkel')->result();
}

public function ambilsparepart(){
		$ambilsparepart = $this->db->join('kategori', 'kategori.kode_kategori = sparepart.kode_kategori')->get('sparepart')->result();
		return $ambilsparepart;
}

public function ambilkategori(){

		$ambilkategori = $this->db->get('kategori')->result();

		return $ambilkategori;
}


public function ambil_semua(){
	return $this->db->get('bengkel')->result();
}



public function tambah(){
$bengkelt = array(
				'kode_bengkel' => $this->input->post('kode_bengkel'),
				'nama_bengkel' => $this->input->post('nama_bengkel'),
        'telepon' => $this->input->post('telepon'),
				'alamat' => $this->input->post('alamat'),
				'level' => 'bengkel' );

		return $this->db->insert('bengkel', $bengkelt);

}


public function hapus($kode_bengkel){

	return $this->db
		->where('kode_bengkel', $kode_bengkel)
		->delete('bengkel');
}



public function tampil_ubah_bengkel($kode_bengkel){
		return $this->db->where('kode_bengkel',$kode_bengkel)->get('bengkel')->row();

}


	public function update(){
			$ubah = array('kode_bengkel' => $this->input->post('kode_bengkel'),
      				'nama_bengkel' => $this->input->post('nama_bengkel'),
              'telepon' => $this->input->post('telepon'),
      				'alamat' => $this->input->post('alamat'),
      				'level' => 'bengkel' );

		return $this->db->where('kode_bengkel',$this->input->post('kode_bengkel'))->update('bengkel', $ubah);

}

}


/* End of file M_bengkel.php */
/* Location: ./application/models/M_bengkel.php */
?>
