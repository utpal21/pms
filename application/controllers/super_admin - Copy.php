<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Super_Admin extends CI_Controller {

	public function __construct(){
		parent:: __construct();
          $this->load->helper(array('form', 'url'));   
		  $this->load->helper('date'); 
		$id=$this->session->userdata('id');
                
		 /*if($id==NULL)
		{
			redirect('index.php/admin_controller','refresh');
		} */
		// THIS PART MUST BE NEEDED WHEN USER LOGIN FUNCTION ACTIVE
		
	}
		
		//start PAGE calling
		public function index(){
            
            $data=array();
           	$data['pageheader']=$this->load->view('pageheader','',true);
			$data['pagefooter']=$this->load->view('pagefooter','',true);
			$data['navheader']=$this->load->view('navheader','',true);
			$data['sidebar']=$this->load->view('sidebar','',true);
            $this->load->view('dashboard',$data);
		}
	
	 	
		public function department_list(){
            
            $data=array();
           	$data['common_pageheader']=$this->load->view('common_pageheader','',true);
			$data['showdata_common_footer']=$this->load->view('showdata_common_footer','',true);
			$data['department_list']=  $this->welcome_model->department_list();
            $this->load->view('department_list',$data);
		}
		public function employee_list(){
            
            $data=array();
           	$data['common_pageheader']=$this->load->view('common_pageheader','',true);
			$data['showdata_common_footer']=$this->load->view('showdata_common_footer','',true);
			$data['employee_list']=  $this->welcome_model->employee_list();
            $this->load->view('employee_list',$data);
		}
		public function possible_tenant_list(){
            
            $data=array();
           	$data['common_pageheader']=$this->load->view('common_pageheader','',true);
			$data['showdata_common_footer']=$this->load->view('showdata_common_footer','',true);
			$data['possible_tenant_list']=  $this->welcome_model->possible_tenant_list();
            $this->load->view('possible_tenant_list',$data);
		}
		public function possible_landlord_list(){
            
            $data=array();
           	$data['common_pageheader']=$this->load->view('common_pageheader','',true);
			$data['showdata_common_footer']=$this->load->view('showdata_common_footer','',true);
			$data['possible_landlord_list']=  $this->welcome_model->possible_landlord_list();
            $this->load->view('possible_landlord_list',$data);
		}
		public function landlord_list(){
            
            $data=array();
           	$data['common_pageheader']=$this->load->view('common_pageheader','',true);
			$data['showdata_common_footer']=$this->load->view('showdata_common_footer','',true);
			$data['landlord_list']=  $this->welcome_model->landlord_list();
            $this->load->view('landlord_list',$data);
		}
		public function user_list(){
            
            $data=array();
           	$data['common_pageheader']=$this->load->view('common_pageheader','',true);
			$data['showdata_common_footer']=$this->load->view('showdata_common_footer','',true);
			$data['user_list']=  $this->welcome_model->user_list();
            $this->load->view('user_list',$data);
		}
		public function possible_landlord(){
            
            $data=array();
           	$data['common_pageheader']=$this->load->view('common_pageheader','',true);
			$data['common_pagefooter']=$this->load->view('common_pagefooter','',true);
			$this->load->view('possible_landlord',$data);
		}
		public function possible_tenant(){
            
            $data=array();
           	$data['common_pageheader']=$this->load->view('common_pageheader','',true);
			$data['common_pagefooter']=$this->load->view('common_pagefooter','',true);
			$this->load->view('possible_tenant',$data);
		}
		//end PAGE calling
		
		//start ADD page
		public function add_department(){
            
            $data=array();
            $data['common_pageheader']=$this->load->view('common_pageheader','',true);
            $data['common_pagefooter']=$this->load->view('common_pagefooter','',true);
            $data['navheader']=$this->load->view('navheader','',true);
			$data['sidebar']=$this->load->view('sidebar','',true);
			//$data['company_report']=  $this->welcome_model->company();
            $this->load->view('add_department',$data);
        }
		public function add_property(){
            
            $data=array();
            $data['common_pageheader']=$this->load->view('common_pageheader','',true);
            $data['common_pagefooter']=$this->load->view('common_pagefooter','',true);
            $data['navheader']=$this->load->view('navheader','',true);
			$data['sidebar']=$this->load->view('sidebar','',true);
			$data['landlord_list']=  $this->welcome_model->landlord_list();
			$this->load->view('add_property',$data);
        }
		public function add_room(){
            
            $data=array();
            $data['common_pageheader']=$this->load->view('common_pageheader','',true);
            $data['common_pagefooter']=$this->load->view('common_pagefooter','',true);
            $data['navheader']=$this->load->view('navheader','',true);
			$data['sidebar']=$this->load->view('sidebar','',true);
			$this->load->view('add_room',$data);
        }
		public function add_employee(){
            
            $data=array();
            $data['common_pageheader']=$this->load->view('common_pageheader','',true);
            $data['common_pagefooter']=$this->load->view('common_pagefooter','',true);
            $data['navheader']=$this->load->view('navheader','',true);
			$data['sidebar']=$this->load->view('sidebar','',true);
			$this->load->view('add_employee',$data);
        }
		public function add_user(){
            
            $data=array();
            $data['common_pageheader']=$this->load->view('common_pageheader','',true);
            $data['common_pagefooter']=$this->load->view('common_pagefooter','',true);
            $data['navheader']=$this->load->view('navheader','',true);
			$data['sidebar']=$this->load->view('sidebar','',true);
			$data['employee_list']=  $this->welcome_model->employee_list();
            $this->load->view('add_user',$data);
        }
		public function add_landlord(){
            
            $data=array();
            $data['common_pageheader']=$this->load->view('common_pageheader','',true);
            $data['common_pagefooter']=$this->load->view('common_pagefooter','',true);
            $data['navheader']=$this->load->view('navheader','',true);
			$data['sidebar']=$this->load->view('sidebar','',true);
			//$data['company_report']=  $this->welcome_model->company();
            $this->load->view('add_landlord',$data);
        }
		//end ADD page
		
		//start DELETE page
	
	public function delete_landlord($id){
        
       		$id = $this->uri->segment(3);
            $this->welcome_model->delete_landlord($id);
            redirect('index.php/super_admin/landlord_list');
    }
	public function delete_employee($id){
        
       		$id = $this->uri->segment(3);
            $this->welcome_model->delete_employee($id);
            redirect('index.php/super_admin/employee_list');
    }
	public function delete_user($id){
        
       		$id = $this->uri->segment(3);
            $this->welcome_model->delete_user($id);
            redirect('index.php/super_admin/user_list');
    }
		//end DELETE page
		
		//start EDIT page
		
		public function edit_department(){
            
          	$data['pageheader']=$this->load->view('pageheader','',true);
			$data['pagefooter']=$this->load->view('pagefooter','',true);

            $id = $this->uri->segment(3);
            $data['edit_department'] = $this->super_admin_model->edit_department($id);

            $this->load->view('edit_department', $data);
       
        }
		
		public function edit_landlord(){
            
          	$data['common_pageheader']=$this->load->view('common_pageheader','',true);
			$data['common_pagefooter']=$this->load->view('common_pagefooter','',true);

            $id = $this->uri->segment(3);
            $data['edit_landlord'] = $this->super_admin_model->edit_landlord($id);

            $this->load->view('edit_landlord', $data);
       
        }
		
		//end EDIT page
		
		//start UPDATE page
		public function update_landlord(){
        
            $id= $this->input->post('did');
            $data = array(
			
			'status' => 1,
			'file' => $this->input->post('old_file'),
			'file1' => $this->input->post('old_file1'),
			'file2' => $this->input->post('old_file2'),
			
			'landlord_reg_no' =>  $this->input->post('landlord_reg_no'),
			
			'firstname' => $this->input->post('firstname'),
			'surname' => $this->input->post('surname'),
			'lhouse_flat_no' => $this->input->post('lhouse_flat_no'),
			'lhouse_flat_name' => $this->input->post('lhouse_flat_name'),
			
			'lstreet' => $this->input->post('lstreet'),
			'lpost_code' => $this->input->post('lpost_code'),
            'lcity' => $this->input->post('lcity'),
			'lcountry' => $this->input->post('lcountry'),
            'contact' => $this->input->post('contact'),
			'email' => $this->input->post('email'),
            'correspondence_address' => $this->input->post('correspondence_address'),
			'cors_by_email' => $this->input->post('cors_by_email'),
			'cors_by_phone' => $this->input->post('cors_by_phone'),
			
			'cors_by_post' => $this->input->post('cors_by_post'),
			'house_no' => $this->input->post('house_no'),
            'street_road_no' => $this->input->post('street_road_no'),
			'location' => $this->input->post('location'),
            'post_code' => $this->input->post('post_code'),
			'no_of_bed' => $this->input->post('no_of_bed'),
            'available_date' => date("Y-m-d", strtotime($this->input->post('available_date')) ),
			'valuation_date' => date("Y-m-d", strtotime($this->input->post('valuation_date')) ),
			'best_contact_time' => $this->input->post('best_contact_time'),
			
			'added_by' => $this->input->post('added_by'),
			'furniture_type' => $this->input->post('furniture_type'),
            'new_furniture_list' => $this->input->post('new_furniture_list'),
			'used_furniture_list' => $this->input->post('used_furniture_list'),
            'gas_from' =>  date("Y-m-d", strtotime($this->input->post('gas_from')) ),
			'gas_to' =>  date("Y-m-d", strtotime($this->input->post('gas_to')) ),
            'electricity_from' =>  date("Y-m-d", strtotime($this->input->post('electricity_from')) ),
			'electricity_to' =>  date("Y-m-d", strtotime($this->input->post('electricity_to')) ),
			'epc_from' =>  date("Y-m-d", strtotime($this->input->post('epc_from')) ),
			
			'epc_to' =>  date("Y-m-d", strtotime($this->input->post('epc_to')) ),
			'pat_test_from' =>  date("Y-m-d", strtotime($this->input->post('pat_test_from')) ),
            'pat_test_to' =>  date("Y-m-d", strtotime($this->input->post('pat_test_to')) ),
			'fire' => $this->input->post('fire'),
            'carbon' => $this->input->post('carbon'),
			'agreement_date' => date("Y-m-d", strtotime($this->input->post('agreement_date')) ),
            'agreement_type' => $this->input->post('agreement_type'),
			'onbehalf_name' => $this->input->post('onbehalf_name'),
			'onbehalf_email' => $this->input->post('onbehalf_email'),
			
			'onbehalf_contact' => $this->input->post('onbehalf_contact'),
			'onbehalf_address' => $this->input->post('onbehalf_address'),
            'payment_method' => $this->input->post('payment_method'),
			'cheque_amount' => $this->input->post('cheque_amount'),
            'cash_amount' => $this->input->post('cash_amount'),
			'account_name' => $this->input->post('account_name'),
            'account_no' => $this->input->post('account_no'),
			'sort_code' => $this->input->post('sort_code'),
			'bank_name' => $this->input->post('bank_name'),
			'amount' => $this->input->post('amount')
			
			
			);
			
			
			
			//START file UPLOAD
			//START file UPLOAD
			$fileNamePrefix = $this->GUID();
			if(isset($_FILES['userfile']['name'][0])){
				$_FILES['userfile']['name'][0] = str_replace(" ","_",$fileNamePrefix."_".$_FILES['userfile']['name'][0]);
				if(strpos($_FILES['userfile']['name'][0], ".")!=false)
				{
				$data['file']= $_FILES['userfile']['name'][0];
				}
			}
			
			if(isset($_FILES['userfile']['name'][1])){
				$_FILES['userfile']['name'][1] =  str_replace(" ","_",$fileNamePrefix."_".$_FILES['userfile']['name'][1]);
				if(strpos($_FILES['userfile']['name'][1], ".")!=false)
				{
				$data['file1']= $_FILES['userfile']['name'][1];
				}
			}
            
			 if(isset($_FILES['userfile']['name'][2])){
				$_FILES['userfile']['name'][2] =  str_replace(" ","_",$fileNamePrefix."_".$_FILES['userfile']['name'][2]);
				if(strpos($_FILES['userfile']['name'][2], ".")!=false)
				{
				$data['file2']= $_FILES['userfile']['name'][2];
				}
			}
			
			
			/*if(isset($_FILES['userfile']['name'][0])){
				$_FILES['userfile']['name'][0] = str_replace(" ","_",$fileNamePrefix."_".$_FILES['userfile']['name'][0]);
				if(strpos($_FILES['userfile']['name'][0], ".")!=false)
				{
				$data['file']= $_FILES['userfile']['name'][0];
				}
			}*/
			
			$this->do_upload();
			//END file UPLOAD
			
			$this->super_admin_model->update_landlord($id,$data);
            
            redirect('index.php/super_admin/landlord_list');
    	}
		
		public function updatecompany(){
        
            $id= $this->input->post('did');
            $data = array(
			
			'create_date' => date('Y-m-d'),
			'company_name' => $this->input->post('company_name')
            );
			
			$this->super_admin_model->updatecompany($id,$data);
            
            redirect('index.php/super_admin/showcompanylist');
    	}
	
		//end UPDATE page
		
		
		//start SAVE page
		public function save_department(){
            
            $data=array();
            
			$data['department_name']=$this->input->post('department_name');
			
			$this->super_admin_model->save_department($data);
            
            $sdata=array();
            $sdata['message']='Information Saved Successfully';
            $this->session->set_userdata($sdata);
            redirect('index.php/super_admin/add_department');
        }
		public function save_property(){
            
            $data=array();
            
			$data['house_name_no']=$this->input->post('house_name_no');
			$data['street_road_no']=$this->input->post('street_road_no');
			
			$data['post_code']=$this->input->post('post_code');
			$data['no_of_bed']=$this->input->post('no_of_bed');
			$data['city_location']=$this->input->post('city_location');
			$data['property_status']=$this->input->post('property_status');
			$data['rent_type']=$this->input->post('rent_type');
			$data['rent_amount']=$this->input->post('rent_amount');
			$data['available_date']=$this->input->post('available_date');
			$data['next_viewing_date']=$this->input->post('next_viewing_date');
			$data['viewing_time']=$this->input->post('viewing_time');
			
			$data['landlord_reg_no']=$this->input->post('landlord_reg_no');
			$data['service']=$this->input->post('service');
			$data['is_fee']=$this->input->post('is_fee');
			$data['fee_amount']=$this->input->post('fee_amount');
			$data['total_fee']=$this->input->post('total_fee');
			$data['property_title']=$this->input->post('property_title');
			$data['property_type']=$this->input->post('property_type');
			$data['no_of_baths']=$this->input->post('no_of_baths');
			
			$data['video_tour1']=$this->input->post('video_tour1');
			$data['video_tour2']=$this->input->post('video_tour2');
			$data['video_tour3']=$this->input->post('video_tour3');
			$data['property_details']=$this->input->post('property_details');
			$data['property_features']=$this->input->post('property_features');
			$data['property_conclusion']=$this->input->post('property_conclusion');
			
			
			$this->super_admin_model->save_property($data);
            
            $sdata=array();
            $sdata['message']='Information Saved Successfully';
            $this->session->set_userdata($sdata);
            redirect('index.php/super_admin/landlord_list');
        }
		
		public function save_possible_landlord(){
            
            $data=array();
            
			$data['firstname']=$this->input->post('firstname');
			$data['surname']=$this->input->post('surname');
			$data['contact']=$this->input->post('contact');
			$data['email']=$this->input->post('email');
			$data['best_contact_time']=$this->input->post('best_contact_time');
			
			$data['house_no']=$this->input->post('house_no');
			$data['street_road_no']=$this->input->post('street_road_no');
			$data['location']=$this->input->post('location');
			$data['post_code']=$this->input->post('post_code');
			$data['no_of_bed']=$this->input->post('no_of_bed');
			$data['service_required']=$this->input->post('service_required');
			
			$data['available_date']=date("Y-m-d", strtotime($this->input->post('available_date')) );
			$data['valuation_date']=date("Y-m-d", strtotime($this->input->post('valuation_date')) );
			
			
			$this->super_admin_model->save_possible_landlord($data);
            
            $sdata=array();
            $sdata['message']='Information Saved Successfully';
            $this->session->set_userdata($sdata);
            redirect('index.php/super_admin/possible_landlord_list');
        }
		public function save_landlord(){
            
            $data=array();
			
            $data['landlord_reg_no'] = $this->input->post('landlord_reg_no');
			$data['status']=1;
			$data['firstname']=$this->input->post('firstname');
			$data['surname']=$this->input->post('surname');
			$data['lhouse_flat_no']=$this->input->post('lhouse_flat_no');
			$data['lhouse_flat_name']=$this->input->post('lhouse_flat_name');
			
			$data['lstreet']=$this->input->post('lstreet');
			$data['lpost_code']=$this->input->post('lpost_code');
            $data['lcity']=$this->input->post('lcity');
			$data['lcountry']=$this->input->post('lcountry');
            $data['contact']=$this->input->post('contact');
			$data['email']=$this->input->post('email');
            $data['correspondence_address']=$this->input->post('correspondence_address');
			$data['cors_by_email']=$this->input->post('cors_by_email');
			$data['cors_by_phone']=$this->input->post('cors_by_phone');
			
			$data['cors_by_post']=$this->input->post('cors_by_post');
			$data['house_no']=$this->input->post('house_no');
            $data['street_road_no']=$this->input->post('street_road_no');
			$data['location']=$this->input->post('location');
            $data['post_code']=$this->input->post('post_code');
			$data['no_of_bed']=$this->input->post('no_of_bed');
            $data['available_date']=date("Y-m-d", strtotime($this->input->post('available_date')) );
			$data['valuation_date']=date("Y-m-d", strtotime($this->input->post('valuation_date')) );
			$data['best_contact_time']=$this->input->post('best_contact_time');
			
			$data['added_by']=$this->input->post('added_by');
			$data['furniture_type']=$this->input->post('furniture_type');
            $data['new_furniture_list']=$this->input->post('new_furniture_list');
			$data['used_furniture_list']=$this->input->post('used_furniture_list');
            $data['gas_from']= date("Y-m-d", strtotime($this->input->post('gas_from')) );
			$data['gas_to']= date("Y-m-d", strtotime($this->input->post('gas_to')) );
            $data['electricity_from']= date("Y-m-d", strtotime($this->input->post('electricity_from')) );
			$data['electricity_to']= date("Y-m-d", strtotime($this->input->post('electricity_to')) );
			$data['epc_from']= date("Y-m-d", strtotime($this->input->post('epc_from')) );
			
			$data['epc_to']= date("Y-m-d", strtotime($this->input->post('epc_to')) );
			$data['pat_test_from']= date("Y-m-d", strtotime($this->input->post('pat_test_from')) );
            $data['pat_test_to']= date("Y-m-d", strtotime($this->input->post('pat_test_to')) );
			$data['fire']=$this->input->post('fire');
            $data['carbon']=$this->input->post('carbon');
			$data['agreement_date']=date("Y-m-d", strtotime($this->input->post('agreement_date')) );
            $data['agreement_type']=$this->input->post('agreement_type');
			$data['onbehalf_name']=$this->input->post('onbehalf_name');
			$data['onbehalf_email']=$this->input->post('onbehalf_email');
			
			$data['onbehalf_contact']=$this->input->post('onbehalf_contact');
			$data['onbehalf_address']=$this->input->post('onbehalf_address');
            $data['payment_method']=$this->input->post('payment_method');
			$data['cheque_amount']=$this->input->post('cheque_amount');
            $data['cash_amount']=$this->input->post('cash_amount');
			$data['account_name']=$this->input->post('account_name');
            $data['account_no']=$this->input->post('account_no');
			$data['sort_code']=$this->input->post('sort_code');
			$data['bank_name']=$this->input->post('bank_name');
			$data['amount']=$this->input->post('amount');
			
			
			//START file UPLOAD
			$fileNamePrefix = $this->GUID();
			if(isset($_FILES['userfile']['name'][0])){
				$_FILES['userfile']['name'][0] = str_replace(" ","_",$fileNamePrefix."_".$_FILES['userfile']['name'][0]);
				$data['file']= $_FILES['userfile']['name'][0];
			}
			
			if(isset($_FILES['userfile']['name'][1])){
				$_FILES['userfile']['name'][1] =  str_replace(" ","_",$fileNamePrefix."_".$_FILES['userfile']['name'][1]);
				$data['file1']= $_FILES['userfile']['name'][1];
			}
            
			 if(isset($_FILES['userfile']['name'][2])){
				$_FILES['userfile']['name'][2] =  str_replace(" ","_",$fileNamePrefix."_".$_FILES['userfile']['name'][2]);
				$data['file2']= $_FILES['userfile']['name'][2];
			}
			
			$this->do_upload();
			//END file UPLOAD
            $this->super_admin_model->save_landlord($data);
            
            $sdata=array();
            $sdata['message']='Information Saved Successfully';
            $this->session->set_userdata($sdata);
            redirect('index.php/super_admin/add_landlord');
        }
		public function save_possible_tenant(){
            
            $data=array();
            
			$data['firstname']=$this->input->post('firstname');
			$data['surname']=$this->input->post('surname');
			$data['contact']=$this->input->post('contact');
			$data['email']=$this->input->post('email');
			$data['profession']=$this->input->post('profession');
			
			$data['suitable_contact_time']=$this->input->post('suitable_contact_time');
			$data['post_code']=$this->input->post('post_code');
			$data['max_rent']=$this->input->post('max_rent');
			$data['no_of_bed']=$this->input->post('no_of_bed');
			$data['no_of_occupy']=$this->input->post('no_of_occupy');
			
			$data['additional_details']=$this->input->post('additional_details');
			$data['move_in_date']=date("Y-m-d", strtotime($this->input->post('move_in_date')) );
			$data['move_out_date']=date("Y-m-d", strtotime($this->input->post('move_out_date')) );
			
			
			$this->super_admin_model->save_possible_tenant($data);
            
            $sdata=array();
            $sdata['message']='Information Saved Successfully';
            $this->session->set_userdata($sdata);
            redirect('index.php/super_admin/possible_tenant_list');
        }
		public function save_user(){
            
            $data=array();
            
			$data['employee_id']=$this->input->post('employee_id');
			$data['username']=$this->input->post('username');
			$data['password']=$this->input->post('password');
			$data['user_type']=$this->input->post('user_type');
			$data['role']=$this->input->post('role');
			
			
			$this->super_admin_model->save_user($data);
            
            $sdata=array();
            $sdata['message']='Information Saved Successfully';
            $this->session->set_userdata($sdata);
            redirect('index.php/super_admin/user_list');
        }
		
		public function save_employee(){
            
            $data=array();
			
            $data['emp_name']=$this->input->post('emp_name');
			$data['emp_email']=$this->input->post('emp_email');
            $data['emp_contact']=$this->input->post('emp_contact');
			$data['department']=$this->input->post('department');
            $data['emp_address']=$this->input->post('emp_address');
			$data['emp_city']=$this->input->post('emp_city');
            $data['post_code']=$this->input->post('post_code');
			$data['color_code']=$this->input->post('color_code');
			
			$data['payment_stru']=$this->input->post('payment_stru');
			$data['con_hour']=$this->input->post('con_hour');
            $data['con_type']=$this->input->post('con_type');
			$data['hour_rate']=$this->input->post('hour_rate');
            $data['salary']=$this->input->post('salary');
			$data['account_name']=$this->input->post('account_name');
            $data['sort_code']=$this->input->post('sort_code');
			$data['account_number']=$this->input->post('account_number');
			$data['bank_name']=$this->input->post('bank_name');
			
			//START file UPLOAD
			$fileNamePrefix = $this->GUID();
			if(isset($_FILES['userfile']['name'][0])){
				$_FILES['userfile']['name'][0] = str_replace(" ","_",$fileNamePrefix."_".$_FILES['userfile']['name'][0]);
				$data['file']= $_FILES['userfile']['name'][0];
			}
			
			if(isset($_FILES['userfile']['name'][1])){
				$_FILES['userfile']['name'][1] =  str_replace(" ","_",$fileNamePrefix."_".$_FILES['userfile']['name'][1]);
				$data['file1']= $_FILES['userfile']['name'][1];
			}
            
			 if(isset($_FILES['userfile']['name'][2])){
				$_FILES['userfile']['name'][2] =  str_replace(" ","_",$fileNamePrefix."_".$_FILES['userfile']['name'][2]);
				$data['file2']= $_FILES['userfile']['name'][2];
			}
			
			$this->do_upload();
			//END file UPLOAD
            $this->super_admin_model->save_employee($data);
            
            $sdata=array();
            $sdata['message']='Information Saved Successfully';
            $this->session->set_userdata($sdata);
            redirect('index.php/super_admin/employee_list');
        }
		
		function do_upload()
	{       
		$this->load->library('upload');
	
		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['userfile']['name']= $files['userfile']['name'][$i];
			$_FILES['userfile']['type']= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $files['userfile']['size'][$i];    
	
			$this->upload->initialize($this->set_upload_options());
			$this->upload->do_upload();
		}
	}

	private function set_upload_options()
	{   
		//upload an image options
		$config = array();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|zip|docx|doc|xlsx|xls|pptx|ppt|pdf';
		$config['max_size']      = '101024';
		$config['overwrite']     = FALSE;
	
		return $config;
	}
	
	function GUID()
	{
		if (function_exists('com_create_guid') === true)
		{
			return trim(com_create_guid(), '{}');
		}
	
		return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
	}
		
		// logout page
		  public function logout(){
            
            $this->session->unset_userdata('id');
            $sdata=array();
            $sdata['exception']='Hello! Successfully Logout.';
            $this->session->set_userdata($sdata);
            redirect('index.php/admin_controller/index');
	}  
	//end logout
	
		
		
}