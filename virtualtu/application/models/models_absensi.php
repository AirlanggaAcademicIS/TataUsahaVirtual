<?php
class Models_absensi extends CI_Model {

    function Models_absensi() { 
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

    function input_absensi($id_log_tu, $hari_absen, $keterangan_absen){
        $data = array(
            'id_log_tu' => $id_log_tu,
            'hari_absen' => $hari_absen,
            'keterangan_absen' => $keterangan_absen
        );
        return $this->db->insert('absensi', $data);

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