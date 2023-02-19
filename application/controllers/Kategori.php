<?php 


class Kategori extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !="admin" ) {
			redirect('login','refresh');
		}
		$this->load->model('Model_kategori');
	}

	public function index()
	{
		
		$data['title'] = ' | Data Barang';
		$data['datas'] = $this->Model_kategori->tampildata();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/kategori/data',$data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = ' | Tambah Kategori Barang ';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/kategori/tambah');
		$this->load->view('templates/footer');
	}
	public function save_kategori()
	{
		$this->form_validation->set_message('pesan','Kolom {field] Harus Diisi.!');
		$this->form_validation->set_rules('kategori', 'Kategori Barang', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Menambah Data.!</div>');
			redirect('Kategori/index','refresh');
		} else {
			$this->Model_kategori->savekategori();
		}
	}
	public function edit($id_kategori)
	{
		$where = array('id_kategori' => $id_kategori );
		$data['datas'] =  $this->Model_kategori->tampileditkategori($where);
		$data['title'] = ' | Edit Data Kategori Produk';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/kategori/edit',$data);
		$this->load->view('templates/footer');
	}
	public function update_kategori($id_kategori)
	{
		$where = array('id_kategori' => $id_kategori);
		$this->Model_kategori->updatekategori($where);
	}
	public function hapus($id_kategori)
	{
		$where = array('id_kategori' => $id_kategori );
		$this->Model_kategori->hapuskategori($where);
	}

	
	
}