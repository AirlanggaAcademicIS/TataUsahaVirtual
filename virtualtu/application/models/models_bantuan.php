<?php
class Models_bantuan extends CI_Model {

    function Models_bantuan() { 
        parent::__construct();
        $this->load->database();
    } 

    function input_bantuan($id_log_tu, $dosen_wali, $kepada_bagian, $deskripsi){
        $data = array(
            'id_log_tu' => $id_log_tu,
            'dosen_wali' => $dosen_wali,
            'kepada_bagian' => $kepada_bagian,
            'deskripsi' => $deskripsi
        );
        return $this->db->insert('bantuan_fasilitas', $data);

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