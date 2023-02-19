<?php 


/**
 * 
 */
class Model_barang extends CI_Model
{

	/*barangkeluartotal*/
	public function barangkeluartotal()
	{
		$this->db->limit(1);
		return  $this->db->get('tb_barang_masuk')->result();
	}

	/*frekuensitiapbarang2items*/
	public function frekuensitiapbarang2items($start, $limit)
	{
		// $this->db->select('tb_barang_keluar.id_keluar, tb_barang_keluar.kode_barang, tb_barang_masuk.nama_barang, tb_barang_masuk.kategori,  sum(jumlah_keluar) as totalkeluarnya');
		// $this->db->join('tb_barang_masuk', 'tb_barang_masuk.kode_barang = tb_barang_keluar.kode_barang', 'left');
		// $this->db->group_by('tb_barang_keluar.kode_barang');
		// // $this->db->order_by('jumlah_keluar', 'DESC');

		return  $this->db->get('tb_barang_masuk',$start, $limit)->result();
	}


	public function frekuensitiapbarang3items($start, $limit)
	{
		// $this->db->select('tb_barang_keluar.id_keluar, tb_barang_keluar.kode_barang, tb_barang_masuk.nama_barang, tb_barang_masuk.kategori,  tb_barang_keluar.jumlah_keluar, sum(tb_barang_masuk.kategori="baju") as totalkategori1, sum(tb_barang_masuk.kategori="celana") as totalkategori2, sum(tb_barang_masuk.kategori="hijab") as totalkategori3, sum(tb_barang_masuk.kategori="nikob") as totalkategori4');
		// $this->db->join('tb_barang_masuk', 'tb_barang_masuk.kode_barang = tb_barang_keluar.kode_barang', 'left');
		// $this->db->group_by('tb_barang_keluar.jumlah_keluar');
		// $this->db->order_by('jumlah_keluar', 'DESC');
		return  $this->db->get('tb_barang_masuk',$start, $limit)->result();
	}
	/*total transaksi*/
	public function totaltransaksi($start, $limit)
	{
		// $this->db->select('tb_barang_keluar.id_keluar, tb_barang_keluar.kode_barang, tb_barang_masuk.nama_barang, sum(jumlah_keluar) as totalkeluarbarang');
		// $this->db->join('tb_barang_masuk', 'tb_barang_masuk.kode_barang = tb_barang_keluar.kode_barang', 'left');
		// $this->db->group_by('tb_barang_keluar.kode_barang');
		return  $this->db->get('tb_barang_masuk',$start, $limit)->result();
	}

	/*frekuensi tiap barang & filtering*/
	public function frekuensitiapbarang($start, $limit)
	{
		// $this->db->select('tb_barang_keluar.id_keluar, tb_barang_keluar.kode_barang, tb_barang_masuk.nama_barang, sum(jumlah_keluar) as totalkeluarbarang');
		// $this->db->join('tb_barang_masuk', 'tb_barang_masuk.kode_barang = tb_barang_keluar.kode_barang', 'left');
		// $this->db->group_by('tb_barang_keluar.kode_barang');
		// $this->db->order_by('jumlah_keluar', 'DESC');
		return  $this->db->get('tb_barang_masuk',$start, $limit)->result();
	}
	
	public function totaldatamasuk()
	{
		return $this->db->get('tb_barang_masuk');
	}
	public function tampildatamasuk($start,$limit)
	{
		// $this->db->select('*, tb_suplier.nama_suplier');
		// $this->db->join('tb_suplier', 'tb_suplier.id_suplier = tb_barang_masuk.id_suplier', 'left');
		return  $this->db->get('tb_barang_masuk',$start, $limit)->result();
	}

	public function savebarangmasuk()
	{
		$data = [
					'barang1' => $this->input->post('barang1'),
					'barang2' => $this->input->post('barang2'),
					'barang3' => $this->input->post('barang3')
					// 'id_suplier' => $this->input->post('id_suplier')
				];
				// print_r($data); die();
				$this->db->insert('tb_barang_masuk', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menambah Data.!</div>');
			redirect('Barang/masuk','refresh');
	}
	public function tampileditbarangmasuk($where)
	{
		$this->db->where($where);
		return $this->db->get('tb_barang_masuk', $where)->result();
	}
	public function updatebarangmasuk($where)
	{
		$data = array(
						'barang1' => $this->input->post('barang1'),
						'barang2' => $this->input->post('barang2'),
						'barang3' => $this->input->post('barang3')
					);
		// print_r($data); die();
		$this->db->where($where);
		// print_r($data); die();
		$this->db->update('tb_barang_masuk', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data.!</div>');
			redirect('Barang/masuk','refresh');
	}
	public function hapusbarangmasuk($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_barang_masuk');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data.!</div>');
			redirect('Barang/masuk','refresh');
	}



	//keluar
	public function totaldatakeluar()
	{
		return $this->db->get('tb_barang_masuk');
	}
	public function tampildatakeluar($start,$limit)
	{
		return $this->db->get('tb_barang_masuk')->result();
		// $this->db->select('*, tb_barang_masuk.kode_barang, tb_barang_masuk.nama_barang');
		// $this->db->join('tb_barang_masuk', 'tb_barang_masuk.kode_barang = tb_barang_keluar.kode_barang', 'left');
		// return  $this->db->get('tb_barang_keluar',$start, $limit)->result();
	}

	public function savebarangkeluar()
	{
		$data = [
					'kode_barang' => $this->input->post('kode_barang'),
					'baju' => $this->input->post('baju'),
					'hijab' => $this->input->post('hijab'),
					'nikob' => $this->input->post('nikob'),
					'jumlah_keluar' => $this->input->post('jumlah_keluar')
				];
				// print_r($data); die();
				$this->db->insert('tb_barang_keluar', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menambah Data.!</div>');
			redirect('Barang/keluar','refresh');
	}
	public function tampileditbarangkeluar($where)
	{
		$this->db->where($where);
		return $this->db->get('tb_barang_keluar', $where)->result();
	}
	public function updatebarangkeluar($where)
	{
		$data = array(
						'kode_barang' => $this->input->post('kode_barang'),
						'jumlah_keluar' => $this->input->post('jumlah_keluar')
					);
		$this->db->where($where);
		$this->db->update('tb_barang_keluar', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data.!</div>');
			redirect('Barang/keluar','refresh');
	}
	public function hapusbarangkeluar($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_barang_keluar');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data.!</div>');
			redirect('Barang/keluar','refresh');
	}

	//
	public function totalsulplier()
	{
		return $this->db->get('tb_suplier');
	}
	public function tampilsuplierdata($start,$limit)
	{
	
		return  $this->db->get('tb_suplier',$start, $limit)->result();
	}

	public function savedatasuplier()
	{
		$data = [
					'nama_suplier' => $this->input->post('nama_suplier'),
					'pt' => $this->input->post('pt'),
					'telepon' => $this->input->post('telepon')
				];
				// print_r($data); die();
				$this->db->insert('tb_suplier', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menambah Data.!</div>');
			redirect('Barang/suplier','refresh');
	}
	public function tampileditsuplier($where)
	{
		$this->db->where($where);
		return $this->db->get('tb_suplier', $where)->result();
	}
	public function updatedatasuplier($where)
	{
		$data = array(
						'nama_suplier' => $this->input->post('nama_suplier'),
						'pt' => $this->input->post('pt'),
						'telepon' => $this->input->post('telepon')
					);
		$this->db->where($where);
		$this->db->update('tb_suplier', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data.!</div>');
			redirect('Barang/suplier','refresh');
	}
	public function hapusdatasuplier($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_suplier');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data.!</div>');
			redirect('Barang/suplier','refresh');
	}


	//print
	public function cetakbmasuk($b1,$b2)
	{
		$this->db->select('*');
		$this->db->where('tb_barang_masuk.tanggal_masuk >=', $b1);
		$this->db->where('tb_barang_masuk.tanggal_masuk <=', $b2);
		return  $this->db->get('tb_barang_masuk')->result();
	}

	public function cetakbkeluar($b3,$b4)
	{
		$this->db->select('*, tb_barang_masuk.kode_barang, tb_barang_masuk.nama_barang');
		$this->db->join('tb_barang_masuk', 'tb_barang_masuk.kode_barang = tb_barang_keluar.kode_barang', 'left');
		$this->db->where('tb_barang_keluar.tanggal_keluar >=', $b3);
		$this->db->where('tb_barang_keluar.tanggal_keluar <=', $b4);
		return  $this->db->get('tb_barang_keluar')->result();
	}
		// ib
	function inserts($data1/*,$data2*/)
	{
		if (isset($data1)) {
			$this->db->insert_batch('tb_barang_masuk', $data1);
			// $this->db->insert_batch('tb_users', $data2);
		}
	}

	


}