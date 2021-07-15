<?php
    class User_model extends CI_Model{

        public function create($formArray){
            
            $this->db->insert('ci',$formArray);
        }

        public function all(){
            return $users = $this->db->get('ci')->result_array();   // SELECT * FROM ci;
        }
        
    }
?>