<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		if($this->session->userdata('isUserLogin') == FALSE) {
			redirect('auth');
		}
    }

    public function index()
    {
        $this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('backend/_template/content_member');
		$this->load->view('backend/_template/footer');
    }
    
}
