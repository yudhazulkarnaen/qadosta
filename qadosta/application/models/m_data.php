<?php 
 
class M_data extends CI_Model{

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    public function getProjects($limit,$start,$keyword = null){
    	if ($keyword) {
    		$this->db->like('namaproject',$keyword);
    	}
        $this->db->join('users', 'users.nik = project.nikpicam');
        $this->db->order_by('namaproject', 'ASC');
    	return $this->db->get('project',$limit,$start)->result_array();
    }

    public function getUsers($limit,$start,$keyword_user = null){
    	if ($keyword_user) {
    		$this->db->like('nama',$keyword_user);
    	}
        $this->db->order_by('nama', 'ASC');
    	return $this->db->get('users',$limit,$start)->result_array();
    }

    public function getProjectsUser($limit,$start,$keyword = null,$nik){
        if ($keyword) {
            $this->db->like('namaproject',$keyword);
        }
        $this->db->join('users', 'users.nik = project.nikpicam');
        $this->db->like('nikpicam',$nik);
        $this->db->order_by('namaproject', 'ASC');
        return $this->db->get('project',$limit,$start)->result_array();
    }
}