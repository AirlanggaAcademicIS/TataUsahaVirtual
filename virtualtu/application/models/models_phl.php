<?php
class Models_phl extends CI_Model {

    function Models_phl() { 
        parent::__construct();
        $this->load->database();
    } 

    function input_phl($id_log_tu, $mata_kuliah, $jumlah_sks, $jumlah_mahasiswa, $ruang_sebelumnya, $ruang_request, $jadwal_sebelumnya, $jadwal_request){
        $data = array(
            'id_log_tu' => $id_log_tu,
            'mata_kuliah' => $mata_kuliah,
            'jumlah_sks' => $jumlah_sks,
            'jumlah_mahasiswa' => $jumlah_mahasiswa,
            'ruang_sebelumnya' => $ruang_sebelumnya,
            'ruang_request' => $ruang_request,
            'jadwal_sebelumnya' => $jadwal_sebelumnya,
            'jadwal_request' => $jadwal_request,
        );
        return $this->db->insert('ganti_jadwal', $data);

    }

    function getphl($id){
        $sql = "SELECT g.id_ganti_jadwal, g.id_log_tu, g.mata_kuliah, g.jumlah_sks, g.jumlah_mahasiswa, g.ruang_sebelumnya, g.ruang_request, g.jadwal_sebelumnya, g.jadwal_request, l.nim, l.tanggal_log, l.isi_log, m.nama_mahasiswa, m.email FROM ganti_jadwal g, log_tu l, mahasiswa m WHERE g.id_log_tu = l.id_log_tu AND g.id_log_tu = ".$id." AND m.nim = l.nim";
        $query = $this->db->query($sql);
        
        $i = 0;
        foreach ($query->result_array() as $row)
        {   
            $hasil['id_ganti_jadwal'] = $row['id_ganti_jadwal'];
            $hasil['id_log_tu'] = $row['id_log_tu'];
            $hasil['nim'] = $row['nim'];
            $hasil['nama_mahasiswa'] = $row['nama_mahasiswa'];
            $hasil['tanggal_log'] = $row['tanggal_log'];
            $hasil['isi_log'] = $row['isi_log'];
            $hasil['mata_kuliah'] = $row['mata_kuliah'];
            $hasil['jumlah_sks'] = $row['jumlah_sks'];
            $hasil['jumlah_mahasiswa'] = $row['jumlah_mahasiswa'];
            $hasil['ruang_sebelumnya'] = $row['ruang_sebelumnya'];
            $hasil['ruang_request'] = $row['ruang_request'];
            $hasil['jadwal_sebelumnya'] = $row['jadwal_sebelumnya'];
            $hasil['jadwal_request'] = $row['jadwal_request'];
            $hasil['email'] = $row['email'];
            
            $i++;
        }
        
        return $hasil;
    }

}