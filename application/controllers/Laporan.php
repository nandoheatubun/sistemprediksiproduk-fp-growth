<?php 


class Laporan extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('level') !="admin" ) {
			redirect('login','refresh');
		}
		$this->load->model('Model_barang');
	}

	

	public function prediksiproduk()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Laporan/prediksiproduk';
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
		$data['title'] = ' | Prediksi Produk';
		$data['barangkeluar'] = $this->Model_barang->tampildatakeluar($config['per_page'],$data['start']);
		$data['totaltransaksi'] = $this->Model_barang->totaltransaksi($config['per_page'],$data['start']);
		$data['frekuensitiapbarang'] = $this->Model_barang->frekuensitiapbarang($config['per_page'],$data['start']);
		$data['frekuensitiapbarang2items'] = $this->Model_barang->frekuensitiapbarang2items($config['per_page'],$data['start']);
		$data['frekuensitiapbarang3items'] = $this->Model_barang->frekuensitiapbarang3items($config['per_page'],$data['start']);
		$data['barangkeluartotal'] = $this->Model_barang->barangkeluartotal($config['per_page'],$data['start']);
		
		// echo "<pre>";
		// print_r($data['frekuensitiapbarang3items']); die();
		// echo "</pre>";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backend/laporan/barang/keluar/data',$data);
		$this->load->view('templates/footer');
	}


	
    // barang keluar
    public function printbarangkeluar()
    {
        $this->load->library('mypdf');
        $b3 = $this->input->post('b3');
        $b4 = $this->input->post('b4');
        $data['datas'] = $this->Model_barang->cetakbkeluar($b3,$b4); 
        $this->mypdf->generate('backend/laporan/barang/keluar/cetak',$data,'Laporan-Barang Keluar','A4','landscape');

    }

   


}
