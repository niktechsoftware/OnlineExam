<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function index()
{

 
        $this->load->view('auth/login');
}

public function home()
{
	$data['title'] = 'Home Page';
		$data['headercss'] = 'home_css';
		$data['header'] = 'header';
		$data['sidemenu'] = 'sidemenu';
		$data['contend'] = 'homepage';
		$data['customizer'] = 'customizer';
		$data['footer'] = 'footer';
		$data['footerjs'] = 'home_js';
    $this->load->view("base/body", $data);
}
public function branch()
{
	$data['title'] = 'Home Page';
		$data['headercss'] = 'home_css';
		$data['header'] = 'header';
		$data['sidemenu'] = 'sidemenu';
		$data['contend'] = 'homepage';
		$data['customizer'] = 'customizer';
		$data['footer'] = 'footer';
		$data['footerjs'] = 'home_js';
    $this->load->view("base/body", $data);
}
public function studDashboard()
{
	$data['title'] = 'Home Page';
		$data['headercss'] = 'home_css';
		$data['header'] = 'header';
		$data['sidemenu'] = 'sidemenu';
		$data['contend'] = 'homepage';
		$data['customizer'] = 'customizer';
		$data['footer'] = 'footer';
		$data['footerjs'] = 'home_js';
    $this->load->view("base/body", $data);
}
public function logout()
{
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		redirect('welcome');
}

	


}