<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SubbranchController extends CI_Controller{

	public function subbranchIndex(){
		$data['title'] = 'Branch Registration Area';
		$data['headercss'] = 'branchCss';
		$data['header'] = 'header';
		$data['sidemenu'] = 'sidemenu';
		$data['contend'] = 'subbranchRegistration';
		$data['subtitle'] = 'Branch Registration';
		$data['customizer'] = 'customizer';
		$data['footer'] = 'footer';
		$data['footerjs'] = 'branchJs';
    $this->load->view("base/body", $data);
	}
	public function subbranchRegistration(){
		$branch_Name = $this->input->post('branch_name');
		$mobile = $this->input->post('mobile');
		$email = $this->input->post('email');
		$photo =  trim($_FILES['photo']['name']);
		$address = $this->input->post('address');
		$branchCity = $this->input->post('branch_city');
		$branchState = $this->input->post('branch_state');
		$branchCountry = $this->input->post('branch_country');
		$pincode = $this->input->post('branch_pincode');
		//$usename = $this->input->post('branch_username');
		$password = $this->input->post('branch_pwd');
		$id=$this->session->userdata('id');
		$data =array(
			'branch_name' => $branch_Name,
			'mobile_no' => $mobile,
			'email_id' => $email,
			'photo' => $photo,
			'address' => $address,
			'city' => $branchCity,
			'state' => $branchState,
			'country' => $branchCountry,
			'pincode' => $pincode,
			'login_type' => 4,
			'status' => 0,
			'password' =>$password,
			'branch_id'=>$id,
		);
		$insert=$this->db->insert('sub_branch',$data);
		 $a = $this->db->query('select id from sub_branch ORDER BY id DESC LIMIT 1')->row();
       $this->db->where('id',$a->id);
        $val = array(
                "username" => 'SUBBRANCH'.$a->id
        );
        $this->db->where("id",$a->id);
        $query = $this->db->update("sub_branch",$val);
		if($insert)
		{
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/subbranch');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '6048';
			$config['file_name'] = $photo;
		}
		if (!empty($_FILES['photo']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('photo');
		}
		redirect(base_url('/subbranchController/subbranchIndex'));
	}
	public function viewsubBranch(){
		$data['title'] = 'Branch View Area';
		$data['headercss'] = 'branchViewCss';
		$data['header'] = 'header';
		$data['sidemenu'] = 'sidemenu';
		$data['contend'] = 'subbranchView';
		$data['subtitle'] = 'Search Branch';
		$data['customizer'] = 'customizer';
		$data['footer'] = 'footer';
		$data['footerjs'] = 'branchViewJs';
    $this->load->view("base/body", $data);
	}
	public function showsubBranch(){
		$data['title'] = ' Sub Branch View Area';
		$data['headercss'] = 'branchViewCss';
		$data['header'] = 'header';
		$data['sidemenu'] = 'sidemenu';
		$data['contend'] = 'subbranchShow';
		$data['subtitle'] = 'Search  Sub Branch';
		$data['customizer'] = 'customizer';
		$data['footer'] = 'footer';
		$data['footerjs'] = 'branchViewJs';
		 $this->load->view("base/body", $data);
	}
	public function branchApprove(){
		$data['title'] = ' Sub Branch View Area';
		$data['headercss'] = 'branchViewCss';
		$data['header'] = 'header';
		$data['sidemenu'] = 'sidemenu';
		$data['contend'] = 'branchApprove';
		$data['subtitle'] = 'Search  Sub Branch';
		$data['customizer'] = 'customizer';
		$data['footer'] = 'footer';
		$data['footerjs'] = 'branchViewJs';
		 $this->load->view("base/body", $data);
	}
	public function updatestatus(){
         $status = $this->input->post('status');
        $this->db->where('id',$status);
      $branchid=$this->db->get('sub_branch')->row()->status;
      if($branchid == 1){
        $data= array("status" => 0);
        $this->db->where('id',$status);
        $this->db->update("sub_branch",$data);
    }else{
        $data= array("status" => 1);
         $this->db->where('id',$status);
        $this->db->update("sub_branch",$data);
   	 }
	}
	public function branchView(){
		$data['title'] = ' Sub Branch View Area';
		$data['headercss'] = 'branchViewCss';
		$data['header'] = 'header';
		$data['sidemenu'] = 'sidemenu';
		$data['contend'] = 'branchApprove';
		$data['subtitle'] = 'Search  Sub Branch';
		$data['customizer'] = 'customizer';
		$data['footer'] = 'footer';
		$data['footerjs'] = 'branchViewJs';
		 $this->load->view("base/body", $data);
	}
	public function subbranchView(){
		$data['title'] = 'Sub Branch Update Area';
		$data['headercss'] = 'branchViewCss';
		$data['header'] = 'header';
		$data['sidemenu'] = 'sidemenu';
		$data['contend'] = 'subbranchView';
		$data['subtitle'] = 'Update Sub Branch';
		$data['customizer'] = 'customizer';
		$data['footer'] = 'footer';
		$data['footerjs'] = 'branchViewJs';
		 $this->load->view("base/body", $data);
	}
	public function updatesubBranchDetailView(){
		$data['title'] = 'Branch Update  Area';
			$data['headercss'] = 'branchViewCss';
			$data['header'] = 'header';
			$data['sidemenu'] = 'sidemenu';
			$data['contend'] = 'updatesubbranchDetail';
			$data['subtitle'] = 'Pending Branch Request';
			$data['customizer'] = 'customizer';
			$data['footer'] = 'footer';
			$data['footerjs'] = 'branchViewJs';
	  		$this->load->view("base/body", $data);
	}
	public function updatesubbranchReg(){
			$id = $this->uri->segment(3);
		$branch_Name = $this->input->post('branch_name');
		$mobile = $this->input->post('mobile');
		$email = $this->input->post('email');
		$photo =  trim($_FILES['photo']['name']);
		$address = $this->input->post('address');
		$branchCity = $this->input->post('branch_city');
		$branchState = $this->input->post('branch_state');
		$branchCountry = $this->input->post('branch_country');
		$pincode = $this->input->post('branch_pincode');
		$password = $this->input->post('password');
		$data =array(
			'branch_name' => $branch_Name,
			'mobile_no' => $mobile,
			'email_id' => $email,
			'photo' => $photo,
			'address' => $address,
			'city' => $branchCity,
			'state' => $branchState,
			'country' => $branchCountry,
			'pincode' => $pincode,
			'password' =>$password
		);
		$this->db->where("id",$id);
		$query = $this->db->update("sub_branch",$data);
		if($query)
		{
			$this->load->library('upload');
			$image_path = realpath(APPPATH . '../assets/images/subbranch');
			$config['upload_path'] = $image_path;
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '6048';
			$config['file_name'] = $photo;
		}
		if (!empty($_FILES['photo']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('photo');
		}
		redirect(base_url()."subbranchController/showsubBranch");

	
	}
}
?>