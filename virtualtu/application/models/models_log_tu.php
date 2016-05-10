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

    function getAllUser() {
        $query = $this->db->get('user');
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {
            $user[$i]['username'] = $row['username'];
            $user[$i]['password'] = $row['password'];
            
            $i++;
        }
        return $user;
    }

}