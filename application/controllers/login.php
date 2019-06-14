<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function authentication() {

            $username = $this->input->post('username');

            $password = $this->input->post('password');

            $this->load->model('auth_login');

            $loginData = $this->auth_login->getLoginData($username,$password);


             if ($loginData['is_login'])
             {

                if($loginData['login_type']==1)
                {
                $this->session->set_userdata($loginData);
                redirect("/welcome/home", 'refresh');
                 }
                 else if($loginData['login_type']==2)
                 {
                   $this->session->set_userdata($loginData);
                     redirect("/welcome/branch", 'refresh');
                 }
                 else if($loginData['login_type']==3){
                    $this->session->set_userdata($loginData);
                redirect("/welcome/studDashboard", 'refresh');
                 }

                 else{

                      $this->session->set_userdata($loginData);
                redirect("/welcome/subbranchDashboard", 'refresh');
               

                 }

             }
              else
                 {
                 	redirect('welcome/index');
                 }
	}
    public function branch(){
        $this->load->view('branchindex');
    }
    public function branchIndexReg(){
        $branchName = $this->input->post('name');
       // echo $branchName;exit;
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $photo_name = trim($_FILES['photo']['name']);
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $state = $this->input->post('state');
        $country = $this->input->post('country');
        $pincode = $this->input->post('pincode');
        $password = $this->input->post('password');
        $data = array(
            'branch_name' => $branchName,
            'mobile_no' => $mobile,
            'email_id' => $email,
            'photo' => $photo_name,
            'address' => $address,
            'city' => $city,
            'state' => $state,
            'country' => $country,
            'pincode' => $pincode,
           // 'username' => $usename,
            'login_type' => 2,
            'status' => 0,
           'password'=>md5($password),
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
            $config['file_name'] = $photo_name;
        }
        if (!empty($_FILES['photo']['name'])) {
            $this->upload->initialize($config);
            $this->upload->do_upload('photo');
        }
        redirect(base_url('/login/branch'));
    }
    public function student(){
        $this->load->view('studentIndex');
    }
    public function studIndexReg(){
        $name = $this->input->post('name');
        $dob = $this->input->post('dob');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $father_name = $this->input->post('fname');
        $mother_name =  $this->input->post('mname');
        $education = $this->input->post('education');
        $adhar = $this->input->post('adhar');
        $examStatus = $this->input->post('examStatus');
        $examDes = $this->input->post('examDes');
        $photo =  trim($_FILES['photo']['name']);
        $gender = $this->input->post('gender');
        $religion = $this->input->post('religion');
        $category = $this->input->post('category');
        $disability = $this->input->post('disability');
        $disabilityDes = $this->input->post('disabilityDes');
        $per_address = $this->input->post('per_address');
        $per_city = $this->input->post('per_city');
        $per_state = $this->input->post('per_state');
        $per_country = $this->input->post('per_country');
        $per_pincode = $this->input->post('per_pincode');
        $local_address = $this->input->post('local_add');
        $local_city = $this->input->post('local_city');
        $local_state = $this->input->post('local_state');
        $local_country = $this->input->post('local_country');
        $local_pincode = $this->input->post('local_pincode');
        $password = $this->input->post('password');
    
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
                'exam_status' => $examStatus,
                'exam_name' => $examDes,
                'permanent_add' => $per_address,
                'permanent_city' => $per_city,
                'permanent_state' => $per_state,
                'permanent_pincode' => $per_pincode,
                'permanent_country' => $per_country,
                'local_address' => $local_address,
                'local_city' => $local_city,
                'local_state' => $local_state,
                'local_country' => $local_country,
                'local_pincode' => $local_pincode,
                'disabilities_status' => $disability,
                'disabilities_descrp' => $disabilityDes,
                'religion' => $religion,
                'category' =>$category,
                'gender' => $gender,
                'login_type' => 3,
                'status' => 0,
               // 'username' => $username,
               'password'=>md5($password),
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
            $config['file_name'] = $photo;
        }
        if (!empty($_FILES['photo']['name'])) {
            $this->upload->initialize($config);
            $this->upload->do_upload('photo');
        }
        redirect(base_url('/login/student'));
    }
}?>
