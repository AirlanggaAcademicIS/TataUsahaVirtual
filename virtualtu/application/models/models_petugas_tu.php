<?php
class Models_petugas_tu extends CI_Model {

    function Models_petugas_tu() { 
        parent::__construct();
        $this->load->database();
    } 
    
    public function sign_in($nip, $password){
        $this->db->where('nip', $nip);
        $query = $this->db->get('tata_usaha');
        
        $i = 0;
        foreach ($query->result() as $row)
        {
            $user = array(
                'nip' => $row->nip,
                'password' => $row->password,
                'nama_tu' => $row->nama_tu,
                'email' => $row->email
            );
            
            $i++;
        }
        
        return $user;
    }

}