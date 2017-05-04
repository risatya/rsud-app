<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('pengumuman_model');
        $this->load->model('member_model');
        $this->load->library('form_validation');
		$this->load->helper('string');
    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'pengumuman/index/';
        $config['total_rows'] = $this->pengumuman_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'pengumuman.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $pengumuman = $this->pengumuman_model->index_limit_join($config['per_page'], $start);
        

        $data = array(
            'pengumuman_data' => $pengumuman,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('backend/pengumuman/pengumuman_list', $data);
		$this->load->view('backend/_template/footer');
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'pengumuman/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'pengumuman/index/';
        }

        $config['total_rows'] = $this->pengumuman_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'pengumuman/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $pengumuman = $this->pengumuman_model->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'pengumuman_data' => $pengumuman,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('backend/pengumuman/pengumuman_list', $data);
		$this->load->view('backend/_template/footer');
    }

    public function read($id) 
    {
        $row = $this->pengumuman_model->get_by_id_join($id);
        if ($row) {
            $data = array(
		'id_pengumuman' => $row->id_pengumuman,
		'id_member' => $row->id_member,
		'nama_pengumuman' => $row->nama_pengumuman,
		'keterangan' => $row->keterangan,
		'nama' => $row->nama,
	    );
			$this->load->view('backend/_template/header');
			$this->load->view('backend/_template/sidebar');
            $this->load->view('backend/pengumuman/pengumuman_read', $data);
			$this->load->view('backend/_template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengumuman'));
        }
    }
    
    public function create() 
    {
		$member1 = $this->member_model->get_all1();
		$member2 = $this->member_model->get_all2();
		$member3 = $this->member_model->get_all3();
        $data = array(
			'member_data1' => $member1,
			'member_data2' => $member2,
			'member_data3' => $member3,
            'button' => 'Create',
            'action' => site_url('pengumuman/create_action'),
			'id_pengumuman' => set_value('id_pengumuman'),
			'id_member' => set_value('id_member'),
			'nama_pengumuman' => set_value('nama_pengumuman'),
			'keterangan' => set_value('keterangan'),
		);
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('backend/pengumuman/pengumuman_form', $data);
		$this->load->view('backend/_template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
			$jumlah = count($this->input->post('id_member'));
			for($i=0; $i < $jumlah; $i++) {
			
			$data = array(
				'id_member' => $this->input->post('id_member')[$i],
				'nama_pengumuman' => $this->input->post('nama_pengumuman',TRUE),
				'keterangan' => $this->input->post('keterangan',TRUE),
			);
			$this->pengumuman_model->insert($data);
			}
            
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pengumuman')); 
        }
    }
    
    public function update($id) 
    {
        $row = $this->pengumuman_model->get_by_id_join($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pengumuman/update_action'),
				'id_pengumuman' => set_value('id_pengumuman', $row->id_pengumuman),
				'id_member' => set_value('id_member', $row->id_member),
				'nama_pengumuman' => set_value('nama_pengumuman', $row->nama_pengumuman),
				'keterangan' => set_value('keterangan', $row->keterangan),
				'nama' => set_value('nama', $row->nama),
			);
			$this->load->view('backend/_template/header');
			$this->load->view('backend/_template/sidebar');
            $this->load->view('backend/pengumuman/pengumuman_form_edit', $data);
			$this->load->view('backend/_template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengumuman'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pengumuman', TRUE));
        } else {
            $data = array(
				'id_member' => $this->input->post('id_member',TRUE),
				'nama_pengumuman' => $this->input->post('nama_pengumuman',TRUE),
				'keterangan' => $this->input->post('keterangan',TRUE),
			);

            $this->pengumuman_model->update($this->input->post('id_pengumuman', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pengumuman'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->pengumuman_model->get_by_id($id);

        if ($row) {
            $this->pengumuman_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pengumuman'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pengumuman'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_pengumuman', ' ', 'trim|required');
	$this->form_validation->set_rules('keterangan', ' ', 'trim|required');
	$this->form_validation->set_rules('id_pengumuman', 'id_pengumuman', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

};

/* End of file Pengumuman.php */
/* Location: ./application/controllers/Pengumuman.php */