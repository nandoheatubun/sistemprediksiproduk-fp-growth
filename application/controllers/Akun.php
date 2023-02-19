<?php 


class Akun extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !="admin" ) {
			redirect('login','refresh');
		}
		$this->load->model('Model_akun');
	}

	public function index()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Akun/index';
		$config['total_rows'] = $this->Model_akun->totaldata()->num_rows();
		$config['per_page'] = 10;
      	$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Selanjutnya';
        $config['prev_link']        = 'Sebelumnya';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(3);
		$data['title'] = ' | Data Akun Pengguna';
		$data['datas'] = $this->Model_akun->tampildata($config['per_page'],$data['start']);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/akun/data',$data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = ' | Tambah Akun Pengguna ';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/akun/tambah');
		$this->load->view('templates/footer');
	}
	public function save_akun()
	{
		$this->form_validation->set_message('pesan','Kolom {field] Harus Diisi.!');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('level', 'level akun', 'trim|required');
		$this->form_validation->set_rules('status_akun', 'Status Akun', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Menambah Data.!</div>');
			redirect('Akun/tambah','refresh');
		} else {
			$this->Model_akun->saveakun();
		}
	}
	/*public function edit($id_user)
	{
		$where = array('id_user' => $id_user );
		$data['datas'] =  $this->Model_akun->tampileditbarang($where);
		$data['title'] = ' | Edit Data Kategori Produk';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/barang/edit',$data);
		$this->load->view('templates/footer');
	}
	*/
	
	public function hapus($id_user)
	{
		$where = array('id_user' => $id_user );
		$this->Model_akun->hapusakun($where);
	}

	
	
}