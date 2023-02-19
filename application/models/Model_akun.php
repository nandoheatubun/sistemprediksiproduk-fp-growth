<?php 


/**
 * 
 */
class Model_akun extends CI_Model
{
	
	public function totaldata()
	{
		return $this->db->get('tb_users');
	}
	public function tampildata($start,$limit)
	{
		return  $this->db->get('tb_users',$start, $limit)->result();
	}

	public function saveakun()
	{
		$data = [
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					'level' => $this->input->post('level'),
					'status_akun' => $this->input->post('status_akun')
				];
				$this->db->insert('tb_users', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menambah Data.!</div>');
			redirect('Akun/index','refresh');
	}
	public function tampileditakun($where)
	{
		$this->db->where($where);
		return $this->db->get('tb_barang', $where)->result();
	}
	public function updateakun($where)
	{
		$data = array(
						'username' => $this->input->post('username'),
						'email' => $this->input->post('email'),
						'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
						'level' => $this->input->post('level'),
						'status_akun' => $this->input->post('status_akun')
					);
		$this->db->where($where);
		$this->db->update('tb_users', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data.!</div>');
			redirect('Akun/index','refresh');
	}
	public function hapusakun($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_users');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data.!</div>');
			redirect('akun/index','refresh');
	}


}