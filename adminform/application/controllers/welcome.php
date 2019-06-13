<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function registration()
	{
		
		$name=$this->input->post('name');
		$father=$this->input->post('father');
		$dob=$this->input->post('dob');
		$email=$this->input->post('email');
		$gender=$this->input->post('gender');
		$photo_name = trim($_FILES['photo']['name']);
		$address=$this->input->post('address');
		$city=$this->input->post('city');
		$state=$this->input->post('state');
		$country=$this->input->post('country');
		$religion=$this->input->post('religion');
		$category=$this->input->post('category');
		$mobile=$this->input->post('mobile');
		$aadhar=$this->input->post('aadhar');
		$pin=$this->input->post('pin');
		$institute=$this->input->post('institute');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$data=array(
		'name'=>$name,
		'father_name'=>$father,
			'mobile_no'=>$mobile,
			'email_id'=>$email,
			'aadhar_card_no'=>$aadhar,
			'photo'=>$photo_name,
			'username'=>$username,
			'password'=>md5($password),
			'login_type'=>1,
			'gender'=>$gender,
			'address'=>$address,
			'city'=>$city,
			'state'=>$state,
			'country'=>$country,
			'religious'=>$religion,
			'pincode'=>$pin,
			'category'=>$category,
			'dob'=>$dob,
			'institute_name'=>$institute
			
		);
		$insert=$this->db->insert('general_setting',$data);
		if($insert)
		{
			
			
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/admin');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '6048';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['photo']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('photo');
			redirect(base_url().'index.php');
			
		
			
		}
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */