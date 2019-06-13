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
}
?>