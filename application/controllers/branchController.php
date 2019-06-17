<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BranchController extends CI_Controller{

	public function branchIndex(){
		$data['title'] = 'Branch Registration Area';
		$data['headercss'] = 'branchCss';
		$data['header'] = 'header';
		$data['sidemenu'] = 'sidemenu';
		$data['contend'] = 'branchRegistration';
		$data['subtitle'] = 'Branch Registration';
		$data['customizer'] = 'customizer';
		$data['footer'] = 'footer';
		$data['footerjs'] = 'branchJs';
    $this->load->view("base/body", $data);
	}
	public function branchRegistration(){
		$branch_Name = $this->input->post('branch_name');
		$mobile = $this->input->post('mobile');
		$email = $this->input->post('email');
		$bImage =  trim($_FILES['branch_img']['name']);
		$address = $this->input->post('address');
		$branchCity = $this->input->post('branch_city');
		$branchState = $this->input->post('branch_state');
		$branchCountry = $this->input->post('branch_country');
		$pincode = $this->input->post('branch_pincode');
		$usename = $this->input->post('branch_username');
		$password = $this->input->post('branch_pwd');
		$data =array(
			'branch_name' => $branch_Name,
			'mobile_no' => $mobile,
			'email_id' => $email,
			'photo' => $bImage,
			'address' => $address,
			'city' => $branchCity,
			'state' => $branchState,
			'country' => $branchCountry,
			'pincode' => $pincode,
			//'username' => $usename,
			'login_type' => 2,
			'status' => 0,
			'password' =>$password
		);
		$insert=$this->db->insert('branch',$data);
		 $a = $this->db->query('select id from branch ORDER BY id DESC LIMIT 1')->row();
       $this->db->where('id',$a->id);
       //$que = $this->db->get('branch')->row();
        $val = array(
                "username" => 'BRANCH'.$a->id
        );
        $this->db->where("id",$a->id);
        $query = $this->db->update("branch",$val);
		if($insert)
		{
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/branch');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '6048';
			$config['file_name'] = $bImage;
		}
		if (!empty($_FILES['photo']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('branch_img');
		}
		redirect(base_url('/branchController/branchIndex'));
	}
	public function viewBranch(){
		$data['title'] = 'Branch View Area';
		$data['headercss'] = 'branchViewCss';
		$data['header'] = 'header';
		$data['sidemenu'] = 'sidemenu';
		$data['contend'] = 'branchView';
		$data['subtitle'] = 'Search Branch';
		$data['customizer'] = 'customizer';
		$data['footer'] = 'footer';
		$data['footerjs'] = 'branchViewJs';
    $this->load->view("base/body", $data);
	}

	///branch student registraation code
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
			$id=$this->session->userdata('id');
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
				'branch_id' =>$id,
				'created_date' => date('Y-m-d'),
				'password' => $dob
			);
			$insert=$this->db->insert('stud_registration',$data);
			  $s = $this->db->query('select id from stud_registration ORDER BY id DESC LIMIT 1')->row();
       $this->db->where('id',$s->id);
       //$que = $this->db->get('branch')->row();
        $val = array(
                "username" => 'S000'.$id.'0000'.$s->id
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
		redirect(base_url('/branchController/studentIndex'));
		
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
			$data['headercss'] = 'adminStud_css';
			$data['header'] = 'header';
			$data['sidemenu'] = 'sidemenu';
			$data['contend'] = 'studView';
			$data['subtitle'] = 'Student Registration';
			$data['customizer'] = 'customizer';
			$data['footer'] = 'footer';
			$data['footerjs'] = 'adminStud_js';
	  		$this->load->view("base/body", $data);
		}
		public function updateStudStatus(){
         $status = $this->input->post('status');
        $this->db->where('id',$status);
      $studentid=$this->db->get('stud_registration')->row()->status;
      if($studentid == 1){
        $data= array("status" => 0);
        $this->db->where('id',$status);
        $this->db->update("stud_registration",$data);
    }else{
        $data= array("status" => 1);
         $this->db->where('id',$status);
        $this->db->update("stud_registration",$data);
   	 }
	}
	public function showStudList(){
   	 		$data['title'] = 'Student Status Active Area';
			$data['headercss'] = 'branchCss';
			$data['header'] = 'header';
			$data['sidemenu'] = 'sidemenu';
			$data['contend'] = 'stdApprovedList';
			$data['subtitle'] = 'Student Registration';
			$data['customizer'] = 'customizer';
			$data['footer'] = 'footer';
			$data['footerjs'] = 'branchJs';
	  		$this->load->view("base/body", $data);
   	 }
   	 public function branchViewProfile(){
   	 	$data['title'] = 'Student Status Active Area';
			$data['headercss'] = 'branchCss';
			$data['header'] = 'header';
			$data['sidemenu'] = 'sidemenu';
			$data['contend'] = 'branchViewProfile';
			$data['subtitle'] = 'Student Registration';
			$data['customizer'] = 'customizer';
			$data['footer'] = 'footer';
			$data['footerjs'] = 'branchJs';
	  		$this->load->view("base/body", $data);
   	 }
   	 public function updateStudentDetailView(){
		$data['title'] = 'Branch Update  Area';
			$data['headercss'] = 'branchViewCss';
			$data['header'] = 'header';
			$data['sidemenu'] = 'sidemenu';
			$data['contend'] = 'updateStudentDetail';
			$data['subtitle'] = 'Pending Branch Request';
			$data['customizer'] = 'customizer';
			$data['footer'] = 'footer';
			$data['footerjs'] = 'branchViewJs';
	  		$this->load->view("base/body", $data);
	}
	public function updateStudentDetail(){
		$name = $this->input->post('name');
		$photo = $this->input->post('photo');
		$password = $this->input->post('password');
		$dob = $this->input->post('dob');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$education = $this->input->post('education');
		$adhar = $this->input->post('adhar_card');
		$religion = $this->input->post('religion');
		$category = $this->input->post('category');
		$gender = $this->input->post('gender');
		$father_name = $this->input->post('fname');
		$mother_name = $this->input->post('mname');
		$exam_status  = $this->input->post('estatus');
		$exam_name = $this->input->post('ename');
		$disability = $this->input->post('disability');
		$disabilities_descrp = $this->input->post('disDescription');
		$per_add = $this->input->post('per_address');
		$per_city = $this->input->post('per_city');
		$per_state = $this->input->post('per_state');
		$per_pincode = $this->input->post('per_pincode');
		$per_country = $this->input->post('per_country');
		$loc_address = $this->input->post('loc_address');
		$loc_city = $this->input->post('loc_city');
		$loc_state = $this->input->post('loc_state');
		$loc_pincode = $this->input->post('loc_pincode');
		$loc_country = $this->input->post('loc_country');
		$id=$this->uri->segment(3);
		if(!$photo){
			$data = array(
				'name' => $name,
				'dob' => $dob,
				'email_id' =>$email,
				'mobile_no' => $mobile,
				'education' => $education,
				'aadhar_card_no' => $adhar,
				//'photo' => $photo,
				'father_name' => $father_name,
				'mother_name' => $mother_name,
				'exam_status' => $exam_status,
				'exam_name' => $exam_name,
				'permanent_add' => $per_add,
				'permanent_city' => $per_city,
				'permanent_state' => $per_state,
				'permanent_pincode' => $per_pincode,
				'permanent_country' => $per_country,
				'local_address' => $loc_address,
				'local_city' => $loc_city,
				'local_state' => $loc_status,
				'local_country' => $loc_country,
				'local_pincode' => $loc_pincode,
				'disabilities_status' => $disability,
				'disabilities_descrp' => $disabilities_descrp,
				'religion' => $religion,
				'category' =>$category,
				'gender' => $gender,
				'created_date' => date('Y-m-d'),
				'password' => $dob
			);
		}else{
			$data = array(
				'name' => $name,
				'dob' => $dob,
				'email_id' =>$email,
				'mobile_no' => $mobile,
				'education' => $education,
				'aadhar_card_no' => $adhar,
				'photo' => $photo,
				'father_name' => $father_name,
				'mother_name' => $mother_name,
				'exam_status' => $exam_status,
				'exam_name' => $exam_name,
				'permanent_add' => $per_add,
				'permanent_city' => $per_city,
				'permanent_state' => $per_state,
				'permanent_pincode' => $per_pincode,
				'permanent_country' => $per_country,
				'local_address' => $loc_address,
				'local_city' => $loc_city,
				'local_state' => $loc_status,
				'local_country' => $loc_country,
				'local_pincode' => $loc_pincode,
				'disabilities_status' => $disability,
				'disabilities_descrp' => $disabilities_descrp,
				'religion' => $religion,
				'category' =>$category,
				'gender' => $gender,
				'created_date' => date('Y-m-d'),
				'password' => $dob
			);
			}
       $this->db->where("id",$id);
		$query = $this->db->update("stud_registration",$data);
		if($query)
		{
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/student');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '6048';
			$config['file_name'] = $photo;
		}
		if (!empty($_FILES['photo']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('photo');
		}
		redirect(base_url()."branchController/showStudList");

	} 
	public function branchExamSection(){
		$data['title'] = 'Branch Exam Section   Area';
			$data['headercss'] = 'branchViewCss';
			$data['header'] = 'header';
			$data['sidemenu'] = 'sidemenu';
			$data['contend'] = 'branchExamSection';
			$data['subtitle'] = 'Exam Section';
			$data['customizer'] = 'customizer';
			$data['footer'] = 'footer';
			$data['footerjs'] = 'branchViewJs';
	  		$this->load->view("base/body", $data);
	}
	///end student registration code

	///Exam Configuration section code start
		public function branchExamConfig(){
			$data['title'] = 'Branch Exam Section   Area';
			$data['headercss'] = 'branchExamCss';
			$data['header'] = 'header';
			$data['sidemenu'] = 'sidemenu';
			$data['contend'] = 'branchExamConfig';
			$data['subtitle'] = 'Exam Section';
			$data['customizer'] = 'customizer';
			$data['footer'] = 'footer';
			$data['footerjs'] = 'branchExamJs';
	  		$this->load->view("base/body", $data);
		} 
		public function addtest(){
			$examHead = $this->input->post('examHead');
			$testname  = $this->input->post('testnm');
			$testDes = $this->input->post('testDes');
			$testmark = $this->input->post('testmark');
			
			$this->load->model('branchModel');
		if(strlen($testname)>1&&strlen($testDes)>1&&strlen($testmark)>1){
		$testListView = $this->branchModel->addTestModel($examHead,$testname,$testDes,$testmark);
			}else{
				$testListView = $this->branchModel->addsTestModel();
			}
				$data['testListview'] = $testListView;
				$this->load->view("ajax/addTest",$data);
			
		}
		public function updateTest(){
			$this->load->model('branchModel');
		if($query = $this->branchModel->updateTestModel($this->input->post("testId"),$this->input->post("testName"),$this->input->post('testDesc'),$this->input->post('testMark'))){
			?>
			<script>
			        $.post("<?php echo base_url('branchController/addtest') ?>", function(data){
			            $("#addTest1").html(data);
					});
			</script>
			<?php 
		}
		}
		public function deleteTest(){
		$this->load->model('branchModel');
		if($query = $this->branchModel->deleteTestModel($this->input->post("testId"))){
			?>
			<script>
			        $.post("<?php echo base_url('branchController/addtest') ?>", function(data){
			            $("#addTest1").html(data);
					});
			</script>
			<?php 
		}
	}
	// add update delete test code end
	// Exam configuration code end 
	//branch Profile update code
			public function UpdateBranch(){
			$data['title'] = 'Branch Update Section   Area';
			$data['headercss'] = 'branchViewCss';
			$data['header'] = 'header';
			$data['sidemenu'] = 'sidemenu';
			$data['contend'] = 'UpdateBranch';
			$data['subtitle'] = 'Branch Profile';
			$data['customizer'] = 'customizer';
			$data['footer'] = 'footer';
			$data['footerjs'] = 'branchViewJs';
	  		$this->load->view("base/body", $data);
			}
			public function branchUpdateDetail(){
				$photo = $this->input->post('photo');
				$password = $this->input->post('password');
				$branch_name = $this->input->post('branch_name');
				$mobile = $this->input->post('mobile');
				$email = $this->input->post('email');
				$address = $this->input->post('address');
				$branch_city = $this->input->post('branch_city');
				$branch_state = $this->input->post('branch_state');
				$branch_country = $this->input->post('branch_country');
				$branch_pincode = $this->input->post('branch_pincode');
				$id = $this->uri->segment(3);
				if(!$photo){
				$data = array(
					'password' =>$password,
					'branch_name' => $branch_name,
					'mobile_no' => $mobile,
					'email_id' =>$email,
					'address' => $address,
					'city' => $branch_city,
					'state' => $branch_state,
					'country' => $branch_country,
					'pincode' => $branch_pincode,
					'created_date' => date('Y-m-d')
				);
			}
			else{
				$data = array(
					'photo' => $photo,
					'password' =>$password,
					'branch_name' => $branch_name,
					'mobile_no' => $mobile,
					'email_id' =>$email,
					'address' => $address,
					'city' => $branch_city,
					'state' => $branch_state,
					'country' => $branch_country,
					'pincode' => $branch_pincode,
					'created_date' => date('Y-m-d')
				);
			}
			 $this->db->where("id",$id);
		$query = $this->db->update("branch",$data);
		if($query)
		{
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/branch');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '6048';
			$config['file_name'] = $photo;
		}
		if (!empty($_FILES['photo']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('photo');
		}
		redirect(base_url()."branchController/viewBranch");
			}
	// branch profile code end

}
?>