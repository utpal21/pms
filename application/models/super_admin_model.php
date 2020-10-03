<?php

class Super_Admin_Model extends CI_Model {

	//start INSERT Query
	
	public function save_department($data){
        
        $this->db->insert('department',$data);
    }
	public function save_holding_deposit($data){
        
        $this->db->insert('holding_deposit',$data);
    }
	
	public function save_tenant_arrange_viewing($data){
        
        $this->db->insert('arrange_viewing',$data);
    }
	public function save_property($data){
        
        $this->db->insert('property',$data);
    }
	public function save_room($data){
        
        $this->db->insert('room',$data);
    }
	
	public function save_possible_tenant($data){
        
        $this->db->insert('tenant',$data);
    }
	public function save_possible_landlord($data){
        
        $this->db->insert('landlord',$data);
    }
	
	public function save_landlord($data){
        
        $this->db->insert('landlord',$data);
    }
	public function save_employee($data){
        
        $this->db->insert('employeelist',$data);
    }
	public function save_user($data){
        
        $this->db->insert('admin_user',$data);
    }
	
	//end INSERT Query
	//start EDIT Query
	public function forward_tenant_arrange_viewing($data){
        
        $this->db->select('*');
        $this->db->from('tenant');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	
	public function tenant_hd_form($data){
        
        $this->db->select('*');
        $this->db->from('arrange_viewing');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function edit_landlord($data){
        
        $this->db->select('*');
        $this->db->from('landlord');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editstudent($data){
        
        $this->db->select('*');
        $this->db->from('student_info');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editgallery($data){
        
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editguestteacher($data){
        
        $this->db->select('*');
        $this->db->from('guest_teacher');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editlatestnews($data){
        
        $this->db->select('*');
        $this->db->from('latest_news');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editfacultytour($data){
        
        $this->db->select('*');
        $this->db->from('faculty_tour');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editindustrialtour($data){
        
        $this->db->select('*');
        $this->db->from('industrial_tour');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editindustriallinkage($data){
        
        $this->db->select('*');
        $this->db->from('industrial_linkage');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editindusattachment($data){
        
        $this->db->select('*');
        $this->db->from('indus_attachment');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editmournd($data){
        
        $this->db->select('*');
        $this->db->from('mou_rnd');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editjob($data){
        
        $this->db->select('*');
        $this->db->from('job');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editwshopsemifair($data){
        
        $this->db->select('*');
        $this->db->from('wshop_semi_fair');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function edittargetindustry($data){
        
        $this->db->select('*');
        $this->db->from('target_industry');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editcounseling($data){
        
        $this->db->select('*');
        $this->db->from('counseling');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editvisitedguest($data){
        
        $this->db->select('*');
        $this->db->from('visited_guest');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editdepartment($data){
        
        $this->db->select('*');
        $this->db->from('department');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editsession($data){
        
        $this->db->select('*');
        $this->db->from('session');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editcompany($data){
        
        $this->db->select('*');
        $this->db->from('company');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	public function editsuccessstory($data){
        
        $this->db->select('*');
        $this->db->from('success_story');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	//end EDIT Query
	//start UPDATE Query
	
	public function update_landlord($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('landlord', $data);  
    }
	public function updateindusattachment($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('indus_attachment', $data);  
    }
	public function updateuser($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('userlist', $data);  
    }
	public function updatestudent($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('student_info', $data);  
    }
	
	public function student_job_status($id,$plc_type,$data){
        
    //$this->db->set('status', '1'); //value that used to update column  
	$this->db->set('status', $plc_type);
	$this->db->where('id', $id); //which row want to upgrade  
	$this->db->update('student_info');

    }
	
	public function updatetargetindustry($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('target_industry', $data);  
    }
	public function updatewshopsemifair($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('wshop_semi_fair', $data);  
    }
	public function updatejob($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('job', $data);  
    }
	public function update_student_job_status($student_id,$plc_type,$data){
        
    $this->db->set('status', $plc_type);
	$this->db->where('id', $student_id); //which row want to upgrade  
	$this->db->update('student_info');

    }
	public function updatemournd($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('mou_rnd', $data);  
    }
	public function updateindustrialattachment($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('industrial_attachment', $data);  
    }
	public function updateindustriallinkage($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('industrial_linkage', $data);  
    }
	public function updatefacultytour($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('faculty_tour', $data);  
    }
	public function updateindustrialtour($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('industrial_tour', $data);  
    }
	public function updategallery3($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('gallery', $data);  
    }
	public function updategallery2($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('gallery', $data);  
    }
	public function updategallery1($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('gallery', $data);  
    }
	public function updategallery($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('gallery', $data);  
    }
	public function updateguestteacher($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('guest_teacher', $data);  
    }
	public function updatelatestnews($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('latest_news', $data);  
    }
	public function updatecounseling($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('counseling', $data);  
    }
	public function updatevisitedguest($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('visited_guest', $data);  
    }
	public function updatedepartment($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('department', $data);  
    }
	public function updatesession($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('session', $data);  
    }
	public function updatecompany($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('company', $data);  
    }
	public function updatesuccessstory($id,$data){
        
     $this->db->where('id', $id);
     $this->db->update('success_story', $data);  
    }
	//end UPDATE Query
    
    public function save_category_info($data){
        
        $this->db->insert('tbl_category',$data);
    }
	
	public function save_message_info($data){
        
        $this->db->insert('order_list',$data);
    }
	public function show_final_id($data){
		$this->db->insert('order_list',$data);
	}
	public function save_product_info($data){
        
        $this->db->insert('tbl_product',$data);
    }
	
	public function save_product_info_qty($data){
        
        $this->db->insert('tbl_product_qty',$data);
    }
    
    public function save_user_info($data){
        
        $this->db->insert('tbl_admin',$data);
    }
    public function save_pages_info($data){
        
        $this->db->insert('tbl_pages',$data);
    }
    public function save_editor_info($data){
        
        $this->db->insert('tbl_pages',$data);
    }
	
	public function save_editor_info_news($data){
        
        $this->db->insert('tbl_news',$data);
    }
    
    public function show_id($data){
        
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
    
    public function show_editor_id($data){
        
        $this->db->select('*');
        $this->db->from('tbl_pages');
        $this->db->where('page_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	 public function show_page_id($data){
        
        $this->db->select('*');
        $this->db->from('tbl_pages_content');
        $this->db->where('page_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	
	public function show_editor_id_news($data){
        
        $this->db->select('*');
        $this->db->from('tbl_news');
        $this->db->where('news_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	
	public function show_editor_id1($data){
        
        $this->db->select('*');
        $this->db->from('tbl_pages');
        $this->db->where('page_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
    
    public function update_id1($id,$data){
        
     $this->db->where('admin_id', $id);
     $this->db->update('tbl_admin', $data);  
    }
	 public function update_page_content_id1($id,$data){
        
     $this->db->where('page_id', $id);
     $this->db->update('tbl_pages_content', $data);  
    }
    
    public function update_editor_id1($id,$data){
        
     $this->db->where('page_id', $id);
     $this->db->update('tbl_pages', $data);  
    }
	 public function update_order_id1($id,$data){
        
     $this->db->where('order_number', $id);
     $this->db->update('order_list', $data);  
    }
     public function update_editor_id1_news($id,$data){
        
     $this->db->where('news_id', $id);
     $this->db->update('tbl_news', $data);  
    }
    public function show_category_id($data){
        
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	
	 public function show_order_id($data){
        
        $this->db->select('*');
        $this->db->from('order_list');
        $this->db->where('order_number', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	 public function show_delivery_id($data){
        
        $this->db->select('*');
        $this->db->from('order_list');
        $this->db->where('order_number', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	 public function show_message_id($data){
        
        $this->db->select('*');
        $this->db->from('order_list');
        $this->db->where('order_number', $data);
		$this->db->order_by("order_id", "desc");
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	
	 public function show_comments_id($data){
        
        $this->db->select('*');
        $this->db->from('tbl_comments');
        $this->db->where('comments_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
	
	public function show_product_id($data){
        
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;  
    }
    
    public function update_category_id1($id,$data){
        
     $this->db->where('category_id', $id);
     $this->db->update('tbl_category', $data);  
    }
	
	 public function update_comments_id1($id,$data){
        
     $this->db->where('comments_id', $id);
     $this->db->update('tbl_comments', $data);  
    }
		
	public function update_product_id1($id,$data){
        
     $this->db->where('product_id', $id);
     $this->db->update('tbl_product', $data);  
    }    
    
}
