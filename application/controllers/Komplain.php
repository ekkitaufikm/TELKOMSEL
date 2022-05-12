<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komplain extends CI_Controller {

	function __construct() {
		parent::__construct();
		check_not_login();
        $this->load->model('komplain_m');
        $this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->komplain_m->get();
		$this->template->load('template', 'komplain', $data);
    }

	public function answer()
	{
		$data['row'] = $this->komplain_m->get();
		$this->template->load('template', 'komplain_data', $data);
    }

	public function analisis()
	{
		$data['row'] = $this->komplain_m->get();
		$this->template->load('template', 'analisis', $data);
    }

    public function add()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('nohp', 'nohp', 'required');
		$this->form_validation->set_rules('kelamin', 'kelamin', 'required');
		$this->form_validation->set_rules('keluhan', 'keluhan', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('lat', 'lat', 'required');
		$this->form_validation->set_rules('lng', 'lng', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');

		if ($this->form_validation->run() == FALSE) {
			$this->template->load('template', 'komplain');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->komplain_m->add($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data Berhasil Disimpan');</script>";
			}
			echo "<script>window.location='".site_url('komplain')."';</script>";
		}
    }

}
