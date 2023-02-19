<?php 


/**
 * 
 */
class Model_dashboard extends CI_Model
{
	
	public function totalbarangmasuk()
	{
		return $this->db->get('tb_barang_masuk')->num_rows();
	}
	// public function totalbarangkeluar()
	// {
	// 	return $this->db->get('tb_barang_keluar')->num_rows();
	// }

	public function totalakun()
	{
		return $this->db->get('tb_users')->num_rows();
	}
}