<?php 
 
class C_main extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
        $this->load->helper(array('url','form'));
        $this->load->library(array('form_validation', 'Recaptcha'));
	}
 
	function index(){
		$this->form_validation->set_rules('nik', 'NIK', 'required|trim|min_length[10]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

		$recaptcha = $this->input->post('g-recaptcha-response');
        $response = $this->recaptcha->verifyResponse($recaptcha);

		if ($this->form_validation->run() == false|| !isset($response['success']) || $response['success'] <> true) {
			$data = array(
            'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
            'script_captcha' => $this->recaptcha->getScriptTag(), // javascript recaptcha ditaruh di head
        	);
			$this->load->view('login', $data);
		} else {
			$nik = $this->input->post('nik');
			$password = $this->input->post('password');

			$user = $this->db->get_where('users', ['nik' => $nik])->row_array();

			if ($user) {
				if (password_verify($password, $user['password']) and $user['active'] == 1) {
					$data = [
						'nik' => $user['nik'],
						'nama' => $user['nama'],
						'email' => $user['email'],
						'role_id' => $user['role_id'],
						'status' => "login"
					];
					$this->session->set_userdata($data);
					$this->db->where('nik',$user['nik']);
    				$this->db->update('users', array('last_login'=> date('Y-m-d H:i:s')));
					if ($user['role_id'] == 1) {
						redirect('c_admin');
					} else if ($user['role_id'] == 2) {
						redirect('c_user');
					} else if ($user['role_id'] == 3) {
						redirect('c_reader');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password or your account is inactive, please contact admin!</div>');
					redirect('c_main');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sorry, your NIK have not been registered.</div>');
				redirect('c_main');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('nik');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->unset_userdata('status');
		$this->session->unset_userdata('keyword');
		$this->session->unset_userdata('keyword_user');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been logout.</div>');
		redirect('c_main');
	}
}