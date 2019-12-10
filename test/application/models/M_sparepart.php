
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sparepart extends CI_Model {

	public function ambilsparepart(){
			$ambilsparepart = $this->db->join('kategori', 'kategori.kode_kategori = sparepart.kode_kategori')->get('sparepart')->result();
			return $ambilsparepart;
	}


	public function ambilkategori(){

			$ambilkategori = $this->db->get('kategori')->result();

			return $ambilkategori;
	}

	public function tambah()
	{
		$tambah = array(
			'sparepart' => $this->input->post('sparepart'),
			'kode_pelanggan' => $this->session->userdata('kode_pelanggan'),
			'kode_kategori' => $this->input->post('kategori'),
			'harga' => $this->input->post('harga'),
			'status' => 'pending',
		);

		return $this->db->insert('sparepart', $tambah);
	}


public function tampil_ubah_sparepart($kode_sparepart){
		return $this->db->join('kategori', 'kategori.kode_kategori = sparepart.kode_kategori')->where('kode_sparepart',$kode_sparepart)->get('sparepart')->row();

	}



public function update(){
			$ubah = array(
				'sparepart' => $this->input->post('sparepart'),
				'kode_kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				 );

			return $this->db->where('kode_sparepart',$this->input->post('kode_sparepart'))->update('sparepart', $ubah);

}


public function update_ft($nama_file){
				$ubah = array(
				'sparepart' => $this->input->post('sparepart'),
				'kode_kategori' => $this->input->post('kategori'),
				'stok' => $this->input->post('stok'),
				'harga' => $this->input->post('harga'),
				'merk' => $this->input->post('merk'),
				'cover' => $nama_file,
				 );

		return $this->db->where('kode_sparepart',$this->input->post('kode_sparepart'))->update('sparepart', $ubah);





}


public function hapus($kode_sparepart ){
	return $this->db->where('kode_sparepart',$kode_sparepart)->delete('sparepart');
}




public function ambilsparepartcart($kode_sparepart){
	return $this->db->where('kode_sparepart',$kode_sparepart )->get('sparepart')->row();

}

}

/* End of file M_sparepart.php */
/* Location: ./application/models/M_sparepart.php */

?>
