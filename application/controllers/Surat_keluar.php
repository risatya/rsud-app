<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Surat_keluar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('surat_keluar_model');
        $this->load->model('surat_diajukan_model');
        $this->load->model('member_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'surat_keluar/index/';
        $config['total_rows'] = $this->surat_keluar_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'surat_keluar.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $surat_keluar = $this->surat_keluar_model->index_limit($config['per_page'], $start);

        $data = array(
            'surat_keluar_data' => $surat_keluar,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_keluar_list', $data);
		$this->load->view('backend/_template/footer');
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'surat_keluar/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'surat_keluar/index/';
        }

        $config['total_rows'] = $this->surat_keluar_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'surat_keluar/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $surat_keluar = $this->surat_keluar_model->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'surat_keluar_data' => $surat_keluar,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_keluar_list', $data);
		$this->load->view('backend/_template/footer');
    }

    public function read($id) 
    {
        $row = $this->surat_keluar_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_surat' => $row->id_surat,
		'indeks' => $row->indeks,
		'kode' => $row->kode,
		'no_surat' => $row->no_surat,
		'perihal' => $row->perihal,
		'tujuan_surat' => $row->tujuan_surat,
		'tgl_keluar' => $row->tgl_keluar,
		'lampiran' => $row->lampiran,
		'informasi_instruksi' => $row->informasi_instruksi,
		'keterangan' => $row->keterangan,
		'dokumen2' => $row->dokumen2,
	    );
			$this->load->view('backend/_template/header');
			$this->load->view('backend/_template/sidebar');
            $this->load->view('surat_keluar_read', $data);
			$this->load->view('backend/_template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_keluar'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('surat_keluar/create_action'),
	    'id_surat' => set_value('id_surat'),
	    'indeks' => set_value('indeks'),
	    'kode' => set_value('kode'),
	    'no_surat' => set_value('no_surat'),
	    'perihal' => set_value('perihal'),
	    'tujuan_surat' => set_value('tujuan_surat'),
	    'tgl_keluar' => set_value('tgl_keluar'),
	    'lampiran' => set_value('lampiran'),
	    'informasi_instruksi' => set_value('informasi_instruksi'),
	    'keterangan' => set_value('keterangan'),
	    'dokumen2' => set_value('dokumen2'),
	);
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_keluar_form', $data);
		$this->load->view('backend/_template/footer');
    }
    
	public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $config['upload_path'] = "./uploads/surat_keluar/";
			$config['allowed_types'] = 'gif|jpg|png|JPEG|zip|rar|pdf|xls|doc|tar|ppt|docx';
			$config['max_size']      = '10240';
			//$config['max_width']     = '1200';
			//$config['max_height']    = '1200';
			$config['file_name'] = url_title($this->input->post('dokumen2'));
			$config['encrypt_name']  = TRUE;
			$this->upload->initialize($config); //meng set config yang sudah di atur
			if( !$this->upload->do_upload('dokumen2')){
				echo $this->upload->display_errors();
			}else{
				$data = array(
					'indeks' => $this->input->post('indeks',TRUE),
					'kode' => $this->input->post('kode',TRUE),
					'no_surat' => $this->input->post('no_surat',TRUE),
					'perihal' => $this->input->post('perihal',TRUE),
					'tujuan_surat' => $this->input->post('tujuan_surat',TRUE),
					'tgl_keluar' => $this->input->post('tgl_keluar',TRUE),
					'lampiran' => $this->input->post('lampiran',TRUE),
					'informasi_instruksi' => $this->input->post('informasi_instruksi',TRUE),
					'keterangan' => $this->input->post('keterangan',TRUE),
					'dokumen2' => $this->upload->file_name,
				);
				$this->surat_keluar_model->insert($data);
				$this->session->set_flashdata('message', 'Create Record Success');
				redirect(site_url('surat_keluar'));
			}
		}
	}
	
	public function diajukan_diteruskan($id){
		/* proses setelah surat masuk dibuat kemudian ada form diajukan / diteruskan kepada bagian atau instalasi tertentu
		proses merupakan checkbox yang akan looping masuk ke table surat_diajukan_diteruskan */
		$member1 = $this->member_model->get_all1();
		$member2 = $this->member_model->get_all2();
		$member3 = $this->member_model->get_all3();
		
		$row = $this->surat_keluar_model->get_by_id($id);
        if ($row) {
        $data = array(
			'member_data1' => $member1,
			'member_data2' => $member2,
			'member_data3' => $member3,
			'button' => 'Create',
            'action' => site_url('surat_masuk/diajukan_diteruskan_create_action'),
			'id_surat_diajukan' => set_value('id_surat_diajukan'),
			'id_surat' => set_value('id_surat'),
			'id_member' => set_value('indeks'),
			'status' => set_value('status'),
			'no_surat' => $row->no_surat,
			'perihal' => $row->perihal,
			'tanggal_keluar' => $row->tgl_keluar,
	    );	
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_keluar_diajukan_form', $data);
		$this->load->view('backend/_template/footer');
		}else{
			$this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_keluar'));
		}
	}
    
	public function diajukan_diteruskan_create_action(){
		$jumlah = count($this->input->post('id_member'));
		for($i=0; $i < $jumlah; $i++) {
		
		$data = array(
			'id_member' => $this->input->post('id_member')[$i],
			'id_surat' => $this->input->post('id_surat',TRUE),
			'status' => $this->input->post('status',TRUE),
		);
		$this->surat_diajukan_model->insert($data);
		}
		$this->session->set_flashdata('message', 'Create Record Success');
		redirect(site_url('surat_diajukan/surat_keluar'));
    }
    
    public function update($id) 
    {
        $row = $this->surat_keluar_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('surat_keluar/update_action'),
				'id_surat' => set_value('id_surat', $row->id_surat),
				'indeks' => set_value('indeks', $row->indeks),
				'kode' => set_value('kode', $row->kode),
				'no_surat' => set_value('no_surat', $row->no_surat),
				'perihal' => set_value('perihal', $row->perihal),
				'tujuan_surat' => set_value('tujuan_surat', $row->tujuan_surat),
				'tgl_keluar' => set_value('tgl_keluar', $row->tgl_keluar),
				'lampiran' => set_value('lampiran', $row->lampiran),
				'informasi_instruksi' => set_value('informasi_instruksi', $row->informasi_instruksi),
				'keterangan' => set_value('keterangan', $row->keterangan),
				'dokumen2' => set_value('dokumen2', $row->dokumen2),
			);
			$this->load->view('backend/_template/header');
			$this->load->view('backend/_template/sidebar');
            $this->load->view('surat_keluar_form', $data);
			$this->load->view('backend/_template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_keluar'));
        }
    }
    
 
	
	public function update_action(){
    $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {  
			
			if(!empty($_FILES['dokumen']['name'])){
				//echo 'gambar tidak kosong<br/>';
				$row = $this->input->post('hidden',TRUE);
				//echo $row;
				$config['upload_path'] = "./uploads/surat_masuk";
				$config['allowed_types'] = 'gif|jpg|png|JPEG|zip|rar|pdf|xls|doc|tar|ppt|docx';
				$config['max_size']      = '10240';
				//$config['max_width']     = '1200';
				//$config['max_height']    = '1200';
				$config['file_name'] = url_title($this->input->post('dokumen'));
				$config['encrypt_name']  = TRUE;
				unlink('./uploads/surat_masuk/'.$row);
				$this->upload->initialize($config); //meng set config yang sudah di atur
				if( !$this->upload->do_upload('dokumen')){
					echo $this->upload->display_errors();
				}else{					
					$data = array(
						'indeks' => $this->input->post('indeks',TRUE),
						'kode' => $this->input->post('kode',TRUE),
						'no_surat' => $this->input->post('no_surat',TRUE),
						'perihal' => $this->input->post('perihal',TRUE),
						'tujuan_surat' => $this->input->post('tujuan_surat',TRUE),
						'tgl_keluar' => $this->input->post('tgl_keluar',TRUE),
						'lampiran' => $this->input->post('lampiran',TRUE),
						'informasi_instruksi' => $this->input->post('informasi_instruksi',TRUE),
						'keterangan' => $this->input->post('keterangan',TRUE),
						'dokumen2' => $this->upload->file_name,
					);
				$this->surat_keluar_model->update($this->input->post('id_surat', TRUE), $data);
				$this->session->set_flashdata('message', 'Update Record Success');
				redirect(site_url('surat_masuk'));
				} 
			}else{
				//echo 'gambar kosong';
				$data = array(
					'indeks' => $this->input->post('indeks',TRUE),
					'kode' => $this->input->post('kode',TRUE),
					'no_surat' => $this->input->post('no_surat',TRUE),
					'perihal' => $this->input->post('perihal',TRUE),
					'tujuan_surat' => $this->input->post('tujuan_surat',TRUE),
					'tgl_keluar' => $this->input->post('tgl_keluar',TRUE),
					'lampiran' => $this->input->post('lampiran',TRUE),
					'informasi_instruksi' => $this->input->post('informasi_instruksi',TRUE),
					'keterangan' => $this->input->post('keterangan',TRUE),
					'dokumen2' => $this->input->post('hidden',TRUE),
				);

            $this->surat_keluar_model->update($this->input->post('id_surat', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('surat_keluar'));
			}
		}
    }
    	
	public function delete($id) 
    {
        $row = $this->surat_keluar_model->get_by_id($id);
        if ($row) {
			 $data = array(
				'dokumen' => $row->dokumen2,
			);
			$dokumen = $data['dokumen'];
			//echo $gambar;
			unlink('./uploads/surat_keluar/'.$dokumen);
            $this->surat_keluar_model->delete($id);
            $this->surat_diajukan_model->delete_all_surat_keluar($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('surat_keluar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_keluar'));
        } 
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('indeks', ' ', 'trim|required');
	$this->form_validation->set_rules('kode', ' ', 'trim|required');
	$this->form_validation->set_rules('no_surat', ' ', 'trim|required');
	$this->form_validation->set_rules('perihal', ' ', 'trim|required');
	$this->form_validation->set_rules('tujuan_surat', ' ', 'trim|required');
	$this->form_validation->set_rules('tgl_keluar', ' ', 'trim|required');
	$this->form_validation->set_rules('lampiran', ' ', 'trim|required');
	$this->form_validation->set_rules('informasi_instruksi', ' ', 'trim|required');
	$this->form_validation->set_rules('keterangan', ' ', 'trim|required');

	$this->form_validation->set_rules('id_surat', 'id_surat', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "surat_keluar.xls";
        $judul = "surat_keluar";
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
	xlsWriteLabel($tablehead, $kolomhead++, "indeks");
	xlsWriteLabel($tablehead, $kolomhead++, "kode");
	xlsWriteLabel($tablehead, $kolomhead++, "no_surat");
	xlsWriteLabel($tablehead, $kolomhead++, "perihal");
	xlsWriteLabel($tablehead, $kolomhead++, "tujuan_surat");
	xlsWriteLabel($tablehead, $kolomhead++, "tgl_keluar");
	xlsWriteLabel($tablehead, $kolomhead++, "lampiran");
	xlsWriteLabel($tablehead, $kolomhead++, "diajukan_teruskan");
	xlsWriteLabel($tablehead, $kolomhead++, "informasi_instruksi");
	xlsWriteLabel($tablehead, $kolomhead++, "keterangan");
	xlsWriteLabel($tablehead, $kolomhead++, "dokumen2");

	foreach ($this->surat_keluar_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->indeks);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kode);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_surat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->perihal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tujuan_surat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_keluar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->lampiran);
	    xlsWriteLabel($tablebody, $kolombody++, $data->diajukan_teruskan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->informasi_instruksi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->keterangan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->dokumen2);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=surat_keluar.doc");

        $data = array(
            'surat_keluar_data' => $this->surat_keluar_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('surat_keluar_html',$data);
    }

};

/* End of file Surat_keluar.php */
/* Location: ./application/controllers/Surat_keluar.php */