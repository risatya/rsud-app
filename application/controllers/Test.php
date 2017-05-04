<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('test_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'test/index/';
        $config['total_rows'] = $this->test_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'test.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $test = $this->test_model->index_limit($config['per_page'], $start);

        $data = array(
            'test_data' => $test,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->load->view('test_list', $data);
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'test/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'test/index/';
        }

        $config['total_rows'] = $this->test_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'test/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $test = $this->test_model->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'test_data' => $test,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('test_list', $data);
    }

    public function read($id) 
    {
        $row = $this->test_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama' => $row->nama,
	    );
            $this->load->view('test_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('test'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('test/create_action'),
	    'id' => set_value('id'),
	    'nama' => set_value('nama'),
	);
        $this->load->view('test_form', $data);
    }
    
	public function create_action() 
    {
        //$this->_rules();
			$total_checkbox_num = $this->input->post('total_rows', TRUE);
			for($i = 1; $i <= $total_checkbox_num; $i++) {
				if(!empty($this->input->post('nama'.$i, TRUE))) {
					$data = array(
						'nama' => $this->input->post('nama'.$i,TRUE),
						'tanggal' => $this->input->post('tanggal'.$i,TRUE),
					);
					// echo '<pre>';
					// print_r($data);
					// echo '</pre>';
					$this->test_model->insert($data);
				}
			}
			// exit;
            $this->session->set_flashdata('message', '<div class="alert alert-info">Data pasien dan data IAK 1 Telah berhasil dimasukkan, data dapat dilihat di laporan</div>');
            redirect(site_url('test'));
    }
    
    
    public function update($id) 
    {
        $row = $this->test_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('test/update_action'),
		'id' => set_value('id', $row->id),
		'nama' => set_value('nama', $row->nama),
	    );
            $this->load->view('test_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('test'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
	    );

            $this->test_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('test'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->test_model->get_by_id($id);

        if ($row) {
            $this->test_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('test'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('test'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', ' ', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "test.xls";
        $judul = "test";
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
	xlsWriteLabel($tablehead, $kolomhead++, "nama");

	foreach ($this->test_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=test.doc");

        $data = array(
            'test_data' => $this->test_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('test_html',$data);
    }

};

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */