<?php
class Auth_login extends CI_Model {

    public function __construct() {
    	parent::__construct();
	}

	function getLoginData($username,$password)
	{
		$loginData=array('is_login'=>false);
		$this->db->where('username', $username);
		$this->db->where('password',md5($password));
		$query = $this->db->get('general_setting');

		if ($query->num_rows() > 0)
		{
		    $res = $query->row();
		    $loginData = array(
		        "id" => $res->id,
		        "username" => $res->username,
		        "password" => $res->password,
				"login_type" => 1,
				"is_login" => true,
				"is_lock" => true,
				"login_date" => date("d-M-Y"),
				"login_time" => date("H:i:s"),
		         "name" => $res->name,
		    );
		    return $loginData;
		 }
		 $this->db->where('username', $username);
		$this->db->where('password',$password);
		 $query = $this->db->get('branch');
		if ($query->num_rows() > 0)
		{
		    $res = $query->row();
		    $loginData = array(
		        "id" => $res->id,
		        "username" => $res->username,
		        "password" => $res->password,
				"login_type" => 2,
				"is_login" => true,
				"is_lock" => true,
				"login_date" => date("d-M-Y"),
				"login_time" => date("H:i:s"),
		         "branch_name" => $res->branch_name,
		    );
		    return $loginData;
		 }
		 $this->db->where('username', $username);
		$this->db->where('password',$password);
		 $query1 = $this->db->get('stud_registration');
		if ($query1->num_rows() > 0)
		{
		    $ress = $query1->row();
		    $loginData = array(
		        "id" => $res->id,
		        "username" => $ress->username,
		        "password" => $ress->password,
				"login_type" => 3,
				"is_login" => true,
				"is_lock" => true,
				"login_date" => date("d-M-Y"),
				"login_time" => date("H:i:s"),
		         "name" => $res->name,
		    );
		    return $loginData;
		 }
	
	}
	
}

