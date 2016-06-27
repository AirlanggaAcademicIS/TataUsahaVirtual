<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tatausaha extends CI_Controller {

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
    
        function Tatausaha() { 
            parent::__construct();
            $this->load->helper('url');
        }

        function index(){
            $this->load->view('login_tu');
        }
        
        public function log_tu_bantuan($nim){   
            $tanggal = date('Y-m-d H:i:s');
            $dosen_wali = $this->input->post('dosen_wali');
            $kepada_bagian = $this->input->post('kepada_bagian');
            $deskripsi = $this->input->post('deskripsi');
            $hasil = false;
            if($nim==""||$dosen_wali==""||$kepada_bagian==""){
            }
            else{
                $this->load->model('models_log_tu');
                $hasil = $this->models_log_tu->input_log_tu($nim, $tanggal, 2, "");
                $id_log_tu = $this->models_log_tu->getLogTu($nim, $tanggal);
                if($hasil==true){
                    $this->load->model('models_bantuan');
                    $this->models_bantuan->input_bantuan($id_log_tu, $dosen_wali, $kepada_bagian, $deskripsi);
                }
                else{
                    redirect(base_url("pages/bantuan_fasilitas"), 'refresh');
                }
            } 
	   }
        
        public function log_tu_absensi($nim){   
            $tanggal = date('Y-m-d H:i:s');
            $hari = $this->input->post('hari_absen');
            $hari_absen = str_replace('/', '-', $hari);
            $keterangan_absen = $this->input->post('keterangan_absen');
            $hasil = false;
            if($nim==""||$hari_absen==""){
            }
            else{
                $this->load->model('models_log_tu');
                $hasil = $this->models_log_tu->input_log_tu($nim, $tanggal, 1, "");
                $id_log_tu = $this->models_log_tu->getLogTu($nim, $tanggal);
                if($hasil==true){
                    $this->load->model('models_absensi');
                    $this->models_absensi->input_absensi($id_log_tu, $hari_absen, $keterangan_absen);
                }
                else{
                    redirect(base_url("pages/absensi"), 'refresh');
                }
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
        
        public function gantistatus($id, $status){   
            
            if($id==0){
                
            }
            else{
                $this->load->model('models_log_tu');
                $hasil = $this->models_log_tu->updatestatus($id, $status);
            }
            
            if($hasil==true){
                redirect(base_url("tupages/log_mahasiswa"), 'refresh');
            }
            else{
                $this->load->view('tupages/log_mahasiswa');
            }
	}
        
        public function sendmailtemp(){
            $to = $this->input->post('to');
            $subjek = $this->input->post('subjek');
            $isi = $this->input->post('isi');
            
            echo $to;
            echo $subjek;
            echo $isi;
            
        }

        public function sendmail(){
            $to = $this->input->post('to');
            $subjek = $this->input->post('subjek');
            $isi = $this->input->post('isi');
            
            if($to==""||$subjek==""){
                redirect('refresh');
            }
            else{
                ini_set('max_execution_time', 30000);
                $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => "rahmat.iqbal13@gmail.com", // change it to yours
                    'smtp_pass' => "miklotof", // change it to yours
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'newline' => "\r\n",
                    'wordwrap' => TRUE
                );

                $this->load->library('email', $config);
                $this->email->from('rahmat.iqbal13@gmail.com', 'rahmat');
                $this->email->to($to);
                $this->email->subject($subjek);
                $pesan = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Riliv</title>


        <style type="text/css">
            /* Client-specific Styles */
            #outlook a {
                padding: 0;
            }

            /* Force Outlook to provide a "view in browser" menu link. */
            body {
                width: 100% !important;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
                margin: 0;
                padding: 0;
            }

            /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
            .ExternalClass {
                width: 100%;
            }

            /* Force Hotmail to display emails at full width */
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
                line-height: 100%;
            }

            /* Force Hotmail to display normal line spacing.  */
            #backgroundTable {
                margin: 0;
                padding: 0;
                width: 100% !important;
                line-height: 100% !important;
            }

            img {
                outline: none;
                text-decoration: none;
                border: none;
                -ms-interpolation-mode: bicubic;
            }

            a img {
                border: none;
            }

            .image_fix {
                display: block;
            }

            p {
                margin: 0px 0px !important;
            }

            table td {
                border-collapse: collapse;
            }

            table {
                border-collapse: collapse;
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
            }

            a {
                color: #33b9ff;
                text-decoration: none;
                text-decoration: none !important;
            }

            /*STYLES*/
            table[class=full] {
                width: 100%;
                clear: both;
            }

            /*IPAD STYLES*/
            @media only screen and (max-width: 640px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #33b9ff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }

                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #33b9ff !important;
                    pointer-events: auto;
                    cursor: default;
                }

                table[class=devicewidth] {
                    width: 440px !important;
                    text-align: center !important;
                }

                table[class=devicewidthinner] {
                    width: 420px !important;
                    text-align: center !important;
                }

                img[class=banner] {
                    width: 440px !important;
                    height: 220px !important;
                }

                img[class=colimg2] {
                    width: 440px !important;
                    height: 220px !important;
                }

            }

            /*IPHONE STYLES*/
            @media only screen and (max-width: 480px) {
                a[href^="tel"], a[href^="sms"] {
                    text-decoration: none;
                    color: #ffffff; /* or whatever your want */
                    pointer-events: none;
                    cursor: default;
                }

                .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                    text-decoration: default;
                    color: #ffffff !important;
                    pointer-events: auto;
                    cursor: default;
                }

                table[class=devicewidth] {
                    width: 280px !important;
                    text-align: center !important;
                }

                table[class=devicewidthinner] {
                    width: 260px !important;
                    text-align: center !important;
                }

                img[class=banner] {
                    width: 280px !important;
                    height: 140px !important;
                }

                img[class=colimg2] {
                    width: 280px !important;
                    height: 140px !important;
                }

                td[class="padding-top15"] {
                    padding-top: 15px !important;
                }

            }
        </style>
    </head>
    <body>
                    '.$isi.'
    </body>
    </html>';
                $this->email->message($pesan);
                $this->email->send();

                echo $this->email->print_debugger();
            }
    }

    public function do_upload() {

        $judul = $this->input->post('judul');

        $link = preg_replace("/[^a-z \d]/i", "", $judul);

        $config = array(

            'upload_path' => "./assets/poster/",

            'allowed_types' => "jpg|jpeg|gif|png|jpg-large",

            'overwrite' => TRUE,

            'max_size' => "2548",

            'max_height' => "2524",

            'max_width' => "2524",

            'file_name' => $namaimg,

        );



        $this->load->library('upload');

        $this->upload->initialize($config);

        $image = $this->upload->data();

        if (!$this->upload->do_upload()) {

            redirect(base_url("tupages/docs_box?k=success"), 'refresh');

        } else {

            redirect(base_url("tupages/docs_box?k=success"), 'refresh');

        }

    }

    }

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */