<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Iskp_1 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('iskp_1_model');
		$this->load->model('data_pasien_iskp1_model');
        $this->load->model('m_server2');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
        $this->load->view('iskp_1_front');
		$this->load->view('backend/_template/footer');
    }
	
	public function laporan()
    {
		$this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
        $this->load->view('iskp_1_front_laporan');
		$this->load->view('backend/_template/footer');
    }
    
    public function search1() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'iskp_1/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'iskp_1/index/';
        }

        $config['total_rows'] = $this->m_server2->search_total_rows1($keyword);
        $config['per_page'] = 1000;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'iskp_1/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $iskp_1 = $this->m_server2->search_index_limit1($config['per_page'], $start, $keyword);

        $data = array(
            'iskp_1_data' => $iskp_1,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
        $this->load->view('iskp_1_list', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function search2() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $bulan = $this->uri->segment(3, $this->input->post('bulan', FALSE));
        $tahun = $this->uri->segment(3, $this->input->post('tahun', FALSE));
        $bangsal = $this->uri->segment(3, $this->input->post('bangsal', FALSE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'iskp_1/search2/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'iskp_1/index/';
        }

        $config['total_rows'] = $this->m_server2->search_total_rows2($bulan, $tahun, $bangsal);
        $config['per_page'] = 1000;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'iskp_1/search2/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $start1 = 0;
        $start2 = 0;
        $start3 = 0;
        $start4 = 0;
        $start5 = 0;
        $start6 = 0;
        $start7 = 0;
        $start8 = 0;
        $start9 = 0;
        $start10 = 0;
        $start11 = 0;
        $start12 = 0;
        $start13 = 0;
        $start14 = 0;
        $iskp_1 = $this->m_server2->search_index_limit2($config['per_page'], $start, $bulan, $tahun, $bangsal);

        $data = array(
            'iskp_1_data' => $iskp_1,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'start1' => $start1,
            'start2' => $start2,
            'start3' => $start3,
            'start4' => $start4,
            'start5' => $start5,
            'start6' => $start6,
            'start7' => $start7,
            'start8' => $start8,
            'start9' => $start9,
            'start10' => $start10,
            'start11' => $start11,
            'start12' => $start12,
            'start13' => $start13,
            'start14' => $start14,
        );
		$this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
        $this->load->view('iskp_1_list', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function search_laporan() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $bulan = $this->uri->segment(3, $this->input->post('bulan', FALSE));
        $tahun = $this->uri->segment(3, $this->input->post('tahun', FALSE));
        $bangsal = $this->uri->segment(3, $this->input->post('bangsal', FALSE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'iskp_1/search_laporan/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'iskp_1/index/';
        }

        $config['total_rows'] = $this->m_server2->search_total_rows2($bulan, $tahun, $bangsal);
        $config['per_page'] = 1000;
        $config['uri_segment'] = 4;
        $config['suffix'] = '';
        $config['first_url'] = base_url() . 'iskp_1/search_laporan/'.$keyword;
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
       
        $iskp_1 = $this->iskp_1_model->search_index_limit($config['per_page'], $start, $bulan, $tahun, $bangsal);

        $data = array(
            'iskp_1_data' => $iskp_1,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
        $this->load->view('iskp_1_list_laporan', $data);
		$this->load->view('backend/_template/footer');
    }

    public function read($id) 
    {
        $row = $this->iskp_1_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_iskp1' => $row->id_iskp1,
		'id_pasien' => $row->id_pasien,
		'gelang_identitas_masuk_bangsal' => $row->gelang_identitas_masuk_bangsal,
		'keterangan' => $row->keterangan,
	    );
            $this->load->view('iskp_1_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('iskp_1'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('iskp_1/create_action'),
	    'id_iskp1' => set_value('id_iskp1'),
	    'id_pasien' => set_value('id_pasien'),
	    'gelang_identitas_masuk_bangsal' => set_value('gelang_identitas_masuk_bangsal'),
	    'keterangan' => set_value('keterangan'),
	);
        $this->load->view('iskp_1_form', $data);
    }
    
    public function create_action() 
    {
		$total_checkbox_num = $this->input->post('total_rows', TRUE);
		for($i = 1; $i <= $total_checkbox_num; $i++) {
			if(!empty($this->input->post('gelang_identitas_masuk_bangsal'.$i, TRUE))) {
				$data = array(
					'no_rm' => $this->input->post('no_rm'.$i, TRUE),
					'tgl_masuk' => $this->input->post('jenis_kelamin'.$i,TRUE),
					'tgl_masuk' => $this->input->post('tgl_masuk'.$i,TRUE),
					'tgl_lahir' => $this->input->post('tgl_lahir'.$i,TRUE),
					'nama' => $this->input->post('nama'.$i,TRUE),
					'bangsal' => $this->input->post('bangsal'.$i,TRUE),
					'dokter' => $this->input->post('dokter'.$i,TRUE),
					'bulan' => $this->input->post('bulan'.$i,TRUE),
					'tahun' => $this->input->post('tahun'.$i,TRUE),
				);
				// echo '<pre>';
				// print_r($data);
				// echo '</pre>';
				$this->data_pasien_iskp1_model->insert($data);
			}
		}

		for($i = 1; $i <= $total_checkbox_num; $i++) {
			if(!empty($this->input->post('gelang_identitas_masuk_bangsal'.$i, TRUE))) {
				$data2 = array(
				'no_rm' => $this->input->post('no_rm'.$i, TRUE),
				'gelang_identitas_masuk_bangsal' => $this->input->post('gelang_identitas_masuk_bangsal'.$i,TRUE),
				'keterangan' => $this->input->post('keterangan'.$i,TRUE),
			);
			// echo '<pre>';
			// print_r($data2);
			// echo '</pre>';
			$this->iskp_1_model->insert($data2);
			}
		}
		// exit;
		$this->session->set_flashdata('message', '<div class="alert alert-info">Data pasien dan data ISKP 1 Telah berhasil dimasukkan, data dapat dilihat di laporan</div>');
		redirect(site_url('iskp_1'));
        
    }
    
    public function update($id) 
    {
        $row = $this->iskp_1_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('iskp_1/update_action'),
		'id_iskp1' => set_value('id_iskp1', $row->id_iskp1),
		'no_rm' => set_value('no_rm', $row->no_rm),
		'gelang_identitas_masuk_bangsal' => set_value('gelang_identitas_masuk_bangsal', $row->gelang_identitas_masuk_bangsal),
		'keterangan' => set_value('keterangan', $row->keterangan),
	    );
			$this->load->view('backend/_template/header');
			$this->load->view('backend/_template/sidebar');	
            $this->load->view('iskp_1_form', $data);
			$this->load->view('backend/_template/footer');	
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('iskp_1'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_iskp1', TRUE));
        } else {
            $data = array(
		'no_rm' => $this->input->post('no_rm',TRUE),
		'gelang_identitas_masuk_bangsal' => $this->input->post('gelang_identitas_masuk_bangsal',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
	    );

            $this->iskp_1_model->update($this->input->post('id_iskp1', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('iskp_1/laporan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->iskp_1_model->get_by_id($id);

        if ($row) {
            $this->iskp_1_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('iskp_1'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('iskp_1'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('no_rm', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('gelang_identitas_masuk_bangsal', ' ', 'trim|required');
	$this->form_validation->set_rules('keterangan', ' ', 'trim|required');

	$this->form_validation->set_rules('id_iskp1', 'id_iskp1', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
		$bulan = $this->uri->segment(3); $tahun = $this->uri->segment(4); $bangsal = $this->uri->segment(5);
        $this->load->helper('exportexcel');
        $namaFile = "iskp_1.xls";
        $judul = "iskp_1";
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
	xlsWriteLabel($tablehead, $kolomhead++, "No RM");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Pasien");
	xlsWriteLabel($tablehead, $kolomhead++, "Gelang Identitas Masuk Bangsal");
	xlsWriteLabel($tablehead, $kolomhead++, "keterangan");

	foreach ($this->iskp_1_model->get_specified($bulan, $tahun, $bangsal) as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_rm);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->gelang_identitas_masuk_bangsal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->keterangan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=iskp_1.doc");
		$bulan = $this->uri->segment(3); 
		$tahun = $this->uri->segment(4); 
		$bangsal = $this->uri->segment(5);
        $data = array(
            'iskp_1_data' => $this->iskp_1_model->get_specified($bulan, $tahun, $bangsal),
            'start' => 0
        );
        
        $this->load->view('iskp_1_html',$data);
    }

};

/* End of file Iskp_1.php */
/* Location: ./application/controllers/Iskp_1.php */