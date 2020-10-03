<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Admin_Login extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$admin_id=$this->session->userdata('admin_id');
		if($admin_id!=NULL)
		{
			redirect('index.php/super_admin','refresh');
		}
		
	}

	public function index()
	{
		$this->load->view('admin/login');
	}
	public function login_check()
	{
		$data=array();
		$data['admin_email_address']=$_POST['admin_email_address'];
		$data['password']=$_POST['password'];
		$result=$this->admin_login_model->login_check_info($data);
		
		$sdata=array();
		if($result)
		{
			$sdata['admin_id']=$result->admin_id;
			$sdata['admin_name']=$result->admin_name;
			$sdata['admin_email_address']=$result->admin_email_address;
			$this->session->set_userdata($sdata);
			
			redirect('index.php/super_admin/index');
		}
		else
		{
			$sdata['exception']='Wow! please enter valid User Id/Password';
			$this->session->set_userdata($sdata);
			redirect('index.php/admin_login/index');
		}
	}
	
}