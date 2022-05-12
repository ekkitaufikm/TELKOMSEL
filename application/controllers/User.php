<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct() {
		parent::__construct();
		check_not_login();
		check_admin();
		$this->load->model('user_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->user_m->get();
		$this->template->load( 'template', 'user/user_data', $data);
	}

	public function del()
	{
		$id = $this->input->post('user_id');
		$this->user_m->del($id);

		if($this->db->affected_rows() > 0 ){
			echo "<script> alert('Data Berhasil dihapus!'); </script>";
		}
		echo "<script> window.location='".site_url('user')."'; </script>";
	}

	
}