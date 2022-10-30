<?php 
class My404 extends CI_Controller 
{
 public function __construct() 
 {
    parent::__construct(); 
 } 

 public function index() 
 {
 	if($this->session->userdata('role_id') == 1){
 		$this->output->set_status_header('404'); 
    	$this->load->view('err404(admin)');
	}else if($this->session->userdata('role_id') == 2){
		$this->output->set_status_header('404'); 
    	$this->load->view('err404(user)');
    }else if($this->session->userdata('role_id') == 3){
    	$this->output->set_status_header('404'); 
    	$this->load->view('err404(reader)');
    }else{
    	$this->output->set_status_header('404'); 
    	$this->load->view('err404');
    }  
}
} 