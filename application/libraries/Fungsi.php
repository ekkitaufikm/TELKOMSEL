<?php

Class Fungsi {

    protected $ci;

    function __construct() {
        $this->ci =& get_instance();
    }

    function user_login() {
        $this->ci->load->model('user_m');
        $user_id = $this->ci->session->userdata('userid');
        $user_data = $this->ci->user_m->get($user_id)->row();
        return $user_data;
    }

    function data_pelanggan() {
        $this->ci->load->model('komplain_m');
        $pelanggan_id = $this->ci->session->userdata('pelanggan_id');
        $pelanggan_data = $this->ci->komplain_m->get($pelanggan_id)->row();
        return $pelanggan_data;
    }

}