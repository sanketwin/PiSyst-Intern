<?php
    class Users extends CI_Controller{

        public function index(){
            $this->load->model('User_model');
            $users = $this->User_model->all();
            $data = array();
            $data['users'] = $users;
            $this->load->view('list',$data);
        }

        public function create(){
            $this->load->model('User_model');
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('address','Address','required');
            $this->form_validation->set_rules('password','Password','required');
            
            if($this->form_validation->run() == FALSE){

                $this->load->view('create');
            }else{
                // Save user record in database

                $formArray = array();
                $formArray['name'] = $this->input->post('name');
                $formArray['email'] = $this->input->post('email');
                $formArray['address'] = $this->input->post('address');
                $formArray['password'] = $this->input->post('password');
                $formArray['created'] = date('Y-m-d');

                $this->User_model->create($formArray);

                $this->session->set_flashdata('success','Record added successfully.!!');
                redirect(base_url().'index.php/Users/index');
            }   
        } 
    }
?>