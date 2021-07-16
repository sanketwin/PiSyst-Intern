<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
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
			redirect(base_url().'welcome/index');
		}
	}

	public function  edit($id){
		$this->load->model('User_model');
		$user = $this->User_model->getUser($id);
		$data = array();
		$data['user'] = $user;

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() == FALSE){

			$this->load->view('edit',$data);
		}else{
			//Update user record
			$formArray = array();
			$formArray['name'] = $this->input->post('name');
			$formArray['email'] = $this->input->post('email');
			$formArray['address'] = $this->input->post('address');
			$formArray['password'] = $this->input->post('password');
			$formArray['updated'] = date('Y-m-d');
			$this->User_model->updateUser($id,$formArray);
			$this->session->set_flashdata('success','Record updated Successfully.!');
			redirect(base_url().'welcome/index');
		}



	}

	public function delete($id){

		$this->load->model('User_model');
		$user = $this->User_model->getUser($id);
		if(empty($user)){
			$this->session->set_flashdata('failure','Record Not Found.!');
			redirect(base_url().'welcome/index');
		}
		$this->User_model->deleteUser($id);
		$this->session->set_flashdata('success','Record deleted Successfully.!!');
		redirect(base_url().'welcome/index');
	}
}
