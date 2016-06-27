<?php
class Models_log_tu extends CI_Model {

    function Models_log_tu() { 
        parent::__construct();
        $this->load->database();
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
    
    function updatestatus($id, $status){
        $data = array(
            'status' => $status
        );
        
        $this->db->where('id_log_tu', $id);
        return $this->db->update('log_tu', $data);
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
        $query = $this->db->query('SELECT * FROM log_tu q1, kategori q2 WHERE q1.id_kategori_log = q2.id_kategori ORDER BY q1.tanggal_log DESC');
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {
            $log_tu[$i]['id_log_tu'] = $row['id_log_tu'];
            $log_tu[$i]['nim'] = $row['nim'];
            $log_tu[$i]['tanggal_log'] = $row['tanggal_log'];
            $log_tu[$i]['id_kategori'] = $row['id_kategori'];
            $log_tu[$i]['jenis_kategori'] = $row['jenis_kategori'];
            $log_tu[$i]['isi_log'] = $row['isi_log'];
            $log_tu[$i]['status'] = $row['status'];
            
            $i++;
        }
        return $log_tu;
    }
    
    function getlog($id){
        $this->db->where('id_log_tu', $id);
        $query = $this->db->get('log_tu');
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {
            $log_tu['id_log_tu'] = $row['id_log_tu'];
            $log_tu['nim'] = $row['nim'];
            $log_tu['tanggal_log'] = $row['tanggal_log'];
            $log_tu['id_kategori_log'] = $row['id_kategori_log'];
            $log_tu['isi_log'] = $row['isi_log'];
            $log_tu['status'] = $row['status'];
            
            $i++;
        }
        
        return $log_tu;
    }

}