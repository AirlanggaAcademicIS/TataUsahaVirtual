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
        } 
	public function index()
	{
            $this->load->view('login');
	}

	public function sign_in(){   
            $nim = $this->input->post('nim');
            $password = $this->input->post('password');
            $hasil = false;
            if($nim==""||$password==""){
                
            }
            else{
                $this->load->model('models_mahasiswa');
                $hasil = $this->models_mahasiswa->sign_in($nim, $password);
            }
            
            if($hasil==true){
                redirect(base_url("pages"), 'refresh');
            }
            else{
                $this->load->view('login');
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
                $hasil = $this->models_petugas_tu->sign_in($nip, $password);
            }
            
            if($hasil==true){
                redirect(base_url("tupages"), 'refresh');
            }
            else{
                $this->load->view('login_tu');
            }
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