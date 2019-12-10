<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kontak extends CI_Model {

	public function ambilkontak(){
			$ambilkontak = $this->db->get('kontak')->result();
			return $ambilkontak;
	}

	public function ambilKontakWhere($ambilkontakquery)
	{
		
		$q = $this->db->query("SELECT * FROM kontak WHERE `alamat` LIKE '%$ambilkontakquery%'")->result();
		return $q;
	}

	public function tambah(){
			$tambah = array(
				'nama_bengkel' => $this->input->post('nama_bengkel'),);

			return $this->db->insert('kontak', $tambah);

	}



	public function tampil_ubah_kategori($kode_bengkel){
		return $this->db->where('kode_bengkel',$kode_bengkel)->get('kontak')->row();

	}


	public function update(){
			$ubah = array(
				'nama_bengkel' => $this->input->post('nama_bengkel'),);

		return $this->db->where('kode_bengkel',$this->input->post('kode_bengkel'))->update('kontak', $ubah);
}




public function hapus($kode_bengkel ){
	return $this->db->where('kode_bengkel',$kode_bengkel)->delete('kontak');
}
public function get_all(){
			return $this->db->get('kontak')->result();
		}
public function get_kontak_keyword($keyword){
			$this->db->select('*');
			$this->db->from('kontak');
			$this->db->like('nama',$keyword);
			$this->db->or_like('alamat',$keyword);
			return $this->db->get()->result();
		}

}


/* End of file M_kategori.php */
/* Location: ./application/models/M_kategori.php */


?>
