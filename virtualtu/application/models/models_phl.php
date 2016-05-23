<?php
class Models_phl extends CI_Model {

    function Models_phl() { 
        parent::__construct();
        $this->load->database();
    } 
    
    public function sign_in($nim, $password){
        $this->db->where('nim', $nim);
        $query = $this->db->get('mahasiswa');
        
        $i = 0;
        foreach ($query->result() as $row)
        {
            $user = array(
                'nim' => $row->nim,
                'password' => $row->password
            );
            
            $i++;
        }
        
        if($user['password']==$password){
            return true;
        }
        else{
            return false;
        }
    }

    function input_phl($id_log_tu, $mata_kuliah, $jumlah_sks, $jumlah_mahasiswa, $ruang_sebelumnya, $ruang_request, $jadwal_sebelumnya, $jadwal_request, $hari){
        $data = array(
            'id_log_tu' => $id_log_tu,
            'mata_kuliah' => $mata_kuliah,
			'jumlah_sks' => $jumlah_sks,
            'jumlah_mahasiswa' => $jumlah_mahasiswa,
			'ruang_sebelumnya' => $ruang_sebelumnya,
			'ruang_request' => $ruang_request,
			'jadwal_sebelumnya' => $jadwal_sebelumnya,
			'jadwal_request' => $jadwal_request,
			'hari' => $hari
        );
        return $this->db->insert('ganti_jadwal', $data);

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