<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages_tu extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
        function Pages_tu() { 
            parent::__construct();
            $this->load->helper('url');
        }
        
	public function index()
	{
            $this->load->view('dashboard_tu/header_tu');
            $this->load->view('dashboard_tu/tabel_mhs');
            $this->load->view('dashboard_tu/footer_tu');
	}
        
        public function respon_bantuan_fasilitas()
	{
            $this->load->view('dashboard_tu/header_tu');
            $this->load->view('dashboard_tu/respon_bantuan_tu');
            $this->load->view('dashboard_tu/footer_tu');
	}
        
        public function respon_skripsi_tu()
	{
            $this->load->view('dashboard_tu/header_tu');
            $this->load->view('dashboard_tu/respon_skripsi_tu');
            $this->load->view('dashboard_tu/footer_tu');
	}
 		public function detailrespon_skripsi_tu()
	{
            $this->load->view('dashboard_tu/header_tu');
            $this->load->view('dashboard_tu/detailrespon_skripsi_tu');
            $this->load->view('dashboard_tu/footer_tu');
	}

     public function respon_request_phl()
    {
            $this->load->view('dashboard_tu/header_tu');
            $this->load->view('dashboard_tu/respon_phl_tu');
            $this->load->view('dashboard_tu/footer_tu');
    }
        
        public function respon_pengajuan_proposal()
	{
            $this->load->view('dashboard_tu/header_tu');
            $this->load->view('dashboard_tu/respon_proposal_tu');
            $this->load->view('dashboard_tu/footer_tu');
	}
        
        public function respon_absensi()
	{
            $this->load->view('dashboard_tu/header_tu');
            $this->load->view('dashboard_tu/respon_absensi_tu');
            $this->load->view('dashboard_tu/footer_tu');
	}
        
        public function respon_other(){
            $this->load->view('dashboard_tu/header_tu');
            $this->load->view('dashboard_tu/respon_other_tu');
            $this->load->view('dashboard_tu/footer_tu');
        }

        public function docs_box(){   
            $this->load->model('models_document');
            $hasil = $this->models_document->getAllDocument();
            
            $data = array(
                'jumlah' => sizeof($hasil),
                'documents' => $hasil 
            );
            
            $this->load->view('dashboard_tu/header_tu');
            $this->load->view('dashboard_tu/docsbox_tu', $data);
            $this->load->view('dashboard_tu/footer_tu');
	}	

	public function input_u(){
		$username = $this->input->post('username');

        $password = $this->input->post('password');

        $this->load->model('m_latihan');

        $insert = $this->m_latihan->input_user($username, $password);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */