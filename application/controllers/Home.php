<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        /* $this->load->model('data_website_berita_model');
        $this->load->model('data_website_setting_model');
        $this->load->model('data_website_download_model'); */
    }
	
	public function index()
	{
		/* $config1 = 4;
		$config2 = 1;
		$start = $this->uri->segment(2, 0);
        $data_website_berita = $this->data_website_berita_model->index_limit($config1, $start);
        $data_website_download = $this->data_website_download_model->index_limit($config1, $start);
        $data_website_setting = $this->data_website_setting_model->index_limit($config2, $start);

        $data = array(
            'data_website_berita_data' => $data_website_berita,
            'data_website_download_data' => $data_website_download,
            'data_website_setting_data' => $data_website_setting,
        ); */
		
		$this->load->view('frontend/_template/header');
		$this->load->view('frontend/home/index');
		$this->load->view('frontend/_template/footer');
	}
}
