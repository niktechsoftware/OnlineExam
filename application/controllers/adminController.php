<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
class AdminController extends CI_Controller{
	

	public function branchRequest(){
		$data['title'] = 'Branch Active  Area';
			$data['headercss'] = 'branchCss';
			$data['header'] = 'header';
			$data['sidemenu'] = 'sidemenu';
			$data['contend'] = 'branchRequest';
			$data['subtitle'] = 'Pending Branch Request';
			$data['customizer'] = 'customizer';
			$data['footer'] = 'footer';
			$data['footerjs'] = 'branchJs';
	  		$this->load->view("base/body", $data);
	} 
	public function updatestatus(){
         $status = $this->input->post('status');
        $this->db->where('id',$status);
      $branchid=$this->db->get('branch')->row()->status;
      if($branchid == 1){
        $data= array("status" => 0);
        //print_r($data);
        $this->db->where('id',$status);
        $this->db->update("branch",$data);

    }else{
        $data= array("status" => 1);
         $this->db->where('id',$status);
        $this->db->update("branch",$data);
   	 }
	}
	public function branchView(){
		$data['title'] = 'Branch View  Area';
			$data['headercss'] = 'branchCss';
			$data['header'] = 'header';
			$data['sidemenu'] = 'sidemenu';
			$data['contend'] = 'branchView';
			$data['subtitle'] = ' Branch View';
			$data['customizer'] = 'customizer';
			$data['footer'] = 'footer';
			$data['footerjs'] = 'branchJs';
	  		$this->load->view("base/body", $data);
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
        //print_r($data);
        $this->db->where('id',$status);
        $this->db->update("stud_registration",$data);

    }else{
        $data= array("status" => 1);
         $this->db->where('id',$status);
        $this->db->update("stud_registration",$data);
   	 }
	}
	public function updateStudDetailView(){
		 $this->uri->segment(3);
		$data['title'] = 'Student Update Area';
			$data['headercss'] = 'adminStud_css';
			$data['header'] = 'header';
			$data['sidemenu'] = 'sidemenu';
			$data['contend'] = 'updateStudDetailView';
			$data['subtitle'] = 'Student Edit Details';
			$data['customizer'] = 'customizer';
			$data['footer'] = 'footer';
			$data['footerjs'] = 'adminStud_js';
	  		$this->load->view("base/body", $data);
	}
	public function studRegistration(){
		$id = $this->uri->segment(3);
		$name = $this->input->post('name');
		$dob = $this->input->post('dob');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$education = $this->input->post('education');
		$adhar = $this->input->post('adhar_card');
		$religion =$this->input->post('religion');
		$ctegory = $this->input->post('category');
		$gender = $this->input->post('gender'); 
		$fname = $this->input->post('fname');
		$mname = $this->input->post('mname');
		$examStatus = $this->input->post('estatus');
		$examName = $this->input->post('ename');
		$disability = $this->input->post('disability');
		$disabilityDescr = $this->input->post('disDescription');
		$per_address = $this->input->post('per_address');
		$per_city = $this->input->post('per_city');
		$per_state = $this->input->post('per_state');
		$per_pincode =$this->input->post('per_pincode');
		$per_country  = $this->input->post('per_country');
		$loc_address = $this->input->post('loc_address');
		$loc_city = $this->input->post('loc_city');
		$loc_state = $this->input->post('loc_state');
		$loc_pincode = $this->input->post('loc_pincode');
		$loc_country = $this->input->post('loc_country');
		$data = array(
			'name' => $name,
			'father_name' => $fname,
			'dob' => $dob,
			'email_id' => $email,
			'mobile_no' => $mobile,
			'education' => $education,
			'aadhar_card_no' => $adhar,
			'religion' =>  $religion,
			'category' => $ctegory,
			'gender' => $gender,
			'mother_name' => $mname,
			'exam_status' => $examStatus,
			'exam_name' => $examName,
			'disabilities_status' => $disability,
			'disabilities_descrp' => $disabilityDescr,
			'permanent_add' => $per_address,
			'permanent_city' => $per_city,
			'permanent_state' => $per_state,
			'permanent_pincode' => $per_pincode,
			'permanent_country' => $per_country,
			'local_address' => $loc_address,
			'local_city' => $loc_city,
			'local_state' => $loc_state,
			'local_pincode' => $loc_pincode,
			'local_country' => $loc_country
		);
		$this->db->where("id",$id);
//print_r($aa);
//print_r($data);exit();
		$query = $this->db->update("stud_registration",$data);
//print_r($query);exit();
		redirect(base_url()."adminController/studentRequest");

	}
}
?>