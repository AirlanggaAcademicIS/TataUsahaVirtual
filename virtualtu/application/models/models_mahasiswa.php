<?php
class Models_mahasiswa extends CI_Model {

    function Models_mahasiswa() { 
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
                'password' => $row->password,
                'nama_mahasiswa' => $row->nama_mahasiswa,
                'email' => $row->email
            );
            
            $i++;
        }
        
        return $user;
    }

}