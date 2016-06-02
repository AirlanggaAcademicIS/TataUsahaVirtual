<?php
class Models_absensi extends CI_Model {

    function Models_absensi() { 
        parent::__construct();
        $this->load->database();
    } 
    
    function getabsensi($id){
        $sql = "SELECT a.id_presensi, a.id_log_tu , a.hari_absen, a.keterangan_absen, l.nim, l.tanggal_log, l.isi_log, m.nama_mahasiswa FROM absensi a, log_tu l, mahasiswa m WHERE a.id_log_tu = l.id_log_tu AND a.id_log_tu = ".$id." AND m.nim = l.nim";
        $query = $this->db->query($sql);
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {   
            $hasil['id_presensi'] = $row['id_presensi'];
            $hasil['id_log_tu'] = $row['id_log_tu'];
            $hasil['hari_absen'] = str_replace('-', '/', $row['hari_absen']);
            $hasil['keterangan_absen'] = $row['keterangan_absen'];
            $hasil['nim'] = $row['nim'];
            $hasil['nama_mahasiswa'] = $row['nama_mahasiswa'];
            $hasil['tanggal_log'] = $row['tanggal_log'];
            $hasil['isi_log'] = $row['isi_log'];
            
            $i++;
        }
        
        return $hasil;
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