<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pemesanan extends CI_Model {

	public function get_pesan($id)
	{
		$query = null;
		if ($this->session->userdata('nama')) {
			if ($id != 0) {
				$query = $this->db->where('kode_transaksi',$id)
				       -> join('user','user.kode_user = transaksi.kode_user')
							 -> join('pelanggan','pelanggan.kode_pelanggan = transaksi.kode_pelanggan')
							 -> get('transaksi')
							 -> row();
			}else {
				$query = $this->db->join('user','user.kode_user = transaksi.kode_user')
													->join('pelanggan','pelanggan.kode_pelanggan = transaksi.kode_pelanggan')
													->get('transaksi')
													->result();
			}
		}else {
			$query = $this->db->where('transaksi.kode_user',$this->session->userdata('kode_user'))
												->join('user','sparepart.kode_user = transaksi.kode_user')
												->join('pelanggan','pelanggan.kode_pelanggan = transaksi.kode_pelanggan')
												->get('transaksi')
												->result();
		}
		return $query;
	}

	public function ambil_user(){

			return $this->db->where('level','bengkel')->get('user')->result();

			return $ambil_user;
	}

	public function get_user()
	{
		$query = null;
		if ($this->session->userdata('name')) {
			if ($id != 0) {
				$query = $this->db->where('kode_transaksi',$id)
				       -> join('sparepart','sparepart.kode_sparepart = transaksi.kode_sparepart')
							 -> join('pelanggan','pelanggan.kode_pelanggan = transaksi.kode_pelanggan')
							 -> get('transaksi')
							 -> row();
			}else {
				$query = $this->db->join('sparepart','sparepart.kode_sparepart = transaksi.kode_sparepart')
													->join('pelanggan','pelanggan.kode_pelanggan = transaksi.kode_pelanggan')
													->get('transaksi')
													->result();
			}
		}else {
			$query = $this->db->where('transaksi.kode_sparepart',$this->session->userdata('kode_sparepart'))
												->join('sparepart','sparepart.kode_sparepart = transaksi.kode_sparepart')
												->join('pelanggan','pelanggan.kode_pelanggan = transaksi.kode_pelanggan')
												->get('transaksi')
												->result();
		}
		return $query;
	}

	public function konfirmasi($id)
{
	$object = array(
		'status' => 'success',
		'kode_user' => $this->session->userdata('kode_user')
	);
	$this->db->where('kode_transaksi', $id)
			 ->update('transaksi', $object);

	if ($this->db->affected_rows()) {
		return TRUE;
	} else {
		return FALSE;
	}
}

public function delete_transaksi($id)
	{
		$this->db->where('kode_transaksi',$id)
				 ->delete('transaksi');

		if ($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


}

/* End of file M_Transaksi.php */
/* Location: ./application/models/M_Transaksi.php */

?>
