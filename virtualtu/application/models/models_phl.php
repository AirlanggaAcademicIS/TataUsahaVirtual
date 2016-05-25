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
            'jadwal_request' => $jadwal_request
        );
        return $this->db->insert('ganti_jadwal', $data);

    }

}