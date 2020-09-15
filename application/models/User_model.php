<?php
    
    class User_model extends CI_Model {

      public function get_username($username){
        $this->db->select("*");
        $this->db->from("tbl_user");
        $this->db->where("username", $username);
        $query = $this->db->get();
        return $query->row();
      }

      public function login($username, $password){
        $user = $this->get_username($username);
        if (!empty($user)) {
            if ($password == $user->password) {
                return $user;
            } else {
                return FALSE;
            }
          } else {
            return FALSE;
          }
        }
      } 

      
  