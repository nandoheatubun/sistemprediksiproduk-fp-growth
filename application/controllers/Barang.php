<?php 


class Barang extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !="admin" ) {
			redirect('login','refresh');
		}
		$this->load->model('Model_barang');
		$this->load->library('excel');
		
	}

	public function masuk()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Barang/masuk';
		$config['total_rows'] = $this->Model_barang->totaldatamasuk()->num_rows();
		$config['per_page'] = 100;
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
		$data['title'] = ' | Data Barang Masuk';
		$data['datas'] = $this->Model_barang->tampildatamasuk($config['per_page'],$data['start']);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/barang/masuk/data',$data);
		$this->load->view('templates/footer');
	}

	public function tambahbarangmasuk()
	{
		$data['title'] = ' | Tambah Barang Masuk';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/barang/masuk/tambah');
		$this->load->view('templates/footer');
	}
	public function save_barangmasuk()
	{
		$this->form_validation->set_message('pesan','Kolom {field] Harus Diisi.!');
		$this->form_validation->set_rules('barang1', 'Nama Barang', 'trim|required');
		$this->form_validation->set_rules('barang2', 'Jumlah Masuk', 'trim|required');
		$this->form_validation->set_rules('barang3', 'kategori', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Menambah Data.!</div>');
			redirect('Barang/masuk','refresh');
		} else {
			$this->Model_barang->savebarangmasuk();
		}
	}
	public function editbarangmasuk($kode_barang)
	{
		$where = array('kode_barang' => $kode_barang );
		$data['datas'] =  $this->Model_barang->tampileditbarangmasuk($where);
		$data['title'] = ' | Edit Data Barang Masuk';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/barang/masuk/edit',$data);
		$this->load->view('templates/footer');
	}
	public function update_barangmasuk($kode_barang)
	{
		$where = array('kode_barang' => $kode_barang);
		$this->Model_barang->updatebarangmasuk($where);
	}
	public function hapusbarangmasuk($kode_barang)
	{
		$where = array('kode_barang' => $kode_barang );
		$this->Model_barang->hapusbarangmasuk($where);
	}

	//keluar
		public function keluar()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Barang/keluar';
		$config['total_rows'] = $this->Model_barang->totaldatakeluar()->num_rows();
		$config['per_page'] = 100;
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
		$data['title'] = ' | Data Barang Masuk';
		$data['datas'] = $this->Model_barang->tampildatakeluar($config['per_page'],$data['start']);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/barang/keluar/data',$data);
		$this->load->view('templates/footer');
	}

	public function tambahbarangkeluar()
	{
		$data['title'] = ' | Tambah Barang keluar';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/barang/keluar/tambah');
		$this->load->view('templates/footer');
	}
	public function save_barangkeluar()
	{
		$this->form_validation->set_message('pesan','Kolom {field] Harus Diisi.!');
		$this->form_validation->set_rules('kode_barang', 'Kode Barang', 'trim|required');
		$this->form_validation->set_rules('jumlah_keluar', 'Jumlah Keluar', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Menambah Data.!</div>');
			redirect('Barang/keluar','refresh');
		} else {
			$this->Model_barang->savebarangkeluar();
		}
	}
	public function editbarangkeluar($id_keluar)
	{
		$where = array('id_keluar' => $id_keluar );
		$data['datas'] =  $this->Model_barang->tampileditbarangkeluar($where);
		$data['title'] = ' | Edit Data Barang Masuk';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/barang/keluar/edit',$data);
		$this->load->view('templates/footer');
	}
	public function update_barangkeluar($id_keluar)
	{
		$where = array('id_keluar' => $id_keluar);
		$this->Model_barang->updatebarangkeluar($where);
	}
	public function hapusbarangkeluar($id_keluar)
	{
		$where = array('id_keluar' => $id_keluar );
		$this->Model_barang->hapusbarangkeluar($where);
	}

	//
	public function suplier()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url().'barang/suplier';
		$config['total_rows'] = $this->Model_barang->totalsulplier()->num_rows();
		$config['per_page'] = 100;
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
		$data['title'] = ' | Data Suplier';
		$data['datas'] = $this->Model_barang->tampilsuplierdata($config['per_page'],$data['start']);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/suplier/data',$data);
		$this->load->view('templates/footer');
	}

	public function tsuplier()
	{
		$data['title'] = ' | Tambah Suplier';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/suplier/tambah');
		$this->load->view('templates/footer');
	}
	public function save_suplier()
	{
		$this->form_validation->set_message('pesan','Kolom {field] Harus Diisi.!');
		$this->form_validation->set_rules('nama_suplier', 'Sulplier', 'trim|required');
		$this->form_validation->set_rules('pt', 'Pt', 'trim|required');
		$this->form_validation->set_rules('telepon', 'Tanggal Masuk', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Menambah Data.!</div>');
			redirect('barang/tsuplier','refresh');
		} else {
			$this->Model_barang->savedatasuplier();
		}
	}
	public function esuplier($id_suplier)
	{
		$where = array('id_suplier' => $id_suplier );
		$data['datas'] =  $this->Model_barang->tampileditsuplier($where);
		$data['title'] = ' | Edit Data Suplier';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/suplier/edit',$data);
		$this->load->view('templates/footer');
	}
	public function update_suplier($id_suplier)
	{
		$where = array('id_suplier' => $id_suplier);
		$this->Model_barang->updatedatasuplier($where);
	}
	public function hsuplier($id_suplier)
	{
		$where = array('id_suplier' => $id_suplier );
		$this->Model_barang->hapusdatasuplier($where);
	}

	// pt
	public function ib()
	{
		$data['title'] = ' | Data Barang';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/barang/masuk/ib',$data);
		$this->load->view('templates/footer');
	}
	public function pib()
	{
		if (isset($_FILES["file"]["name"]))
		 {
			$path = $_FILES["file"]['tmp_name'];
			// $path = $_FILES["file"]['name'];
			// $path = $_FILES["file"]['size'];
			// $path = $_FILES["file"]['type'];
			$object	= PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++)
				{
					// $highestRow = $worksheet->getHighestRow(0, $row)->getValue();
					$nama_barang = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$stok = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$harga = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$nama_suplier = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$pt = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$telepon = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$data1[] = array(
						'nama_barang'=>$nama_barang,
						'stok'=>$stok,
						'harga'=>$harga,
						'nama_suplier'=>$nama_suplier,
						'pt'=>$pt,
						'telepon'=>$telepon
						// 'tanggal_masuk'=>$tanggal_masuk
					);
					// $data2[] = array(
					// 					'email' => $email,
					// 					'password' => $password
					// 				 );
				}
			}
			// print_r($data1);
			// die();
			$this->Model_barang->inserts($data1/*,$data2*/);
			redirect('barang/masuk','refresh');
		}
	}

	

	
	
}