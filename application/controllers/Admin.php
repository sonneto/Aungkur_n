<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();   
	    $this->load->model('Retrive_data_model');       
	}

	public function index()
	{	$data['title'] = 'Admin | Add Notice';
		$this->load->view('template/header',$data);
		$this->load->view('pages/home');
		$this->load->view('template/footer');
	}

	/*admin login*/
	public function viewAdminLogin(){
		$data['loginErr'] = '';
		$data['title'] = 'Aungkur | Admin Login';	
		$this->load->view('pages/adminlogin',$data);		
	}
	
	/*add notice*/
	public function viewAdminNotice(){
		$data['title'] = 'Admin | Add Notice';		
		$this->load->view('pages/notice',$data);	
	}
	
	/*add program*/
	public function viewAdminProgram(){
		$data['title'] = 'Admin | Add Program';		
		$this->load->view('pages/program',$data);		
	}


	// add notice
	public function addNotice(){
		$data['title'] = 'Admin | Add Notice';		
		$this->Retrive_data_model->insertNotice();
		$this->load->view('pages/notice',$data);		
	}

	// get notice
	public function getNotice(){
		$this->load->view('pages/home', $data);	
	}

	// check login
	public function checkLogin(){
		if($this->Retrive_data_model->validateAdminLogin()){
			$username =  $this->input->post("username");
			$this->session->set_userdata('admin_logged_in', $username);
			redirect('admin/notice');
		}
		else{
			$data['loginErr'] = 'Username and Password do not macthed';
			$this->load->view("pages/adminlogin",$data);
		}
	}

	// logout
	public function logOutAdmin(){
		$data['loginErr'] = '';
		$this->session->unset_userdata('admin_logged_in');
		$this->load->view('pages/adminlogin', $data);
	}

}
