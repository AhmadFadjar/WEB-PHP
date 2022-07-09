<?php if(! defined('BASEPATH'))  exit('No direct script access allowed');
    class User_model extends CI_Model{
        public function get($username){
            $this->db->where('username', $username );
            $result = $this->db->get('login')->row();
            return $result;
        }
    }
?>