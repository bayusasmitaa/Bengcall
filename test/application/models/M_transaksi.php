<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Transaksi extends CI_Model {

	public function get_transaksi()
	{
		$query = null;
		if ($this->session->userdata('level')) {
			if ($id = 0) {
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
												->join('user','user.kode_user = transaksi.kode_user')
												->join('pelanggan','pelanggan.kode_pelanggan = transaksi.kode_pelanggan')
												->get('transaksi')
												->result();
		}
		return $query;
	}


	public function tambah()
	{
			$tambah = array(
        'kode_pelanggan' => $this->session->userdata('kode_pelanggan'),
				'kode_user' => 4,
        'lokasi' => $this->input->post('lokasi'),
        'masalah' => $this->input->post('masalah'),
        'status' => 'pending',
			);

				return $this->db->insert('transaksi', $tambah);
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
