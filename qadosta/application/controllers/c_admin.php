<?php 
 
class C_admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
        $this->load->helper('url');

        if($this->session->userdata('status') != "login"){
			redirect(base_url());
		}
	}
 
	function index(){
		$this->session->unset_userdata('keyword');
		$this->session->unset_userdata('keyword_user');

		$this->load->view('index(admin)');
	}

	public function viewproject(){
		$this->session->unset_userdata('keyword_user');

		//ambil data keyword
		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		// config
		$this->db->like('namaproject',$data['keyword']);
		$this->db->join('users', 'users.nik = project.nikpicam');
		$this->db->from('project');
		$config['base_url'] = site_url('c_admin/viewproject');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 5;

		//initialize
		$this->pagination->initialize($config);


		$data['start'] = $this->uri->segment(3);
		$data['project'] = $this->m_data->getProjects($config['per_page'],$data['start'],$data['keyword']);

		$this->load->view('view_project(admin)',$data);
	}

	public function adduser(){
		$this->session->unset_userdata('keyword');
		$this->session->unset_userdata('keyword_user');

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nik', 'NIK', 'required|trim|min_length[10]');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Ulangi Password', 'required|trim|matches[password1]');
		$this->form_validation->set_rules('level', 'Level', 'required');

		$nik = $this->input->post('nik');
		$user = $this->db->get_where('users', ['nik' => $nik])->row_array();

		if ($this->form_validation->run() == false) {
			$this->load->view('register(admin)');
		} else {
			if ($user) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIK sudah terdaftar !</div>');
				redirect('c_admin/adduser');
			} else {
			$data = [
				'nama' => $this->input->post('nama', true),
				'nik' => $this->input->post('nik', true),
				'email' => $this->input->post('email', true),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => $this->input->post('level'),
				'active' => 1
			];
			$connected = fopen("http://www.google.com:80/","r");
			if($connected){
				$this->_sendEmail();
				$this->db->insert('users', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation, your account has been registered ! Please check email for account information.</div>');
				redirect('c_admin/manageuser');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please connect to the internet !</div>');
				redirect('c_admin/adduser');
			}
			}
		}
	}

	private function _sendEmail(){
		$address = $this->input->post('email');
		$name = $this->input->post('nama');
		$password = $this->input->post('password1');
		$nik = $this->input->post('nik');

		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'qadosta@gmail.com',
			'smtp_pass' => 'qualityassurance',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];

		$this->load->library('email',$config); 
		$this->email->initialize($config);

		$this->email->from('qadosta@gmail.com', 'Qadosta QA');
		$this->email->to($address);
		$this->email->subject('Info Akun Qadosta "'.$name.'"');
		$this->email->message('<h3>Info Akun Qadosta "'.$name.'"</h3> 
		<p> </p>
		<table style="font-family: roboto;">
        <tr>
            <td>Nama User</td>
            <td> = </td>
            <td>'.$name.'</td>
        </tr>
        <tr>
            <td>Alamat Email</td>
            <td> = </td>
            <td>'.$address.'</td>
        </tr>
        <tr>
            <td>Password</td>
            <td> = </td>
            <td>'.$password.'</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td> = </td>
            <td>'.$nik.'</td>
        </tr>
        </table>'
    	);

		if ($this->email->send()){
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function manageuser(){
		$this->session->unset_userdata('keyword');

		//ambil data keyword
		if ($this->input->post('submit')) {
			$data['keyword_user'] = $this->input->post('keyword_user');
			$this->session->set_userdata('keyword_user', $data['keyword_user']);
		} else {
			$data['keyword_user'] = $this->session->userdata('keyword_user');
		}

		// config
		$this->db->like('nama',$data['keyword_user']);
		$this->db->from('users');
		$config['base_url'] = site_url('c_admin/manageuser');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 5;

		//initialize
		$this->pagination->initialize($config);


		$data['start'] = $this->uri->segment(3);
		$data['user'] = $this->m_data->getUsers($config['per_page'],$data['start'],$data['keyword_user']);

		$this->load->view('manage_user(admin)',$data);
	}

	public function addproject(){
		$this->session->unset_userdata('keyword');
		$this->session->unset_userdata('keyword_user');

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('picam', 'PIC AM', 'required|trim');
		$this->form_validation->set_rules('unitam', 'Unit AM', 'required|trim');
		$this->form_validation->set_rules('itqa', 'PIC IT QA', 'required|trim');
		$this->form_validation->set_rules('tglmulai', 'Tanggal Mulai', 'required');

		$namaproject = $this->input->post('nama');
		$project = $this->db->get_where('project', ['namaproject' => $namaproject])->row_array();

		$picam = $this->input->post('picam');
		$user = $this->db->get_where('users', ['nama' => $picam])->row_array();

		if ($project) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Nama project telah terdaftar!</div>');
			redirect('c_admin/addproject');
		} else {
			if ($this->form_validation->run() == false) {
			$this->load->view('input_project(admin)');
		} else if ($user && $user['role_id'] == 2){
			$data = [
				'namaproject' => $this->input->post('nama', true),
				'nikpicam' => $user['nik'],
				'unitam' => $this->input->post('unitam', true),
				'itqa' => $this->input->post('itqa', true),
				'tglmulai' => $this->input->post('tglmulai', true),
				'status' => 0
			];
			$this->db->insert('project', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation, your project has been registered !</div>');
			redirect('c_admin/viewproject');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">PIC AM tidak terdaftar! Pastikan nama sesuai dan telah terdaftar di sistem</div>');
			redirect('c_admin/addproject');
		}
		}
	}

	public function changepassword(){
		$this->session->unset_userdata('keyword');
		$this->session->unset_userdata('keyword_user');

		$this->form_validation->set_rules('oldpassword', 'Password Lama', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password Baru', 'required|trim|min_length[8]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Ulangi Password Baru', 'required|trim|matches[password1]');
		if ($this->form_validation->run() == false) {
			$this->load->view('change_password(admin)');
		} else {
			$nik = $this->session->userdata('nik');
			$password = $this->input->post('oldpassword');
			$newpassword = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);

			$user = $this->db->get_where('users', ['nik' => $nik])->row_array();

			if (password_verify($password, $user['password'])){
				$data = [
                        'password' => $newpassword,
                        'last_change_password'=> date('Y-m-d H:i:s')
                    ];
                $where = array(
                        'nik' => $this->session->userdata('nik')
                    );

                $this->db->where($where);
                $this->db->update("users", $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your password has been successfully changed!</div>');
				redirect('c_main/logout');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong old password!</div>');
				redirect('c_admin/changepassword');
			}
		}
	}

	public function editproject($idproject){
		$this->session->unset_userdata('keyword_user');

		$this->db->select('*');
       	$this->db->from('project');
       	$this->db->join('users', 'users.nik = project.nikpicam');
      	$this->db->where('idproject', $idproject);
      	$query = $this->db->get();
       	$data['res'] = $query->row_array();

       	$this->load->view('edit_project(admin)',$data);
    }

    public function update($idproject){
		$this->session->unset_userdata('keyword_user');

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('unitam', 'Unit AM', 'required|trim');
		$this->form_validation->set_rules('itqa', 'PIC IT QA', 'required|trim');
		$this->form_validation->set_rules('tglmulai', 'Tanggal Mulai', 'required');

		$picam = $this->input->post('picam');
		$user = $this->db->get_where('users', ['nama' => $picam])->row_array();

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pastikan field "Nama Project" dan "Tanggal Mulai" terisi !</div>');
			redirect('c_admin/editproject/'.$idproject);
		} else if ($user && $user['role_id'] == 2){
			$data = [
				'namaproject' => $this->input->post('nama', true),
				'nikpicam' => $user['nik'],
				'unitam' => $this->input->post('unitam', true),
				'itqa' => $this->input->post('itqa', true),
				'tglmulai' => $this->input->post('tglmulai', true),
				'oop' => $this->input->post('oop'),
				'brd' => $this->input->post('brd'),
				'tor' => $this->input->post('tor'),
				'da' => $this->input->post('da'),
				'sit' => $this->input->post('sit'),
				'ug' => $this->input->post('ug'),
				'dg' => $this->input->post('dg'),
				'ss' => $this->input->post('ss'),
				'fqa' => $this->input->post('fqa'),
				'uat' => $this->input->post('uat'),
				'reg' => $this->input->post('reg'),
				'sop' => $this->input->post('sop'),
				'note' => $this->input->post('note', true),
				'rekomendasi' => $this->input->post('rekomendasi', true),
				'tglselesai' => $this->input->post('tglselesai', true),
				'status' => $this->input->post('status')
			];
 
			$where = array(
				'idproject' => $idproject
			);
 
			$this->m_data->update_data($where,$data,'project');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Request updated!</div>');
			redirect('c_admin/viewproject');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">PIC AM tidak terdaftar! Pastikan nama sesuai dan telah terdaftar di sistem</div>');
			redirect('c_admin/editproject/'.$idproject);
		}
		

    }

	public function detailproject($idproject){
		$this->session->unset_userdata('keyword_user');

		$this->db->select('*');
        $this->db->from('project');
        $this->db->join('users', 'users.nik = project.nikpicam');
        $this->db->where('idproject', $idproject);
        $query = $this->db->get();
        $data['res'] = $query->row_array();

		$this->load->view('detail_project(admin)',$data);
	}

	public function rejectaccount($nik){
		$this->session->unset_userdata('keyword');

		$data = [
            'active' => "0"
        ];
        $this->db->where('nik', $nik);
        $this->db->update('users', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Request updated!</div>');
        redirect('c_admin/manageuser');
	}

	public function acceptaccount($nik){
		$this->session->unset_userdata('keyword');

		$data = [
            'active' => "1"
        ];
        $this->db->where('nik', $nik);
        $this->db->update('users', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Request updated!</div>');
        redirect('c_admin/manageuser');
	}

	function autocompleteproject()
    {
        $this->db->like('namaproject', $_GET['term'], 'both');
        $this->db->order_by('namaproject', 'ASC');
        // $this->db->limit(10);
        $result = $this->db->get('project')->result();
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->namaproject;
            echo json_encode($arr_result);
        }
    }

    function autocompleteuser()
    {
        $this->db->like('nama', $_GET['term'], 'both');
        $this->db->order_by('nama', 'ASC');
        // $this->db->limit(10);
        $result = $this->db->get('users')->result();
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nama;
            echo json_encode($arr_result);
        }
    }

    function autocompletepicam()
    {
        $this->db->like('nama', $_GET['term'], 'both');
        $this->db->where('role_id', 2);
        $this->db->order_by('nama', 'ASC');
        // $this->db->limit(10);
        $result = $this->db->get('users')->result();
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nama;
            echo json_encode($arr_result);
        }
    }

    public function pdf($idproject,$namaproject){
    	$namauser = $this->session->userdata('nama');
    	$date = date('Y-M-d H:i:s');

    	$this->load->library('dompdf_gen');

    	$this->db->select('*');
        $this->db->from('project');
        $this->db->join('users', 'users.nik = project.nikpicam');
        $this->db->where('idproject', $idproject);
        $query = $this->db->get();
        $data['res'] = $query->row_array();

        $data['user'] = array(
        	'namauser' => $namauser,
        	'date' => $date
		);

    	$this->load->view('laporan_pdf',$data);

    	$paper_size = 'A4';
    	$orientation = 'portrait';
    	$html = $this->output->get_output();
    	$this->dompdf->set_paper($paper_size,$orientation);

    	$this->dompdf->load_html($html);
    	$this->dompdf->render();
    	$this->dompdf->stream("Detail Project $namaproject.pdf", array('Attachment' =>0));
    }
}