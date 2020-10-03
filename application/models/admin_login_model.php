<?php
	class Admin_Login_Model extends CI_Model{
		public function login_check_info($data){
		
			$sql="SELECT * FROM userlist WHERE username='$data[username]' and password='$data[password]' ";
			
			$query_result=$this->db->query($sql);
			$result=$query_result->row();
			return $result;
			
		}
	}
?>