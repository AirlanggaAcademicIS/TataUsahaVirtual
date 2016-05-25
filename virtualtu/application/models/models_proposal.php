<?php
class Models_proposal extends CI_Model {

    function Models_proposal() { 
        parent::__construct();
        $this->load->database();
    } 

    function input_proposal($nim, $judul, $doswal, $dosbing1, $dosbing2){
        $data = array(
            'nim' => $nim,
            'judul_proposal' => $judul,
            'dosen_wali' => $doswal,
            'pembimbing_1' => $dosbing1,
            'pembimbing_2' => $dosbing2
                
        );
        return $this->db->insert('proposal_skripsi', $data);
    }
    
    function input_pengajuan_proposal($id_log_tu, $id_proposal_skripsi, $topik){
        $data = array(
            'id_log_tu' => $id_log_tu,
            'id_proposal_skripsi' => $id_proposal_skripsi,
            'topik' => $topik
        );
        return $this->db->insert('pengajuan_proposal', $data);
    }
    
    function getproposal($nim, $judul){
        $this->db->where('nim', $nim);
        $this->db->where('judul_proposal', $judul);
        $query = $this->db->get('proposal_skripsi');
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {
            $hasil = $row['id_proposal_skripsi'];
            
            $i++;
        }
        
        return $hasil;
    }
    
    function getall($nim, $judul){
        $this->db->where('nim', $nim);
        $this->db->where('judul_proposal', $judul);
        $query = $this->db->get('proposal_skripsi');
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {
            $hasil = $row['id_proposal_skripsi'];
            
            $i++;
        }
        
        return $hasil;
    }

}