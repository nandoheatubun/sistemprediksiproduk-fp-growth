<?php 


/**
 * 
 */
class Model_kategori extends CI_Model
{
	
	
	public function tampildata()
	{
		return  $this->db->get('tb_kateogori')->result();
	}

	public function savekategori()
	{
		$data = [
					'kategori' => $this->input->post('kategori')
				];
				$this->db->insert('tb_kateogori', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menambah Data.!</div>');
			redirect('Kategori/index','refresh');
	}
	public function tampileditkategori($where)
	{
		$this->db->where($where);
		return $this->db->get('tb_kateogori', $where)->result();
	}
	public function updatekategori($where)
	{
		$data = array(
						'kategori' => $this->input->post('kategori')
					);
		$this->db->where($where);
		$this->db->update('tb_kateogori', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data.!</div>');
			redirect('kategori/index','refresh');
	}
	public function hapuskategori($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_kateogori');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data.!</div>');
			redirect('Kategori/index','refresh');
	}


}