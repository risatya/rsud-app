<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Iak_1 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('iak_1_model');
        $this->load->model('iskp_1_model');
        $this->load->model('iskp_2_model');
        $this->load->model('iskp_6_model');
        $this->load->model('data_pasien_model');
        $this->load->model('data_pasien_iskp1_model');
        $this->load->model('data_pasien_iskp2_model');
        $this->load->model('data_pasien_iskp6_model');
        $this->load->model('m_server2');
        $this->load->library('form_validation');
        $this->load->helper('cek');
    }

    public function index()
    {
		$this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
        $this->load->view('iak_1_front');
		$this->load->view('backend/_template/footer');
    }
	
	public function laporan()
    {
		$this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
        $this->load->view('iak_1_front_laporan');
		$this->load->view('backend/_template/footer');
    }
    
    public function search1() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'iak_1/search1/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'iak_1/index/';
        }

        $config['total_rows'] = $this->m_server2->search_total_rows1($keyword);
        $config['per_page'] = 1000;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'iak_1/search1/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $iak_1 = $this->m_server2->search_index_limit1($config['per_page'], $start, $keyword);

        $data = array(
            'iak_1_data' => $iak_1,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
        $this->load->view('iak_1_list', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function search2() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $bulan = $this->uri->segment(3, $this->input->post('bulan', FALSE));
        $tahun = $this->uri->segment(3, $this->input->post('tahun', FALSE));
        $bangsal = $this->uri->segment(3, $this->input->post('bangsal', FALSE));
        $this->load->library('pagination');
        $this->load->helper('cek');
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'iak_1/search2/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'iak_1/index/';
        }

        $config['total_rows'] = $this->m_server2->search_total_rows2($bulan, $tahun, $bangsal);
        $config['per_page'] = 1000;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'iak_1/search2/'.$keyword.'.html';
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
		$start15 = 0;
		$start16 = 0;
		$start17 = 0;
		$start18 = 0;
		$start19 = 0;
		$start20 = 0;
		$start21 = 0;
		$start22 = 0;
		$start23 = 0;
		$start24 = 0;
		$start25 = 0;
		$start26 = 0;
		$start27 = 0;
		$start28 = 0;
		$start29 = 0;
		$start30 = 0;
		$start31 = 0;
		$start32 = 0;
		$start33 = 0;
		$start34 = 0;
		$start35 = 0;
		$start36 = 0;
		$start37 = 0;
		$start38 = 0;
		$start39 = 0;
		$start40 = 0;
		$start41 = 0;
		$start42 = 0;
		$start43 = 0;
		$start44 = 0;
		$start45 = 0;
		$start46 = 0;
		$start47 = 0;
		$start48 = 0;
		$start49 = 0;
		$start50 = 0;
		$start51 = 0;
		$start52 = 0;
		$start53 = 0;
		$start54 = 0;
		$start55 = 0;
		$start56 = 0;
		$start57 = 0;
		$start58 = 0;
		$start59 = 0;
		$start60 = 0;
        $data = $this->m_server2->search_index_limit2($config['per_page'], $start, $bulan, $tahun, $bangsal);
		
        $data = array(
            'list' => $data,
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
			'start15' => $start15,
			'start16' => $start16,
			'start17' => $start17,
			'start18' => $start18,
			'start19' => $start19,
			'start20' => $start20,
			'start21' => $start21,
			'start22' => $start22,
			'start23' => $start23,
			'start24' => $start24,
			'start25' => $start25,
			'start26' => $start26,
			'start27' => $start27,
			'start28' => $start28,
			'start29' => $start29,
			'start30' => $start30,
			'start31' => $start31,
			'start32' => $start32,
			'start33' => $start33,
			'start34' => $start34,
			'start35' => $start35,
			'start36' => $start36,
			'start37' => $start37,
			'start38' => $start38,
			'start39' => $start39,
			'start40' => $start40,
			'start41' => $start41,
			'start42' => $start42,
			'start43' => $start43,
			'start44' => $start44,
			'start45' => $start45,
			'start46' => $start46,
			'start47' => $start47,
			'start48' => $start48,
			'start49' => $start49,
			'start50' => $start50,
			'start51' => $start51,
			'start52' => $start52,
			'start53' => $start53,
			'start54' => $start54,
			'start55' => $start55,
			'start56' => $start56,
			'start57' => $start57,
			'start58' => $start58,
			'start59' => $start59,
			'start60' => $start60,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'bangsal' => $bangsal,
        );
		$this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
        $this->load->view('iak_1_list', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function search_laporan() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $bulan = $this->uri->segment(3, $this->input->post('bulan', FALSE));
        $tahun = $this->uri->segment(3, $this->input->post('tahun', FALSE));
        $bangsal = $this->uri->segment(3, $this->input->post('bangsal', FALSE));
        $config = 1000;
        $start = 0;
        $start_a = 0;
        $start_b = 0;
        $start_c = 0;
        $start_d = 0;
        $iak_1 = $this->iak_1_model->search_index_limit($config, $start, $bulan, $tahun, $bangsal);
		$iskp_1 = $this->iskp_1_model->search_index_limit($config, $start_b, $bulan, $tahun, $bangsal);
        $iskp_2 = $this->iskp_2_model->search_index_limit($config, $start_c, $bulan, $tahun, $bangsal);
        $iskp_6 = $this->iskp_6_model->search_index_limit($config, $start_d, $bulan, $tahun, $bangsal);

        $data = array(
            'iak_1_data' => $iak_1,
			'iskp_1_data' => $iskp_1,
            'iskp_2_data' => $iskp_2,
            'iskp_6_data' => $iskp_6,
            'start' => $start,
			'start_a' => $start_a,
            'start_b' => $start_b,
            'start_c' => $start_c,
            'start_d' => $start_d,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'bangsal' => $bangsal,
        );
		$this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
        $this->load->view('iak_1_list_laporan', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function search_laporan1() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $bulan = $this->uri->segment(3);
        $tahun = $this->uri->segment(4);
        $bangsal = $this->uri->segment(5);
        $config = 1000;
        $start = 0;
        $start_a = 0;
        $start_b = 0;
        $start_c = 0;
        $start_d = 0;
        $iak_1 = $this->iak_1_model->search_index_limit($config, $start_a, $bulan, $tahun, $bangsal);
        $iskp_1 = $this->iskp_1_model->search_index_limit($config, $start_b, $bulan, $tahun, $bangsal);
        $iskp_2 = $this->iskp_2_model->search_index_limit($config, $start_c, $bulan, $tahun, $bangsal);
        $iskp_6 = $this->iskp_6_model->search_index_limit($config, $start_d, $bulan, $tahun, $bangsal);
        $data = array(
            'iak_1_data' => $iak_1,
            'iskp_1_data' => $iskp_1,
            'iskp_2_data' => $iskp_2,
            'iskp_6_data' => $iskp_6,
            'start' => $start,
            'start_a' => $start_a,
            'start_b' => $start_b,
            'start_c' => $start_c,
            'start_d' => $start_d,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'bangsal' => $bangsal,
        );
		$this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
        $this->load->view('iak_1_list_laporan', $data);
		$this->load->view('backend/_template/footer');
    }

    public function cek(){
		if(cek(1,2)==NULL){echo 'tidak ada data';}else{echo 'ada data';}
	} 
    public function read($id) 
    {
        $row = $this->iak_1_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_iak1' => $row->id_iak1,
		'no_rm' => $row->no_rm,
		'jam_asesmen' => $row->jam_asesmen,
		'asesmen_24_jam' => $row->asesmen_24_jam,
		'dpjp' => $row->dpjp,
		'keterangan' => $row->keterangan,
	    );
            $this->load->view('iak_1_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('iak_1'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('iak_1/create_action'),
			'id_iak1' => set_value('id_iak1'),
			'no_rm' => set_value('no_rm'),
			'jam_asesmen' => set_value('jam_asesmen'),
			'asesmen_24_jam' => set_value('asesmen_24_jam'),
			'dpjp' => set_value('dpjp'),
			'keterangan' => set_value('keterangan'),
		);
        $this->load->view('iak_1_form', $data);
    }
    
    public function create_action() 
    {
        //$this->_rules();  		
		$total_checkbox_num = $this->input->post('total_rows', TRUE);
		for($i = 1; $i <= $total_checkbox_num; $i++) {
			if(!empty($this->input->post('asesmen_24_jam'.$i, TRUE))) {
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
				echo '<pre>';
				print_r($data);
				echo '</pre>';
				// $this->data_pasien_model->insert($data);
			}
		}

		for($i = 1; $i <= $total_checkbox_num; $i++) {
			if(!empty($this->input->post('asesmen_24_jam'.$i, TRUE))) {
				$data2 = array(
					'no_rm' => $this->input->post('no_rm'.$i, TRUE),
					'jam_asesmen' => $this->input->post('jam_asesmen'.$i,TRUE),
					'asesmen_24_jam' => $this->input->post('asesmen_24_jam'.$i,TRUE),
					'dpjp' => $this->input->post('dpjp'.$i,TRUE),
					'keterangan' => $this->input->post('keterangan'.$i,TRUE),
				);
				echo '<pre>';
				print_r($data2);
				echo '</pre>';
				exit;
				// $this->iak_1_model->insert($data2);
			}
		}
		for($i = 1; $i <= $total_checkbox_num; $i++) {
			if(!empty($this->input->post('gelang_identitas_masuk_bangsal'.$i, TRUE))) {
				$data3 = array(
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
				echo '<pre>';
				print_r($data3);
				echo '</pre>';
				// $this->data_pasien_iskp1_model->insert($data3);
			}
		}

		for($i = 1; $i <= $total_checkbox_num; $i++) {
			if(!empty($this->input->post('gelang_identitas_masuk_bangsal'.$i, TRUE))) {
				$data4 = array(
				'no_rm' => $this->input->post('no_rm'.$i, TRUE),
				'gelang_identitas_masuk_bangsal' => $this->input->post('gelang_identitas_masuk_bangsal'.$i,TRUE),
				'keterangan' => $this->input->post('keterangan1_'.$i,TRUE),
			);
			echo '<pre>';
			print_r($data4);
			echo '</pre>';
			// $this->iskp_1_model->insert($data4);
			}
		}
		
		for($i = 1; $i <= $total_checkbox_num; $i++) {
		if(!empty($this->input->post('tanggal_jam_lapor_dpjp'.$i, TRUE))) {
			$data5 = array(
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
			echo '<pre>';
			print_r($data5);
			echo '</pre>';
			// $this->data_pasien_iskp2_model->insert($data5);
			}
		}

		for($i = 1; $i <= $total_checkbox_num; $i++) {
			if(!empty($this->input->post('tanggal_jam_lapor_dpjp'.$i, TRUE))) {
				$data6 = array(
				'no_rm' => $this->input->post('no_rm'.$i, TRUE),
				'tanggal_jam_lapor_dpjp' => $this->input->post('tanggal_jam_lapor_dpjp'.$i,TRUE),
				'tanggal_jam_ttd_dpjp' => $this->input->post('tanggal_jam_ttd_dpjp'.$i,TRUE),
				'verbal_order_24_jam' => $this->input->post('verbal_order_24_jam'.$i,TRUE),
				'keterangan' => $this->input->post('keterangan'.$i,TRUE),
			);
			echo '<pre>';
			print_r($data6);
			echo '</pre>';
			// $this->iskp_2_model->insert($data6);
			}
		}
		
		for($i = 1; $i <= $total_checkbox_num; $i++) {
			if(!empty($this->input->post('asesmen_resiko_jatuh'.$i, TRUE))) {
				$data7 = array(
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
				echo '<pre>';
				print_r($data7);
				echo '</pre>';
				// $this->data_pasien_iskp6_model->insert($data7);
			}
		}

		for($i = 1; $i <= $total_checkbox_num; $i++) {
			if(!empty($this->input->post('asesmen_resiko_jatuh'.$i, TRUE))) {
				$data8 = array(
				'no_rm' => $this->input->post('no_rm'.$i, TRUE),
				'asesmen_resiko_jatuh' => $this->input->post('asesmen_resiko_jatuh'.$i,TRUE),
				'keterangan' => $this->input->post('keterangan'.$i,TRUE),
			);
				echo '<pre>';
				print_r($data8);
				echo '</pre>';
				// $this->iskp_6_model->insert($data8);
			}
		}
		exit;
		// $this->session->set_flashdata('message', '<div class="alert alert-info">Data berhasil dimasukkan, data dapat dilihat di laporan</div>');
		// redirect(site_url('iak_1/search_laporan1/'.$this->input->post('bulan').'/'.$this->input->post('tahun').'/'.$this->input->post('bangsal').''));
        
    }
    
    public function update($id) 
    {
        $row = $this->iak_1_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('iak_1/update_action'),
				'id_iak1' => set_value('id_iak1', $row->id_iak1),
				'no_rm' => set_value('no_rm', $row->no_rm),
				'jam_asesmen' => set_value('jam_asesmen', $row->jam_asesmen),
				'asesmen_24_jam' => set_value('asesmen_24_jam', $row->asesmen_24_jam),
				'dpjp' => set_value('dpjp', $row->dpjp),
				'keterangan' => set_value('keterangan', $row->keterangan),
				);
			$this->load->view('backend/_template/header');
			$this->load->view('backend/_template/sidebar');	
            $this->load->view('iak_1_form', $data);
			$this->load->view('backend/_template/footer');	
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('iak_1'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_iak1', TRUE));
        } else {
            $data = array(
				'no_rm' => $this->input->post('no_rm',TRUE),
				'jam_asesmen' => $this->input->post('jam_asesmen',TRUE),
				'asesmen_24_jam' => $this->input->post('asesmen_24_jam',TRUE),
				'dpjp' => $this->input->post('dpjp',TRUE),
				'keterangan' => $this->input->post('keterangan',TRUE),
			);

            $this->iak_1_model->update($this->input->post('id_iak1', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('iak_1/laporan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->iak_1_model->get_by_id($id);

        if ($row) {
            $this->iak_1_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('iak_1'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('iak_1'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('no_rm', ' ', 'trim|required|numeric');
	$this->form_validation->set_rules('jam_asesmen', ' ', 'trim|required');
	$this->form_validation->set_rules('asesmen_24_jam', ' ', 'trim|required');
	$this->form_validation->set_rules('dpjp', ' ', 'trim|required');
	$this->form_validation->set_rules('keterangan', ' ', 'trim|required');

	$this->form_validation->set_rules('id_iak1', 'id_iak1', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
		$bulan = $this->uri->segment(3); $tahun = $this->uri->segment(4); $bangsal = $this->uri->segment(5);
        $this->load->helper('exportexcel');
        $namaFile = "iak_1.xls";
        $judul = "iak_1";
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
	xlsWriteLabel($tablehead, $kolomhead++, "no_rm");
	xlsWriteLabel($tablehead, $kolomhead++, "jam_asesmen");
	xlsWriteLabel($tablehead, $kolomhead++, "asesmen_24_jam");
	xlsWriteLabel($tablehead, $kolomhead++, "dpjp");
	xlsWriteLabel($tablehead, $kolomhead++, "keterangan");

	foreach ($this->iak_1_model->get_specified($bulan, $tahun, $bangsal) as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_rm);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jam_asesmen);
	    xlsWriteLabel($tablebody, $kolombody++, $data->asesmen_24_jam);
	    xlsWriteLabel($tablebody, $kolombody++, $data->dpjp);
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
        header("Content-Disposition: attachment;Filename=iak_1.doc");
		$bulan = $this->uri->segment(3); 
		$tahun = $this->uri->segment(4); 
		$bangsal = $this->uri->segment(5);
        $data = array(
            'iak_1_data' => $this->iak_1_model->get_specified($bulan, $tahun, $bangsal),
            'start' => 0
        );
        
        $this->load->view('iak_1_html',$data);
    }

};

/* End of file Iak_1.php */
/* Location: ./application/controllers/Iak_1.php */