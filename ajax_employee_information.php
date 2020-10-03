<?php

include("db_connection.php");


$id = $_POST['id'];
if (!is_numeric($id) OR !is_numeric($id)) {
    $callback_message['status'] = 'failure';
} else {
    $callback_message['status'] = 'success';
    //$row = read($con, "senders", $sender_id);
    $sql = "SELECT `id`, `first_name`,`last_name`, `session`,`department`, `mobile`, `email`, file2 FROM student_info
WHERE `id`=$id;";
    $row = mysqli_fetch_assoc(mysqli_query($con, $sql));
	
									   
									   
									  
									   $department = $row["department"];
									   $session = $row["session"];
									   
									   $query_dept = "select * from department where id='$department'";
                            		   $res_dept = mysqli_query($con, $query_dept);
                            		   $row_dept = mysqli_fetch_array($res_dept);
									   
									   $query_session = "select * from session where id='$session'";
                            		   $res_session = mysqli_query($con, $query_session);
                            		   $row_session = mysqli_fetch_array($res_session);
    //echo "<pre>"; print_r($row); die;
    if (!empty($row)) {
		
		$callback_message['employee']['first_name'] = $row['first_name'];
		$callback_message['employee']['last_name'] = $row['last_name'];
		$callback_message['employee']['session'] = $row_session['session_name'];
        $callback_message['employee']['department'] = $row_dept['department'];
		$callback_message['employee']['mobile'] = $row['mobile'];
        $callback_message['employee']['email'] = $row['email'];
		$callback_message['employee']['file2'] = $row['file2'];
        
        unset($row);
    } else {
        $callback_message['status'] = 'failure';
        $callback_message['message'] = 'No data found';
    }
    
}
if (count($callback_message) != 0) {
    echo json_encode($callback_message);
}
?>
