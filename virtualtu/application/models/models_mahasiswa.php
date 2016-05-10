<?php
class Models_mahasiswa extends CI_Model {

    function Models_mahasiswa() { 
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

    function input_user($username, $password){
        $data = array(
            'username' => $username,
            'password' => $password
        );
        return $this->db->insert('user', $data);

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