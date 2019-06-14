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
		$bImage =  trim($_FILES['branch_img']['name']);
		$address = $this->input->post('address');
		$branchCity = $this->input->post('branch_city');
		$branchState = $this->input->post('branch_state');
		$branchCountry = $this->input->post('branch_country');
		$pincode = $this->input->post('branch_pincode');
		$usename = $this->input->post('branch_username');
		$password = $this->input->post('branch_pwd');
		$id=$this->session->userdata('id');
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
			'login_type' => 4,
			'status' => 0,
			'password' =>$password,
			'branch_id'=>$id,
		);
		$insert=$this->db->insert('sub_branch',$data);
		 $a = $this->db->query('select id from sub_branch ORDER BY id DESC LIMIT 1')->row();
       $this->db->where('id',$a->id);
       //$que = $this->db->get('branch')->row();
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
			$config['file_name'] = $bImage;
		}
		if (!empty($_FILES['photo']['name'])) {
			$this->upload->initialize($config);
			$this->upload->do_upload('branch_img');
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
		//$this->load->model('branchModel');
		//$branch = $this->branchModel->branchView();
		//$data['view'] =$branch;
    $this->load->view("base/body", $data);
	}
	
}
?>