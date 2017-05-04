<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('administrator_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'administrator/index/';
        $config['total_rows'] = $this->administrator_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'administrator';
        $this->pagination->initialize($config);
		$level = '1';
        $start = $this->uri->segment(3, 0);
        $administrator = $this->administrator_model->index_limit($config['per_page'], $start, $level);

        $data = array(
            'administrator_data' => $administrator,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('backend/administrator/administrator_list', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function administrator_simpeg()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'administrator/index/';
        $config['total_rows'] = $this->administrator_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'administrator';
        $this->pagination->initialize($config);
		$level = '2';
        $start = $this->uri->segment(3, 0);
        $administrator = $this->administrator_model->index_limit($config['per_page'], $start, $level);

        $data = array(
            'administrator_data' => $administrator,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('backend/administrator/administrator_list_admin_simpeg', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function administrator_webinternal()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'administrator/index/';
        $config['total_rows'] = $this->administrator_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'administrator';
        $this->pagination->initialize($config);
		$level = '3';
        $start = $this->uri->segment(3, 0);
        $administrator = $this->administrator_model->index_limit($config['per_page'], $start, $level);

        $data = array(
            'administrator_data' => $administrator,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('backend/administrator/administrator_list_web_internal', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function pegawai_simpeg()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'administrator/index/';
        $config['total_rows'] = $this->administrator_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'administrator';
        $this->pagination->initialize($config);
		$level = '4';
        $start = $this->uri->segment(3, 0);
        $administrator = $this->administrator_model->index_limit($config['per_page'], $start, $level);

        $data = array(
            'administrator_data' => $administrator,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('backend/administrator/administrator_list_pegawai_simpeg', $data);
		$this->load->view('backend/_template/footer');
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(4, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(4)=='search') {
            $config['base_url'] = base_url() . 'administrator/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'administrator/index/';
        }

        $config['total_rows'] = $this->administrator_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'administrator/search/'.$keyword;
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $level = '1';
        $administrator = $this->administrator_model->search_index_limit($config['per_page'], $start, $keyword, $level);

        $data = array(
            'administrator_data' => $administrator,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('backend/administrator/administrator_list', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function search1() 
    {
        $keyword = $this->uri->segment(4, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(4)=='search') {
            $config['base_url'] = base_url() . 'administrator/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'administrator/index/';
        }

        $config['total_rows'] = $this->administrator_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'administrator/search/'.$keyword;
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $level = '2';
        $administrator = $this->administrator_model->search_index_limit($config['per_page'], $start, $keyword, $level);

        $data = array(
            'administrator_data' => $administrator,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('backend/administrator/administrator_list', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function search2() 
    {
        $keyword = $this->uri->segment(4, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(4)=='search') {
            $config['base_url'] = base_url() . 'administrator/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'administrator/index/';
        }

        $config['total_rows'] = $this->administrator_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'administrator/search/'.$keyword;
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $level = '3';
        $administrator = $this->administrator_model->search_index_limit($config['per_page'], $start, $keyword, $level);

        $data = array(
            'administrator_data' => $administrator,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('backend/administrator/administrator_list', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function search3() 
    {
        $keyword = $this->uri->segment(4, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(4)=='search') {
            $config['base_url'] = base_url() . 'administrator/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'administrator/index/';
        }

        $config['total_rows'] = $this->administrator_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'administrator/search/'.$keyword;
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $level = '4';
        $administrator = $this->administrator_model->search_index_limit($config['per_page'], $start, $keyword, $level);

        $data = array(
            'administrator_data' => $administrator,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('backend/administrator/administrator_list', $data);
		$this->load->view('backend/_template/footer');
    }
    
    public function read($id) 
    {
        $row = $this->administrator_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_user' => $row->id_user,
		'user_level' => $row->user_level,
		'nama' => $row->nama,
		'email' => $row->email,
		'password' => $row->password,
		'status' => $row->status,
	    );
			$this->load->view('backend/_template/header');
			$this->load->view('backend/_template/sidebar');
			$this->load->view('backend/administrator/administrator_read', $data);
			$this->load->view('backend/_template/footer');
            
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('backend/administrator'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('administrator/create_action'),
	    'id_user' => set_value('id_user'),
	    'user_level' => set_value('user_level'),
	    'nama' => set_value('nama'),
	    'email' => set_value('email'),
	    'password' => set_value('password'),
	    'status' => set_value('status'),
	);
		$this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
		$this->load->view('backend/administrator/administrator_form', $data);
		$this->load->view('backend/_template/footer');
        
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'user_level' => $this->input->post('user_level',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'email' => $this->input->post('email',TRUE),
		'password' => md5($this->input->post('password',TRUE)),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->administrator_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('backend/administrator'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->administrator_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('administrator/update_action'),
		'id_user' => set_value('id_user', $row->id_user),
		'user_level' => set_value('user_level', $row->user_level),
		'nama' => set_value('nama', $row->nama),
		'email' => set_value('email', $row->email),
		'password' => set_value('password', $row->password),
		'status' => set_value('status', $row->status),
	    );
			$this->load->view('backend/_template/header');
			$this->load->view('backend/_template/sidebar');
			$this->load->view('backend/administrator/administrator_form', $data);
			$this->load->view('backend/_template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('backend/administrator'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
			if(!empty($_POST['password'])){
				$data = array(
					'user_level' => $this->input->post('user_level',TRUE),
					'nama' => $this->input->post('nama',TRUE),
					'email' => $this->input->post('email',TRUE),
					'password' => md5($this->input->post('hidden',TRUE)),
					'status' => $this->input->post('status',TRUE),
				);

				$this->administrator_model->update($this->input->post('id_user', TRUE), $data);
				$this->session->set_flashdata('message', 'Update Record Success');
				redirect(site_url('backend/administrator'));
				//echo 'pass tidak kosong';
				//exit;
			}else{
				$data = array(
					'user_level' => $this->input->post('user_level',TRUE),
					'nama' => $this->input->post('nama',TRUE),
					'email' => $this->input->post('email',TRUE),
					'password' => $this->input->post('hidden',TRUE),
					'status' => $this->input->post('status',TRUE),
				);

				$this->administrator_model->update($this->input->post('id_user', TRUE), $data);
				$this->session->set_flashdata('message', 'Update Record Success');
				redirect(site_url('backend/administrator'));
				//echo 'pass kosong';
				//exit;
			}
            
        }
    }
    
    public function delete($id) 
    {
        $row = $this->administrator_model->get_by_id($id);

        if ($row) {
            $this->administrator_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('backend/administrator'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('backend/administrator'));
        }
    }

    function _rules() 
    {
	$this->form_validation->set_rules('user_level', ' ', 'trim|xss_clean|required|numeric');
	$this->form_validation->set_rules('nama', ' ', 'trim|xss_clean|required');
	$this->form_validation->set_rules('email', ' ', 'trim|xss_clean|required');
	$this->form_validation->set_rules('status', ' ', 'trim|xss_clean|required|numeric');
	$this->form_validation->set_rules('id_user', 'id_user', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Administrator.php */
/* Location: ./application/controllers/Administrator.php */