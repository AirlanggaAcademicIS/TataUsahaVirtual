<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

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
    
        function Mahasiswa() { 
            parent::__construct();
            $this->load->helper('url');
        }
        
        public function log_tu_absensi(){   
            $nim = $this->input->post('nim');
            $tanggal = date('Y-m-d H:i:s');
            $id_kategori = 1;
            $isi_log = $this->input->post('isi_log');
            $hari_absen = $this->input->post('hari_absen');
            $keterangan_absen = $this->input->post('keterangan_absen');
            $hasil = false;
            if($nim==""){
                
            }
            else{
                $this->load->model('models_log_tu');
                $hasil = $this->models_log_tu->input_log_tu($nim, $tanggal, $id_kategori, $isi_log);
                $id_log_tu = $this->models_log_tu->getLogTu($nim, $tanggal);
            }
            
            if($hasil==true){
                $this->load->model('models_absensi');
                $results = $this->models_absensi->input_absensi($id_log_tu, $hari_absen, $keterangan_absen);
            }
            else{
                redirect(base_url("pages/absensi"), 'refresh');
            }
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

	public function input_u(){
		$username = $this->input->post('username');

        $password = $this->input->post('password');

        $this->load->model('m_latihan');

        $insert = $this->m_latihan->input_user($username, $password);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */