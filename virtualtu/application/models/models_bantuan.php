<?php
class Models_bantuan extends CI_Model {

    function Models_bantuan() { 
        parent::__construct();
        $this->load->database();
    } 
    
    function getbantuan($id){
        $sql = "SELECT b.id_bantuan, b.id_log_tu , d.nama_dosen, b.kepada_bagian, b.deskripsi, l.nim, l.tanggal_log, l.isi_log, m.nama_mahasiswa, m.email FROM bantuan_fasilitas b, log_tu l, mahasiswa m, dosen d WHERE b.id_log_tu = l.id_log_tu AND b.id_log_tu = ".$id." AND m.nim = l.nim AND d.id_dosen = b.dosen_wali";
        $query = $this->db->query($sql);
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {   
            $hasil['id_bantuan'] = $row['id_bantuan'];
            $hasil['id_log_tu'] = $row['id_log_tu'];
            $hasil['nama_dosen'] = $row['nama_dosen'];
            $hasil['nim'] = $row['nim'];
            $hasil['nama_mahasiswa'] = $row['nama_mahasiswa'];
            $hasil['tanggal_log'] = $row['tanggal_log'];
            $hasil['isi_log'] = $row['isi_log'];
            $hasil['kepada_bagian'] = $row['kepada_bagian'];
            $hasil['deskripsi'] = $row['deskripsi'];
            $hasil['email'] = $row['email'];
            
            $i++;
        }
        
        return $hasil;
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