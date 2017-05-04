<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Surat_diajukan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('surat_diajukan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'surat_diajukan/index/';
        $config['total_rows'] = $this->surat_diajukan_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'surat_diajukan.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $surat_diajukan = $this->surat_diajukan_model->index_limit($config['per_page'], $start);

        $data = array(
            'surat_diajukan_data' => $surat_diajukan,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_diajukan_diteruskan_list', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function surat_masuk()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'surat_diajukan/index/';
        $config['total_rows'] = $this->surat_diajukan_model->total_rows_surat_masuk();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'surat_diajukan.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $surat_diajukan = $this->surat_diajukan_model->index_limit_masuk($config['per_page'], $start);

        $data = array(
            'surat_diajukan_data' => $surat_diajukan,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_diajukan_diteruskan_list', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function surat_keluar()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'surat_diajukan/index/';
        $config['total_rows'] = $this->surat_diajukan_model->total_rows_surat_keluar();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'surat_diajukan.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $surat_diajukan = $this->surat_diajukan_model->index_limit_keluar($config['per_page'], $start);

        $data = array(
            'surat_diajukan_data' => $surat_diajukan,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_diajukan_diteruskan_list', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function surat_keputusan()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'surat_diajukan/index/';
        $config['total_rows'] = $this->surat_diajukan_model->total_rows_surat_keputusan();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'surat_diajukan.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $surat_diajukan = $this->surat_diajukan_model->index_limit_keputusan($config['per_page'], $start);

        $data = array(
            'surat_diajukan_data' => $surat_diajukan,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_diajukan_diteruskan_list', $data);
		$this->load->view('backend/_template/footer');
    }
    
    public function search_surat_masuk() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'surat_diajukan/search_surat_masuk/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'surat_diajukan/index/';
        }

        $config['total_rows'] = $this->surat_diajukan_model->search_total_rows_surat_masuk($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'surat_diajukan/search_surat_masuk/'.$keyword;
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $surat_diajukan = $this->surat_diajukan_model->search_index_limit_surat_masuk($config['per_page'], $start, $keyword);

        $data = array(
            'surat_diajukan_data' => $surat_diajukan,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_diajukan_diteruskan_list', $data);
		$this->load->view('backend/_template/footer');
    }

    public function read($id) 
    {
        $row = $this->surat_diajukan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_surat_diajukan' => $row->id_surat_diajukan,
		'id_surat' => $row->id_surat,
		'id_member' => $row->id_member,
		'status' => $row->status,
	    );
			$this->load->view('backend/_template/header');
			$this->load->view('backend/_template/sidebar');
            $this->load->view('surat_diajukan_diteruskan_read', $data);
			$this->load->view('backend/_template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_diajukan'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('surat_diajukan/create_action'),
	    'id_surat_diajukan' => set_value('id_surat_diajukan'),
	    'id_surat' => set_value('id_surat'),
	    'id_member' => set_value('id_member'),
	    'status' => set_value('status'),
	);
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_diajukan_diteruskan_form', $data);
		$this->load->view('backend/_template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_surat' => $this->input->post('id_surat',TRUE),
		'id_member' => $this->input->post('id_member',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->surat_diajukan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('surat_diajukan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->surat_diajukan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('surat_diajukan/update_action'),
		'id_surat_diajukan' => set_value('id_surat_diajukan', $row->id_surat_diajukan),
		'id_surat' => set_value('id_surat', $row->id_surat),
		'id_member' => set_value('id_member', $row->id_member),
		'status' => set_value('status', $row->status),
	    );
			$this->load->view('backend/_template/header');
			$this->load->view('backend/_template/sidebar');
            $this->load->view('surat_diajukan_diteruskan_form', $data);
			$this->load->view('backend/_template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_diajukan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_surat_diajukan', TRUE));
        } else {
            $data = array(
		'id_surat' => $this->input->post('id_surat',TRUE),
		'id_member' => $this->input->post('id_member',TRUE),
		'status' => $this->input->post('status',TRUE),
	    );

            $this->surat_diajukan_model->update($this->input->post('id_surat_diajukan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('surat_diajukan'));
        }
    }
    
    public function delete1($id) 
    {
        $row = $this->surat_diajukan_model->get_by_id($id);

        if ($row) {
            $this->surat_diajukan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('surat_diajukan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_diajukan/surat_masuk'));
        }
    }
	
	public function delete2($id) 
    {
        $row = $this->surat_diajukan_model->get_by_id($id);

        if ($row) {
            $this->surat_diajukan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('surat_diajukan/surat_keluar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_diajukan'));
        }
    }
	
	public function delete3($id) 
    {
        $row = $this->surat_diajukan_model->get_by_id($id);

        if ($row) {
            $this->surat_diajukan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('surat_diajukan/surat_keputusan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_diajukan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_surat', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('id_member', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('status', ' ', 'trim|required');

	$this->form_validation->set_rules('id_surat_diajukan', 'id_surat_diajukan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "surat_diajukan_diteruskan.xls";
        $judul = "surat_diajukan_diteruskan";
        $tablehead = 2;
        $tablebody = 3;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        xlsWriteLabel(0, 0, $judul);

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "no");
	xlsWriteLabel($tablehead, $kolomhead++, "id_surat");
	xlsWriteLabel($tablehead, $kolomhead++, "id_member");
	xlsWriteLabel($tablehead, $kolomhead++, "status");

	foreach ($this->surat_diajukan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_surat);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_member);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=surat_diajukan_diteruskan.doc");

        $data = array(
            'surat_diajukan_diteruskan_data' => $this->surat_diajukan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('surat_diajukan_diteruskan_html',$data);
    }

};

/* End of file Surat_diajukan.php */
/* Location: ./application/controllers/Surat_diajukan.php */