<?php 

require_once('assets/dompdf/autoload.inc.php');
use Dompdf\Dompdf;


class Mypdf 
{
	protected $ci;
	
	function __construct()
	{
		$this->ci =& get_instance();
	}
	public function generate($view, $data = array(),$filename = 'Laporan',$paper = 'A4', $orientation ='portrait')
	{
		$dompdf = new Dompdf();
		$html =  $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
		$dompdf->setPaper($paper, $orientation);
		$dompdf->render();
	    $dompdf->stream($filename . ".pdf", array("Attachment" => FALSE));
	}
}