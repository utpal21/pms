<?php

class Welcome_Model extends CI_Model {

	//start new
	public function department_list(){
        
        $sql="SELECT * FROM department";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function property_list(){
        
        $sql="SELECT * FROM property";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function room_list(){
        
        $sql="SELECT * FROM room";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function employee_list(){
        
        $sql="SELECT * FROM employeelist";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function possible_tenant_list(){
        
        $sql="SELECT * FROM tenant";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function registered_tenant_list(){
        
        $sql="SELECT * FROM arrange_viewing";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function possible_landlord_list(){
        
        $sql="SELECT * FROM landlord WHERE status='0'";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function landlord_list(){
        
        $sql="SELECT * FROM landlord WHERE status='1'";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function user_list(){
        
        $sql="SELECT * FROM admin_user";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function student_info(){
        
        $sql="SELECT * FROM student_info";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function gallery_view(){
        
        $sql="SELECT * FROM gallery";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function guest_teacher(){
        
        $sql="SELECT * FROM guest_teacher ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function latest_news(){
        
        $sql="SELECT * FROM latest_news ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function faculty_tour(){
        
        $sql="SELECT * FROM faculty_tour ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function industrial_tour(){
        
        $sql="SELECT * FROM industrial_tour ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function industrial_linkage(){
        
        $sql="SELECT * FROM industrial_linkage ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function industrial_attachment(){
        
        $sql="SELECT * FROM industrial_attachment ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function mou_rnd(){
        
        $sql="SELECT * FROM mou_rnd ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function job(){
        //$sql="UPDATE order_list SET confirmation = 'seen' WHERE order_number = '$order_number'";
	/*$this->db->where('order_number', $order_number);*/
        $sql="SELECT * FROM job ORDER BY id DESC";
		$query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function wshop_semi_fair(){
        
        $sql="SELECT * FROM wshop_semi_fair ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function target_industry(){
        
        $sql="SELECT * FROM target_industry ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function counseling(){
        
        $sql="SELECT * FROM counseling ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function visited_guest(){
        
        $sql="SELECT * FROM visited_guest ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function department(){
        
        $sql="SELECT * FROM department ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function successstory(){
        
        $sql="SELECT * FROM success_story ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function session(){
        
        $sql="SELECT * FROM session ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function company(){
        
        $sql="SELECT * FROM company ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function indus_attachment(){
        
        $sql="SELECT * FROM indus_attachment ORDER BY id DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	//start DELETE Query
	public function delete_landlord($id){
        
        $this->db->where('id', $id);
        $this->db->delete('landlord');
    }
	public function delete_property($id){
        
        $this->db->where('id', $id);
        $this->db->delete('property');
    }
	public function delete_room($id){
        
        $this->db->where('id', $id);
        $this->db->delete('room');
    }
	public function delete_employee($id){
        
        $this->db->where('id', $id);
        $this->db->delete('employeelist');
    }
	public function delete_user($id){
        
        $this->db->where('id', $id);
        $this->db->delete('admin_user');
    }
	public function deletestudent($id){
        
        $this->db->where('id', $id);
        $this->db->delete('student_info');
    }
	public function deletegallery($id){
        
        $this->db->where('id', $id);
        $this->db->delete('gallery');
    }
	public function deleteguestteacher($id){
        
        $this->db->where('id', $id);
        $this->db->delete('guest_teacher');
    }
	public function deletelatestnews($id){
        
        $this->db->where('id', $id);
        $this->db->delete('latest_news');
    }
	public function deletefacultytour($id){
        
        $this->db->where('id', $id);
        $this->db->delete('faculty_tour');
    }
	public function deleteindustrialtour($id){
        
        $this->db->where('id', $id);
        $this->db->delete('industrial_tour');
    }
	public function deleteindustriallinkage($id){
        
        $this->db->where('id', $id);
        $this->db->delete('industrial_linkage');
    }
	public function deleteindustrialattachment($id){
        
        $this->db->where('id', $id);
        $this->db->delete('industrial_attachment');
    }
	public function deletemournd($id){
        
        $this->db->where('id', $id);
        $this->db->delete('mou_rnd');
    }
	public function deletejob($id){
        
        $this->db->where('id', $id);
        $this->db->delete('job');
    }
	public function deletewshopsemifair($id){
        
        $this->db->where('id', $id);
        $this->db->delete('wshop_semi_fair');
    }
	public function deletetargetindustry($id){
        
        $this->db->where('id', $id);
        $this->db->delete('target_industry');
    }
	public function deletecounseling($id){
        
        $this->db->where('id', $id);
        $this->db->delete('counseling');
    }
	public function deletevisitedguest($id){
        
        $this->db->where('id', $id);
        $this->db->delete('visited_guest');
    }
	public function deletedepartment($id){
        
        $this->db->where('id', $id);
        $this->db->delete('department');
    }
	public function deletesession($id){
        
        $this->db->where('id', $id);
        $this->db->delete('session');
    }
	public function deletesuccessstory($id){
        
        $this->db->where('id', $id);
        $this->db->delete('success_story');
    }
	//end DELETE Query
	
	
    //end new
    public function select_published_category(){
        
        //$sql="SELECT DISTINCT order_number,name, email, phone, paypall_t_id FROM order_list WHERE name!='' AND email!='' AND phone!='' ORDER BY order_number DESC ";
		$sql="SELECT DISTINCT order_date, order_number,name, email, phone, paypall_t_id FROM order_list WHERE paypall_t_id!='' ORDER BY order_number DESC ";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
		
    }
	
	public function message_seen($id1,$data1){
	//$sql="UPDATE order_list SET confirmation = 'seen' WHERE order_number = '$order_number'";
	/*$this->db->where('order_number', $order_number);
	$this->db->where('mess_from', 'client');*/
     //$this->db->update('order_list', $data1);
	
        
     $this->db->where('order_id', $id1);
	 $this->db->where('mess_from', 'client');
     $this->db->update('order_list', $data1);  
   }
   
   /*public function update_order_id1($id,$data){
        
     $this->db->where('order_number', $id);
     $this->db->update('order_list', $data);  
    }*/
	
	public function select_message_row(){
        
        //$sql="SELECT * FROM order_list WHERE message!='' AND subject_name='' AND standard='' ORDER BY order_number DESC";
		//$sql="SELECT COUNT(order_number) FROM order_list WHERE message!='' AND subject_name='' AND standard=''";
		$sql="SELECT order_number, COUNT(order_number) as total FROM order_list WHERE message!='' AND subject_name='' AND standard='' AND confirmation='' AND mess_from='client' GROUP BY order_number ORDER BY total DESC";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	
	public function select_published_comments(){
        
        $sql="SELECT * FROM tbl_comments";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	
	public function select_finish_order(){
        
        $sql="SELECT * FROM order_list WHERE status='finish'";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function show_email_id($id){
		 $sql="SELECT * FROM order_list WHERE order_number='$id' LIMIT 1";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
	}
	public function show_email_file_id($id){
		 $sql="SELECT * FROM order_list WHERE order_number='$id' AND status='finish' LIMIT 1";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
	}
	
	public function select_published_product(){
        
        $sql="SELECT * FROM tbl_product";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	
	public function select_published_category_page(){
        
        $sql="SELECT * FROM tbl_category WHERE publication_status=1";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
        
    public function select_category(){
        
        $sql="SELECT * FROM tbl_category";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	public function select_category_row(){
	
		$query = $this->db->query('SELECT * FROM tbl_category');
		echo $query->num_rows();
		return $query;
	}
        
    public function home_page_content(){
        
        $sql="SELECT * FROM tbl_articles WHERE linked_page='Home'";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    
    public function blog_page_content(){
        
        $sql="SELECT * FROM tbl_articles WHERE linked_page='Blog'";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function photo_page_content(){
        
        $sql="SELECT * FROM tbl_articles WHERE linked_page='Photo'";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    
    public function select_user(){
        
        $sql="SELECT * FROM tbl_admin";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	 public function select_client(){
        
        $sql="SELECT * FROM user";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function select_pages(){
        
        $sql="SELECT * FROM tbl_pages";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	
	public function select_products(){
        
        $sql="SELECT * FROM tbl_product";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	
	public function select_products_qty(){
        
        $sql="SELECT product_name,category_name, sum(receive_qty) as receive_qty FROM tbl_product_qty GROUP BY product_name,category_name";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    
   
        public function select_editor(){
        
        $sql="SELECT * FROM tbl_pages";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	
	 public function select_editor_news(){
        
        $sql="SELECT * FROM tbl_news";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
	 
    
    public function delete_order_mod($id){
        
        $this->db->where('order_number', $id);
        $this->db->delete('order_list');
    }
	
	public function delete_file_mod($id){
        
        $this->db->where('order_id', $id);
        $this->db->delete('order_list');
    }
	 public function delete_category_mod($id){
        
        $this->db->where('category_id', $id);
        $this->db->delete('tbl_category');
    }
	
	public function delete_comments_mod($id){
        
        $this->db->where('comments_id', $id);
        $this->db->delete('tbl_comments');
    }
	public function delete_product_mod($id){
        
        $this->db->where('product_id', $id);
        $this->db->delete('tbl_product');
    }
    public function delete_user_mod($id){
        
        $this->db->where('admin_id', $id);
        $this->db->delete('tbl_admin');
    }
    public function delete_editor_mod($id){
        
        $this->db->where('page_id', $id);
        $this->db->delete('tbl_pages');
    }
	public function delete_page_content_mod($id){
        
        $this->db->where('page_id', $id);
        $this->db->delete('tbl_pages_content');
    }
	public function delete_editor_mod_news($id){
        
        $this->db->where('news_id', $id);
        $this->db->delete('tbl_news');
    }
}