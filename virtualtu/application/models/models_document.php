<?php
class Models_document extends CI_Model {

    function Models_document() { 
        parent::__construct();
        $this->load->database();
    } 
    
    public function getAllDocument(){
        $this->db->order_by("tanggal_upload", "desc");
        $query = $this->db->get('dokumen');
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {
            $dokumen[$i]['nama_dokumen'] = $row['nama_dokumen'];
            $dokumen[$i]['url_dokumen'] = $row['url_dokumen'];
            $dokumen[$i]['tanggal_upload'] = $row['tanggal_upload'];
            
            $i++;
        }
        return $dokumen;
    }

}