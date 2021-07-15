<?php
    class User_model extends CI_Model{

        public function create($formArray){
            
            $this->db->insert('ci',$formArray);
        }
        
    }
?>