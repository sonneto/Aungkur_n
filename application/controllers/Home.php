<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();   
	    $this->load->model('Retrive_data_model');     	
	}

	public function index()
	{	
		$data['title'] = 'Aungkur | Home';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header',$data);
		$this->load->view('pages/home');
		$this->load->view('template/footer');
	}

	public function viewMission(){
		$data['title'] = 'Aungkur | Mission & Vision';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/mission');
		$this->load->view('template/footer');
	}

	public function viewGoal(){
		$data['title'] = 'Aungkur | Goals & Objectives';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/goal');
		$this->load->view('template/footer');
	}

	public function viewLegal(){
		$data['title'] = 'Aungkur | Legal Status';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/legal');
		$this->load->view('template/footer');
	}
    


	public function viewEC(){
		$data['title'] = 'Aungkur | EC Members';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/ec');
		$this->load->view('template/footer');
	}

	public function viewStaffs(){
		$data['title'] = 'Aungkur | Staffs';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/staffs');
		$this->load->view('template/footer');
	}

	public function viewAddress(){
		$data['title'] = 'Aungkur | Address';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/address');
		$this->load->view('template/footer');
	}

	/*program*/
    public function viewVillageBased(){
		$data['title'] = 'Aungkur | Village Based Micro-institution Building';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/village_based');
		$this->load->view('template/footer');
	}

	public function viewHumanResource(){
		$data['title'] = 'Aungkur | Human Resource Development Program';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/human_resource');
		$this->load->view('template/footer');
	}
	public function viewWaterSanitation(){
		$data['title'] = 'Aungkur | Water Sanitation & Arsenic Mitigation Program';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/water_sanitation');
		$this->load->view('template/footer');
	}
	public function viewIncomeGen(){
		$data['title'] = 'Aungkur | Income Generation and Employment Creation Program';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/income_generation');
		$this->load->view('template/footer');
	}
	public function viewMicroCredit(){
		$data['title'] = 'Aungkur | Micro Credit ';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/micro_credit');
		$this->load->view('template/footer');
	}
	public function viewPrimaryEd(){
		$data['title'] = 'Aungkur | Primary Education (PE)';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/primary_education');
		$this->load->view('template/footer');
	}
	public function viewPrimaryHealth(){
		$data['title'] = 'Aungkur | Primary Healthcare and Support Service Development Program';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/primary_health');
		$this->load->view('template/footer');
	}
	public function viewHumanRight(){
		$data['title'] = 'Aungkur | Human Rights, Democracy and Good Governance Development Program';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/human_right');
		$this->load->view('template/footer');
	}
	public function viewSustainableNatural(){
		$data['title'] = 'Aungkur | Sustainable Natural Resource Development and Management Program';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/sustainable_natural');
		$this->load->view('template/footer');
		
	}
	public function viewGenderDev(){
		$data['title'] = 'Aungkur | Gender Development Program';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/gender_dev');
		$this->load->view('template/footer');
		
	}
	public function viewFolkCulture(){
		$data['title'] = 'Aungkur | Folk Culture';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/folk_culture');
		$this->load->view('template/footer');
		
	}


	public function viewReliefRehab(){
		$data['title'] = 'Aungkur | Relief and Rehabilitation Program';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/relief_rehab');
		$this->load->view('template/footer');
		
	}
	/*current Activities*/
	public function viewCurrentActivities(){
		$data['title'] = 'Aungkur | Current Activities';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/current_activities');
		$this->load->view('template/footer');
		
	}

	/*publications*/
	public function viewPublications(){
		$data['title'] = 'Aungkur | Annual Report';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/publications');
		$this->load->view('template/footer');
	}

	/*gallery*/
	public function viewGallery(){
		$data['title'] = 'Aungkur | Gallery';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/gallery');
		$this->load->view('template/footer');
	}
	//ed  ed_biography
	public function viewEd(){
		$data['title'] = 'Aungkur | Executive Director Message';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/executive_director');
		$this->load->view('template/footer');
	}

	//ed 
	public function viewEdBiography(){
		$data['title'] = 'Aungkur | Executive Director Biography';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$this->load->view('template/header', $data);
		$this->load->view('pages/ed_biography');
		$this->load->view('template/footer');
	}

	public function showNoticeDetails(){
		$data['title'] = 'Aungkur | Notice Details';
		$data['allnotices']= $this->Retrive_data_model->retriveAllNotice();
		$data['notice']= $this->Retrive_data_model->retriveSingleNotice($this->uri->segment(2));
		$this->load->view('template/header', $data);
		$this->load->view('pages/notice_details', $data);
		$this->load->view('template/footer');

	}


}
