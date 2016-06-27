<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

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
    
        function Account() { 
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
            error_reporting(0);
        } 
        
        private function checksess(){
            if($this->session->userdata('mhs')){
                redirect(base_url("pages"), 'refresh');
            }
            else if($this->session->userdata('ptu')){
                redirect(base_url("tupages"), 'refresh');
            }
        }
        
	public function index()
	{
            $this->checksess();
            if(isset($_GET['m'])){
                if($_GET['m']=='notallow')
                    $ket = "Anda belum login, silakan login terlebih dahulu.";
                else if($_GET['m']=='notlogin')
                    $ket = "Username atau password yang anda masukkan salah, silakan coba kembali.";
                else
                    $ket = "Tidak ada keterangan";
                
                $data = array(
                    'ket' => $ket
                );
            }
            else{
                $data = array(
                    );
            }
            
            $this->load->view('login', $data);
	}

	public function sign_in(){   
            $nim = $this->input->post('nim');
            $password = $this->input->post('password');
            $hasil = false;
            if($nim==""||$password==""){
                
            }
            else{
                $this->load->model('models_mahasiswa');
                $user = $this->models_mahasiswa->sign_in($nim, $password);
                
                if($user['password']==$password){
                    $hasil = true;
                }
                else{
                    $hasil = false;
                }
            }
            
            if($hasil==true){
                $sesion_array = array(
                        'nim' => $user['nim'],
                        'email' => $user['email'],
                        'nama_mahasiswa' => $user['nama_mahasiswa']
                    );

                $this->session->set_userdata('mhs', $sesion_array);
                
                redirect(base_url("pages"), 'refresh');
            }
            else{
                redirect(base_url("?m=notlogin"), 'refresh');
            }
	}     

        public function sign_in_tu(){   
            $nip = $this->input->post('nip');
            $password = $this->input->post('password');
            $hasil = false;
            if($nip==""||$password==""){
                
            }
            else{
                $this->load->model('models_petugas_tu');
                $user = $this->models_petugas_tu->sign_in($nip, $password);
                
                if($user['password']==$password){
                    $hasil = true;
                }
                else{
                    $hasil = false;
                }
            }
            
            if($hasil==true){
                $sesion_array = array(
                        'nip' => $user['nip'],
                        'email' => $user['email'],
                        'nama_tu' => $user['nama_tu']
                    );

                $this->session->set_userdata('ptu', $sesion_array);
                
                redirect(base_url("tupages"), 'refresh');
            }
            else{
                redirect(base_url("?m=notlogin"), 'refresh');
            }
	}

        public function logout(){
            $this->session->unset_userdata('mhs');
            $this->session->sess_destroy();
            
            redirect(base_url(""), 'refresh');
        }
        
        public function logout_tu(){
            $this->session->unset_userdata('ptu');
            $this->session->sess_destroy();
            
            redirect(base_url(""), 'refresh');
        }
        
}