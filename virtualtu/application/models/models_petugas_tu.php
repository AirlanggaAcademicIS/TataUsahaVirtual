<?php
class Models_petugas_tu extends CI_Model {

    function Models_petugas_tu() { 
        parent::__construct();
        $this->load->database();
    } 
    
    public function sign_in($nip, $password){
        $this->db->where('nip', $nip);
        $query = $this->db->get('tata_usaha');
        
        $i = 0;
        foreach ($query->result() as $row)
        {
            $user = array(
                'nip' => $row->nip,
                'password' => $row->password
            );
            
            $i++;
        }
        if(isset($user)){
            if($user['password']==$password){
                return true;
            }
            else{
                return false;
            }
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