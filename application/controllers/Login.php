<?php 
defined('BASEPATH') || exit ('No direct script access allowed');

class Login extends CI_controller
{
	public function __construct()
	{
		parent:: __construct();
		// $this->load->library('form_validation');
		$this->load->model('Model_login');
		
	}

	public function index()
	{
		if ($this->session->userdata('username'))
		{
			if ($this->session->userdata('level')=="admin") 
			{
				// echo "Ok admin";
				redirect('Dashboard/index');
			}elseif ($this->session->userdata('level')=="pemilik") {
				// echo "pemilik";
				redirect('pemilik/databarang','refresh');
			}
			
		}
		

		$this->form_validation->set_message('required','kolom {field} harus diisi');
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if ($this->form_validation->run() ==false )
		 {
			$data['title'] = 'Halaman Login';
		$this->load->view('frontend/login/index', $data);
		}
		else
		{
			$this->_login();
		}
		
	}


	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$users = $this->db->get_where('tb_users', ['username'=> $username])->row_array();
		if ($users) 
		{
			
			if ($users['status_akun'] =="aktif") 
			{
				
					$data = [
							 'username'=> $users['username'],
							 'level'=> $users['level'],
							 'id_user'	=> $users['id_user']
							];
							
							$this->session->set_userdata($data);
							
							if ($users['level']=="admin") 
							{
								
								redirect('Dashboard/index');
							}
							elseif ($this->session->userdata('level')=="pemilik") 
							{
								redirect('pemilik/databarang','refresh');
									
							}
							
				// }
				else
				{
					$this->session->set_flashdata('pesan','<div  class="alert alert-danger" role="alert">Password Salah</div>');
				redirect('Login');				
				}
			}
			else
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Akun Anda Belum Diaktifkan</div>');
				redirect('Login');		
			}
		}
		else
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Username Bellum Terdaftar Daftar</div>');
			redirect('Login');
		}
	}






	public function logout()
	{

		if ($this->session->userdata('username'))
		{
				$this->session->unset_userdata('username');
				$this->session->unset_userdata('level');
				$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Berhasil Keluar Sistem</div>');
				redirect('Login');
		}

		

	}

	public function regist_ss()
	{
		$data['title'] = 'Halaman Registrasi';
		$this->load->view('frontend/registrasi/index',$data);
	}
	public function saves_ad()
	{
		$this->Model_login->save_adds();
	}
	

	






}
