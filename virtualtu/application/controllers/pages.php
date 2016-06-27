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
            $this->load->library('session');
        }
        
	public function index(){
            $data_header = $this->getsess();
            
            $this->load->view('dashboard/header_1', $data_header);
            $this->load->view('dashboard/home');
            $this->load->view('dashboard/footer');
        }

        public function jadwaldosen(){
            $data_header = $this->getsess();
            
            $this->load->view('dashboard/header_3_jadwal', $data_header);
            $this->load->view('dashboard/jadwaldosen');
            $this->load->view('dashboard/footer_dosen');
        }

        public function jadwalruang(){
            $data_header = $this->getsess();
            
            $this->load->view('dashboard/header_3_jadwal', $data_header);
            $this->load->view('dashboard/jadwalruang');
            $this->load->view('dashboard/footer_ruang');
        }
        
        public function bantuan_fasilitas(){
            $data_header = $this->getsess();
            $this->load->model('models_dosen');
            $hasil = $this->models_dosen->getalldosen();
            
            if(isset($_GET['m'])){
                $data = array(
                    'ket' => $_GET['m'],
                    'jumlah' => sizeof($hasil),
                    'dosen' => $hasil,
                    'nim' => $data_header['nim'],
                    'nama_mahasiswa' => $data_header['nama_mahasiswa']
                );
            }
            else{
                $data = array(
                    'jumlah' => sizeof($hasil),
                    'dosen' => $hasil,
                    'nim' => $data_header['nim'],
                    'nama_mahasiswa' => $data_header['nama_mahasiswa']
                    );
            }
            
            $this->load->view('dashboard/header_3', $data_header);
            $this->load->view('dashboard/request_bantuan', $data);
            $this->load->view('dashboard/footer');
	   }

       public function phl(){
           $data_header = $this->getsess();
           
           if(isset($_GET['m'])){
                $data = array(
                    'ket' => $_GET['m'],
                    'nim' => $data_header['nim'],
                    'nama_mahasiswa' => $data_header['nama_mahasiswa']
                );
            }
            else{
                $data = array(
                    'nim' => $data_header['nim'],
                    'nama_mahasiswa' => $data_header['nama_mahasiswa']
                    );
            }
            
            $this->load->view('dashboard/header_3', $data_header);
            $this->load->view('dashboard/request_phl', $data);
            $this->load->view('dashboard/footer');
       }
        
        public function pengajuan_skripsi(){
            $data_header = $this->getsess();
            
            $this->load->model('models_dosen');
            $hasil = $this->models_dosen->getalldosen();
            
            $this->load->model('models_proposal');
            $proposal = $this->models_proposal->getproposalid($data_header['nim']);
            
            if(isset($_GET['m'])){
                $data = array(
                    'ket' => $_GET['m'],
                    'jumlah' => sizeof($hasil),
                    'dosen' => $hasil,
                    'jumlah_proposal' => sizeof($proposal),
                    'nim' => $data_header['nim'],
                    'nama_mahasiswa' => $data_header['nama_mahasiswa'],
                    'proposal' => $proposal
                );
            }
            else{
                $data = array(
                    'jumlah' => sizeof($hasil),
                    'dosen' => $hasil,
                    'jumlah_proposal' => sizeof($proposal),
                    'nim' => $data_header['nim'],
                    'nama_mahasiswa' => $data_header['nama_mahasiswa'],
                    'proposal' => $proposal
                );
            }
            
            $this->load->view('dashboard/header_3', $data_header);
            $this->load->view('dashboard/request_skripsi', $data);
            $this->load->view('dashboard/footer');
	   }
        
        public function pengajuan_proposal(){
            $data_header = $this->getsess();
            
            $this->load->model('models_dosen');
            $hasil = $this->models_dosen->getalldosen();
            
            if(isset($_GET['m'])){
                $data = array(
                    'ket' => $_GET['m'],
                    'jumlah' => sizeof($hasil),
                    'dosen' => $hasil,
                    'nim' => $data_header['nim'],
                    'nama_mahasiswa' => $data_header['nama_mahasiswa']
                );
            }
            else{
                $data = array(
                    'jumlah' => sizeof($hasil),
                    'dosen' => $hasil,
                    'nim' => $data_header['nim'],
                    'nama_mahasiswa' => $data_header['nama_mahasiswa']
                    );
            }
            
            $this->load->view('dashboard/header_3', $data_header);
            $this->load->view('dashboard/request_proposal', $data);
            $this->load->view('dashboard/footer');
	   }
        
        public function absensi(){
            $data_header = $this->getsess();
            
            if(isset($_GET['m'])){
                $data = array(
                    'ket' => $_GET['m'],
                    'nim' => $data_header['nim'],
                    'nama_mahasiswa' => $data_header['nama_mahasiswa']
                );
            }
            else{
                $data = array(
                    'nim' => $data_header['nim'],
                    'nama_mahasiswa' => $data_header['nama_mahasiswa']
                    );
            }

            $this->load->view('dashboard/header_3', $data_header);
            $this->load->view('dashboard/request_absensi', $data);
            $this->load->view('dashboard/footer');
	   }
        
        public function other(){
            $data_header = $this->getsess();
            $this->load->view('dashboard/header_3', $data_header);
            $this->load->view('dashboard/request_other');
            $this->load->view('dashboard/footer');
        }

        public function docs_box(){
            $data_header = $this->getsess();
            
            $this->load->model('models_document');
            $hasil = $this->models_document->getAllDocument();
            
            $data = array(
                'jumlah' => sizeof($hasil),
                'documents' => $hasil 
            );
            
            $this->load->view('dashboard/header_2', $data_header);
            $this->load->view('dashboard/docsbox', $data);
            $this->load->view('dashboard/footer');
	}	
        
        private function getsess(){
            if($this->session->userdata('mhs')){
                $session = $this->session->userdata('mhs');
            }
            else{
                redirect(base_url("?m=notallow"), 'refresh');
            }
            
            $data = array(
                    'nim' => $session['nim'],
                    'nama_mahasiswa' => $session['nama_mahasiswa'],
                    'email' => $session['email'] 
                );
            
            return $data;
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */