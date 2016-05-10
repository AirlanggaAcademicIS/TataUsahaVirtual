<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

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
    
        function Pages() { 
            parent::__construct();
            $this->load->helper('url');
        }
        
	public function index()
	{
            $this->load->view('dashboard/header');
            $this->load->view('dashboard/home');
            $this->load->view('dashboard/footer');
	}
        
        public function bantuan_fasilitas()
	{
            $this->load->view('dashboard/header');
            $this->load->view('dashboard/request_bantuan');
            $this->load->view('dashboard/footer');
	}
        
        public function pengajuan_skripsi()
	{
            $this->load->view('dashboard/header');
            $this->load->view('dashboard/request_skripsi');
            $this->load->view('dashboard/footer');
	}
        
        public function pengajuan_proposal()
	{
            $this->load->view('dashboard/header');
            $this->load->view('dashboard/request_proposal');
            $this->load->view('dashboard/footer');
	}
        
        public function absensi()
	{
            $this->load->view('dashboard/header');
            $this->load->view('dashboard/request_absensi');
            $this->load->view('dashboard/footer');
	}
        
        public function other(){
            $this->load->view('dashboard/header');
            $this->load->view('dashboard/request_other');
            $this->load->view('dashboard/footer');
        }

        public function docs_box(){   
            $this->load->model('models_document');
            $hasil = $this->models_document->getAllDocument();
            
            $data = array(
                'jumlah' => sizeof($hasil),
                'documents' => $hasil 
            );
            
            $this->load->view('dashboard/header');
            $this->load->view('dashboard/docsbox', $data);
            $this->load->view('dashboard/footer');
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