<?php 
 
class C_user extends CI_Controller{
 
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

		$this->load->view('index(user)');
	}
 
	function viewproject(){
		$nik = $this->session->userdata('nik');

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
        $this->db->like('nikpicam',$nik);
        $this->db->from('project');
        $config['base_url'] = site_url('c_user/viewproject');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        //initialize
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['project'] = $this->m_data->getProjectsUser($config['per_page'],$data['start'],$data['keyword'],$nik);

        $this->load->view('view_project(user)',$data);
	}

	public function addproject(){
		$this->session->unset_userdata('keyword');

		$this->form_validation->set_rules('nama', 'Nama Project', 'required|trim');
		$this->form_validation->set_rules('unitam', 'Unit AM', 'required|trim');
		$this->form_validation->set_rules('itqa', 'PIC IT QA', 'required|trim');
		$this->form_validation->set_rules('tglmulai', 'Tanggal Mulai', 'required');

        $namaproject = $this->input->post('nama');
        $project = $this->db->get_where('project', ['namaproject' => $namaproject])->row_array();

        if ($project) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Nama project telah terdaftar!</div>');
            redirect('c_admin/addproject');
        } else {
		if ($this->form_validation->run() == false) {
			$this->load->view('input_project(user)');
		} else {
			$data = [
				'namaproject' => $this->input->post('nama', true),
				'nikpicam' => $this->session->userdata('nik'),
				'unitam' => $this->input->post('unitam', true),
				'itqa' => $this->input->post('itqa', true),
				'tglmulai' => $this->input->post('tglmulai', true),
				'status' => 0
			];
			$this->db->insert('project', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation, your project has been registered !</div>');
			redirect('c_user/viewproject');
		}
        }
	}

	public function changepassword(){
		$this->session->unset_userdata('keyword');

		$this->form_validation->set_rules('oldpassword', 'Password Lama', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password Baru', 'required|trim|min_length[8]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Ulangi Password Baru', 'required|trim|matches[password1]');
		if ($this->form_validation->run() == false) {
			$this->load->view('change_password(user)');
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
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Request updated!</div>');
				redirect('c_main/logout');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong old password!</div>');
				redirect('c_user/changepassword');
			}
		}
	}

	public function detailproject($idproject){
		$this->db->select('*');
        $this->db->from('project');
        $this->db->join('users', 'users.nik = project.nikpicam');
        $this->db->where('idproject', $idproject);
        $query = $this->db->get();
        $data['res'] = $query->row_array();

		$this->load->view('detail_project(user)',$data);
	}

	function autocompleteproject()
    {
    	$nik = $this->session->userdata('nik');
        
        $this->db->like('namaproject', $_GET['term'], 'both');
        $this->db->join('users', 'users.nik = project.nikpicam');
        $this->db->like('nikpicam',$nik);
        $this->db->order_by('namaproject', 'ASC');
        // $this->db->limit(10);
        $result = $this->db->get('project')->result();
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->namaproject;
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