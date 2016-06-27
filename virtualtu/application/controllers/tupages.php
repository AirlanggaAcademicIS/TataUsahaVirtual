<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tupages extends CI_Controller {

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
    
        function Tupages() { 
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
        }
        
        public function index(){
            $data_header = $this->getsess();
            
            $this->load->view('dashboard_tu/header_1', $data_header);
            $this->load->view('dashboard_tu/home');
            $this->load->view('dashboard_tu/footer');
        }
        
        private function getsess(){
            if($this->session->userdata('ptu')){
                $session = $this->session->userdata('ptu');
            }
            else{
                redirect(base_url("?m=notallow"), 'refresh');
            }
            
            $data = array(
                    'nip' => $session['nip'],
                    'nama_tu' => $session['nama_tu'],
                    'email' => $session['email'] 
                );
            
            return $data;
        }
           
        public function log_mahasiswa(){
            $data_header = $this->getsess();
            
            $this->load->model('models_log_tu');
            $hasil = $this->models_log_tu->getall();
            
            $data = array(
                'jumlah' => sizeof($hasil),
                'log_tu' => $hasil
            );
            $this->load->view('dashboard_tu/header_3', $data_header);
            $this->load->view('dashboard_tu/log_tu', $data);
            $this->load->view('dashboard_tu/footer');
        }

        public function docs_box(){ 
            $data_header = $this->getsess();
            
            $this->load->model('models_document');
            $hasil = $this->models_document->getAllDocument();
            
            $data = array(
                'jumlah' => sizeof($hasil),
                'documents' => $hasil 
            );
            
            $this->load->view('dashboard_tu/header_2', $data_header);
            $this->load->view('dashboard_tu/docsbox', $data);
            $this->load->view('dashboard_tu/footer');
	}	
        
        public function detail($id){   
            $data_header = $this->getsess();
            
            $this->load->model('models_log_tu');
            $log_tu = $this->models_log_tu->getlog($id);
            
            if($log_tu['id_kategori_log']==1){
                $this->load->model('models_absensi');
                $hasil = $this->models_absensi->getabsensi($id);
                
                $data = array(
                    'jumlah' => sizeof($hasil),
                    'absensi' => $hasil 
                );
                
                $this->load->view('dashboard_tu/header_3', $data_header);
                $this->load->view('dashboard_tu/request_absensi', $data);
                $this->load->view('dashboard_tu/footer');
            }
            else if($log_tu['id_kategori_log']==2){
                $this->load->model('models_bantuan');
                $hasil = $this->models_bantuan->getbantuan($id);
                
                $data = array(
                    'jumlah' => sizeof($hasil),
                    'bantuan' => $hasil 
                );
                
                $this->load->view('dashboard_tu/header_3', $data_header);
                $this->load->view('dashboard_tu/request_bantuan', $data);
                $this->load->view('dashboard_tu/footer');
            }
            else if($log_tu['id_kategori_log']==3){
                $this->load->model('models_proposal');
                $hasil = $this->models_proposal->getproposaldetail($id);
                
                $data = array(
                    'jumlah' => sizeof($hasil),
                    'p_proposal' => $hasil 
                );
                
                $this->load->view('dashboard_tu/header_3', $data_header);
                $this->load->view('dashboard_tu/request_proposal', $data);
                $this->load->view('dashboard_tu/footer');
            }
            else if($log_tu['id_kategori_log']==4){
                $this->load->model('models_phl');
                $hasil = $this->models_phl->getphl($id);
                
                $data = array(
                    'jumlah' => sizeof($hasil),
                    'gantijadwal' => $hasil 
                );

                $this->load->view('dashboard_tu/header_3', $data_header);
                $this->load->view('dashboard_tu/request_phl', $data);
                $this->load->view('dashboard_tu/footer');
            }
            else if($log_tu['id_kategori_log']==5){
                $this->load->model('models_skripsi');
                $hasil = $this->models_skripsi->getskripsidetail($id);
                
                $data = array(
                    'jumlah' => sizeof($hasil),
                    'p_skripsi' => $hasil 
                );
                
                $this->load->view('dashboard_tu/header_3', $data_header);
                $this->load->view('dashboard_tu/request_skripsi', $data);
                $this->load->view('dashboard_tu/footer');
            }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */