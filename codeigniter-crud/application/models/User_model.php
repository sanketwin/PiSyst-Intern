<?php
    class User_model extends CI_Model{

        public function create($formArray){
            
            $this->db->insert('ci',$formArray);
        }

        public function all(){
            return $users = $this->db->get('ci')->result_array();   // SELECT * FROM ci;
        }

        public function getUser($id){
            $this->db->where('id',$id);
            return $user = $this->db->get("ci")->row_array();
        }

        public function updateUser($id,$formArray){
            $this->db->where('id',$id);
            $this->db->update('ci',$formArray);     
        }

        public function deleteUser($id){
            $this->db->where('id',$id);
            $this->db->delete('ci');
        }
        
    }
?>