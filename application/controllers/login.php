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

             
             }
              else
                 {
                 	redirect('welcome/index');
                 }
        

	}
}?>
