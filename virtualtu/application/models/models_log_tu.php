<?php
class Models_log_tu extends CI_Model {

    function Models_log_tu() { 
        parent::__construct();
        $this->load->database();
    } 
    
    public function sign_in($nim, $password){
        $this->db->where('nim', $nim);
        $query = $this->db->get('mahasiswa');
        
        $i = 0;
        foreach ($query->result() as $row)
        {
            $user = array(
                'nim' => $row->nim,
                'password' => $row->password
            );
            
            $i++;
        }
        
        if($user['password']==$password){
            return true;
        }
        else{
            return false;
        }
    }

    function input_log_tu($nim, $tanggal_log, $id_kategori_log, $isi_log){
        $data = array(
            'nim' => $nim,
            'tanggal_log' => $tanggal_log,
            'id_kategori_log' => $id_kategori_log,
            'isi_log' => $isi_log
        );
        return $this->db->insert('log_tu', $data);
    }
    
    function getLogTu($nim, $tanggal_log){
        $this->db->where('nim', $nim);
        $this->db->where('tanggal_log', $tanggal_log);
        $query = $this->db->get('log_tu');
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {
            $hasil = $row['id_log_tu'];
            
            $i++;
        }
        
        return $hasil;
    }

    function getall() {
        $query = $this->db->query('SELECT * FROM log_tu q1, kategori q2 WHERE q1.id_kategori_log = q2.id_kategori');
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {
            $log_tu[$i]['id_log_tu'] = $row['id_log_tu'];
            $log_tu[$i]['nim'] = $row['nim'];
            $log_tu[$i]['tanggal_log'] = $row['tanggal_log'];
            $log_tu[$i]['id_kategori'] = $row['id_kategori'];
            $log_tu[$i]['jenis_kategori'] = $row['jenis_kategori'];
            $log_tu[$i]['isi_log'] = $row['isi_log'];
            
            $i++;
        }
        return $log_tu;
    }

}