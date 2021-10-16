<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once './assets/plugins/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf extends Dompdf {
    public $filename;

    public function __construct(){
        parent::__construct();
        $this->filename = "laporan.pdf";
    }
   
    protected function ci()
    {
        return get_instance();
    }
    
    public function load_view($view, $data = array(), $paper_size, $orientation, $stream = TRUE){
		$html = $this->ci()->load->view($view, $data, TRUE);

		$options = new Options();
		$options->set('isRemoteEnabled', TRUE);
        //$options->set('isHtml5ParserEnabled', TRUE);
        $options->set('debugCss', TRUE);

		$dompdf = new Dompdf($options);
        
        $dompdf->setPaper($paper_size, $orientation);
		$dompdf->loadHtml($html);
		$dompdf->render();
		if ($stream) {
			$dompdf->stream($this->filename, ['Attachment' => 0]);
		} else {
			return $dompdf->output();
		}
        
    }
}
