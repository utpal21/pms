<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Admin_Controller extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$id=$this->session->userdata('id');
		if($id!=NULL)
		{
			redirect('index.php/super_admin','refresh');
		}
		
	}

	public function index()
	{
		$this->load->view('login');
	}
	public function login_check()
	{
		$data=array();
		$data['username']=$_POST['username'];
		$data['password']=$_POST['password'];
		$result=$this->admin_login_model->login_check_info($data);
		
		$sdata=array();
		if($result)
		{
			$sdata['id']=$result->id;
			$sdata['user_type']=$result->user_type;
			$sdata['username']=$result->username;
			$sdata['company']=$result->company;
			$sdata['department']=$result->department;
			$sdata['section']=$result->section;
			$sdata['employee_name']=$result->employee_name;
			$sdata['employee_id']=$result->employee_id;
			$sdata['add_per']=$result->add_per;
			$sdata['view_per']=$result->view_per;
			$sdata['edit_per']=$result->edit_per;
			$sdata['delete_per']=$result->delete_per;
			//start pages
			$sdata['student']=$result->student;
			$sdata['guest_teacher']=$result->guest_teacher;
			$sdata['faculty_tour']=$result->faculty_tour;
			$sdata['indus_tour']=$result->indus_tour;
			$sdata['indus_linkage']=$result->indus_linkage;
			$sdata['indus_attachment']=$result->indus_attachment;
			$sdata['mou_rnd']=$result->mou_rnd;
			$sdata['job_placement']=$result->job_placement;
			$sdata['wshop_seminer_fair']=$result->wshop_seminer_fair;
			$sdata['target_indus']=$result->target_indus;
			$sdata['counseling']=$result->counseling;
			$sdata['visited_guest']=$result->visited_guest;
			$sdata['story']=$result->story;
			
			$sdata['create_user']=$result->create_user;
			$sdata['create_dept']=$result->create_dept;
			$sdata['create_session']=$result->create_session;
			$sdata['story']=$result->story;
			//end pages
			
			$this->session->set_userdata($sdata);
			
			redirect('index.php/super_admin/index');
		}
		else
		{
			$sdata['exception']='Oh! please enter valid Username/Password';
			$this->session->set_userdata($sdata);
			redirect('index.php/admin_controller/index');
		}
	}
	
}