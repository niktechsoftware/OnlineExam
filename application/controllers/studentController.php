<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class StudentController extends CI_Controller{
		public function studentIndex(){
			$data['title'] = 'Student Registration Area';
			$data['headercss'] = 'branchCss';
			$data['header'] = 'header';
			$data['sidemenu'] = 'sidemenu';
			$data['contend'] = 'studentRegistration';
			$data['subtitle'] = 'Student Registration';
			$data['customizer'] = 'customizer';
			$data['footer'] = 'footer';
			$data['footerjs'] = 'branchJs';
	  		$this->load->view("base/body", $data);
		}
		public function studRegistration(){
			$name = $this->input->post('name');
			$dob = $this->input->post('dob');
			$email = $this->input->post('email');
			$mobile = $this->input->post('mobile');
			$education = $this->input->post('education');
			$adhar_card = $this->input->post('adhar_card');
			$photo_name = trim($_FILES['photo']['name']);
			$fatherName = $this->input->post('fname');
			$motherName = $this->input->post('mname');
			$exam_status = $this->input->post('estatus');
			$examName = $this->input->post('ename');
			$per_add = $this->input ->post('per_address');
			$per_city = $this->input->post('per_city');
			$per_status = $this->input->post('per_state');
			$per_pincode = $this->input->post('per_pincode');
			$per_country = $this->input->post('per_country');
			$loc_add = $this->input->post('loc_address');
			$loc_city = $this->input->post('loc_city');
			$loc_status = $this->input->post('loc_state');
			$loc_pincode = $this->input->post('loc_pincode');
			$loc_country = $this->input->post('loc_country');
			$username = $this->input->post('username');
			$password= $this->input->post('pwd');
			$disabilities_status = $this->input->post('disability');
			$disabilities_descrp = $this->input->post('disDescription');
			$religion = $this->input->post('religion');
			$category = $this->input->post('category');
			$gender = $this->input->post('gender');
			$data = array(
				'name' => $name,
				'dob' => $dob,
				'email_id' =>$email,
				'mobile_no' => $mobile,
				'education' => $education,
				'aadhar_card_no' => $adhar_card,
				'photo' => $photo_name,
				'father_name' => $fatherName,
				'mother_name' => $motherName,
				'exam_status' => $exam_status,
				'exam_name' => $examName,
				'permanent_add' => $per_add,
				'permanent_city' => $per_city,
				'permanent_state' => $per_status,
				'permanent_pincode' => $per_pincode,
				'permanent_country' => $per_country,
				'local_address' => $loc_add,
				'local_city' => $loc_city,
				'local_state' => $loc_status,
				'local_country' => $loc_country,
				'local_pincode' => $loc_pincode,
				'disabilities_status' => $disabilities_status,
				'disabilities_descrp' => $disabilities_descrp,
				'religion' => $religion,
				'category' =>$category,
				'gender' => $gender,
				'login_type' =>3,
				'status' => 0,
				//'username' => $username,
				'password' => $password
			);
			$insert=$this->db->insert('stud_registration',$data);
			  $s = $this->db->query('select id from stud_registration ORDER BY id DESC LIMIT 1')->row();
       $this->db->where('id',$s->id);
       //$que = $this->db->get('branch')->row();
        $val = array(
                "username" => 'STUD'.$s->id
        );
        $this->db->where("id",$s->id);
        $query = $this->db->update("stud_registration",$val);
		if($insert)
		{
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/student');
			
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '6048';
			$config['file_name'] = $photo_name;
		}
		if (!empty($_FILES['photo']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('photo');
		}
		redirect(base_url('/studentController/studentIndex'));
		
		}
		public function studentRequest(){
			$data['title'] = 'Student Status Active Area';
			$data['headercss'] = 'branchCss';
			$data['header'] = 'header';
			$data['sidemenu'] = 'sidemenu';
			$data['contend'] = 'stdRequest';
			$data['subtitle'] = 'Student Registration';
			$data['customizer'] = 'customizer';
			$data['footer'] = 'footer';
			$data['footerjs'] = 'branchJs';
	  		$this->load->view("base/body", $data);
		}
		public function studView(){
			$data['title'] = 'Student View Area';
			$data['headercss'] = 'branchCss';
			$data['header'] = 'header';
			$data['sidemenu'] = 'sidemenu';
			$data['contend'] = 'studView';
			$data['subtitle'] = 'Student Registration';
			$data['customizer'] = 'customizer';
			$data['footer'] = 'footer';
			$data['footerjs'] = 'branchJs';
	  		$this->load->view("base/body", $data);
		}
	}
?>