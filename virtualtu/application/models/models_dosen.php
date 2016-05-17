<?php
class Models_dosen extends CI_Model {

    function Models_dosen() { 
        parent::__construct();
        $this->load->database();
    } 

    function getalldosen() {
        $query = $this->db->get('dosen');
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {
            $dosen[$i]['id_dosen'] = $row['id_dosen'];
            $dosen[$i]['nama_dosen'] = $row['nama_dosen'];
            $dosen[$i]['telepon'] = $row['telepon'];
            $dosen[$i]['email'] = $row['email'];
            
            $i++;
        }
        return $dosen;
    }

}