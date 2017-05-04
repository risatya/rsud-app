<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Surat_masuk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('surat_masuk_model');
        $this->load->model('surat_diajukan_model');
        $this->load->model('member_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'surat_masuk/index/';
        $config['total_rows'] = $this->surat_masuk_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'surat_masuk.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $surat_masuk = $this->surat_masuk_model->index_limit($config['per_page'], $start);

        $data = array(
            'surat_masuk_data' => $surat_masuk,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_masuk_list', $data);
		$this->load->view('backend/_template/footer');
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'surat_masuk/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'surat_masuk/index/';
        }

        $config['total_rows'] = $this->surat_masuk_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'surat_masuk/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $surat_masuk = $this->surat_masuk_model->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'surat_masuk_data' => $surat_masuk,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_masuk_list', $data);
		$this->load->view('backend/_template/footer');
    }

    public function read($id) 
    {
        $row = $this->surat_masuk_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_surat' => $row->id_surat,
		'indeks' => $row->indeks,
		'kode' => $row->kode,
		'no_urut' => $row->no_urut,
		'tgl_penyelesaian' => $row->tgl_penyelesaian,
		'perihal' => $row->perihal,
		'asal_surat' => $row->asal_surat,
		'tgl_masuk' => $row->tgl_masuk,
		'no_surat' => $row->no_surat,
		'lampiran' => $row->lampiran,
		'informasi_instruksi' => $row->informasi_instruksi,
		'keterangan' => $row->keterangan,
		'dokumen' => $row->dokumen,
	    );
			$this->load->view('backend/_template/header');
			$this->load->view('backend/_template/sidebar');
            $this->load->view('surat_masuk_read', $data);
			$this->load->view('backend/_template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_masuk'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('surat_masuk/create_action'),
	    'id_surat' => set_value('id_surat'),
	    'indeks' => set_value('indeks'),
	    'kode' => set_value('kode'),
	    'no_urut' => set_value('no_urut'),
	    'tgl_penyelesaian' => set_value('tgl_penyelesaian'),
	    'perihal' => set_value('perihal'),
	    'asal_surat' => set_value('asal_surat'),
	    'tgl_masuk' => set_value('tgl_masuk'),
	    'no_surat' => set_value('no_surat'),
	    'lampiran' => set_value('lampiran'),
	    'informasi_instruksi' => set_value('informasi_instruksi'),
	    'keterangan' => set_value('keterangan'),
	    'dokumen' => set_value('dokumen'),
	);
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_masuk_form', $data);
		$this->load->view('backend/_template/footer');
    }
    	
	public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $config['upload_path'] = "./uploads/surat_masuk/";
			$config['allowed_types'] = 'gif|jpg|png|JPEG|zip|rar|pdf|xls|doc|tar|ppt|docx';
			$config['max_size']      = '10240';
			//$config['max_width']     = '1200';
			//$config['max_height']    = '1200';
			$config['file_name'] = url_title($this->input->post('dokumen'));
			$config['encrypt_name']  = TRUE;
			$this->upload->initialize($config); //meng set config yang sudah di atur
			if( !$this->upload->do_upload('dokumen')){
				echo $this->upload->display_errors();
			}else{
				$data = array(
					'indeks' => $this->input->post('indeks',TRUE),
					'kode' => $this->input->post('kode',TRUE),
					'no_urut' => $this->input->post('no_urut',TRUE),
					'tgl_penyelesaian' => $this->input->post('tgl_penyelesaian',TRUE),
					'perihal' => $this->input->post('perihal',TRUE),
					'asal_surat' => $this->input->post('asal_surat',TRUE),
					'tgl_masuk' => $this->input->post('tgl_masuk',TRUE),
					'no_surat' => $this->input->post('no_surat',TRUE),
					'lampiran' => $this->input->post('lampiran',TRUE),
					'informasi_instruksi' => $this->input->post('informasi_instruksi',TRUE),
					'keterangan' => $this->input->post('keterangan',TRUE),
					'dokumen' => $this->upload->file_name,
				);
				$this->surat_masuk_model->insert($data);
				$this->session->set_flashdata('message', 'Create Record Success');
				redirect(site_url('surat_masuk'));
			}
		}
	}
	
	public function diajukan_diteruskan($id){
		/* proses setelah surat masuk dibuat kemudian ada form diajukan / diteruskan kepada bagian atau instalasi tertentu
		proses merupakan checkbox yang akan looping masuk ke table surat_diajukan_diteruskan */
		$member1 = $this->member_model->get_all1();
		$member2 = $this->member_model->get_all2();
		$member3 = $this->member_model->get_all3();
		
		$row = $this->surat_masuk_model->get_by_id($id);
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
			'indeks' => $row->indeks,
			'kode' => $row->kode,
			'perihal' => $row->perihal,
			'dokumen' => $row->dokumen,
	    );	
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_masuk_diajukan_form', $data);
		$this->load->view('backend/_template/footer');
		}else{
			$this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_masuk'));
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
        $row = $this->surat_masuk_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('surat_masuk/update_action'),
		'id_surat' => set_value('id_surat', $row->id_surat),
		'indeks' => set_value('indeks', $row->indeks),
		'kode' => set_value('kode', $row->kode),
		'no_urut' => set_value('no_urut', $row->no_urut),
		'tgl_penyelesaian' => set_value('tgl_penyelesaian', $row->tgl_penyelesaian),
		'perihal' => set_value('perihal', $row->perihal),
		'asal_surat' => set_value('asal_surat', $row->asal_surat),
		'tgl_masuk' => set_value('tgl_masuk', $row->tgl_masuk),
		'no_surat' => set_value('no_surat', $row->no_surat),
		'lampiran' => set_value('lampiran', $row->lampiran),
		'informasi_instruksi' => set_value('informasi_instruksi', $row->informasi_instruksi),
		'keterangan' => set_value('keterangan', $row->keterangan),
		'dokumen' => set_value('dokumen', $row->dokumen),
	    );
			$this->load->view('backend/_template/header');
			$this->load->view('backend/_template/sidebar');
            $this->load->view('surat_masuk_form', $data);
			$this->load->view('backend/_template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_masuk'));
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
						'no_urut' => $this->input->post('no_urut',TRUE),
						'tgl_penyelesaian' => $this->input->post('tgl_penyelesaian',TRUE),
						'perihal' => $this->input->post('perihal',TRUE),
						'asal_surat' => $this->input->post('asal_surat',TRUE),
						'tgl_masuk' => $this->input->post('tgl_masuk',TRUE),
						'no_surat' => $this->input->post('no_surat',TRUE),
						'lampiran' => $this->input->post('lampiran',TRUE),
						'informasi_instruksi' => $this->input->post('informasi_instruksi',TRUE),
						'keterangan' => $this->input->post('keterangan',TRUE),
						'dokumen' => $this->upload->file_name,
					);
				$this->surat_masuk_model->update($this->input->post('id_surat', TRUE), $data);
				$this->session->set_flashdata('message', 'Update Record Success');
				redirect(site_url('surat_masuk'));
				} 
			}else{
				//echo 'gambar kosong';
				$data = array(
					'indeks' => $this->input->post('indeks',TRUE),
					'kode' => $this->input->post('kode',TRUE),
					'no_urut' => $this->input->post('no_urut',TRUE),
					'tgl_penyelesaian' => $this->input->post('tgl_penyelesaian',TRUE),
					'perihal' => $this->input->post('perihal',TRUE),
					'asal_surat' => $this->input->post('asal_surat',TRUE),
					'tgl_masuk' => $this->input->post('tgl_masuk',TRUE),
					'no_surat' => $this->input->post('no_surat',TRUE),
					'lampiran' => $this->input->post('lampiran',TRUE),
					'informasi_instruksi' => $this->input->post('informasi_instruksi',TRUE),
					'keterangan' => $this->input->post('keterangan',TRUE),
					'dokumen' => $this->input->post('hidden',TRUE),
				);

            $this->surat_masuk_model->update($this->input->post('id_surat', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('surat_masuk'));
			}
		}
    }
    	
	public function delete($id) 
    {
        $row = $this->surat_masuk_model->get_by_id($id);
        if ($row) {
			 $data = array(
				'dokumen' => $row->dokumen,
			);
			$dokumen = $data['dokumen'];
			//echo $gambar;
			unlink('./uploads/surat_masuk/'.$dokumen);
            $this->surat_masuk_model->delete($id);
			$this->surat_diajukan_model->delete_all_surat_masuk($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('surat_masuk'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_masuk'));
        } 
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('indeks', ' ', 'trim|required');
	$this->form_validation->set_rules('kode', ' ', 'trim|required');
	$this->form_validation->set_rules('no_urut', ' ', 'trim|required');
	$this->form_validation->set_rules('tgl_penyelesaian', ' ', 'trim|required');
	$this->form_validation->set_rules('perihal', ' ', 'trim|required');
	$this->form_validation->set_rules('asal_surat', ' ', 'trim|required');
	$this->form_validation->set_rules('tgl_masuk', ' ', 'trim|required');
	$this->form_validation->set_rules('no_surat', ' ', 'trim|required');
	$this->form_validation->set_rules('lampiran', ' ', 'trim|required');
	$this->form_validation->set_rules('informasi_instruksi', ' ', 'trim|required');
	$this->form_validation->set_rules('keterangan', ' ', 'trim|required');
	$this->form_validation->set_rules('id_surat', 'id_surat', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "surat_masuk.xls";
        $judul = "surat_masuk";
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
	xlsWriteLabel($tablehead, $kolomhead++, "no_urut");
	xlsWriteLabel($tablehead, $kolomhead++, "tgl_penyelesaian");
	xlsWriteLabel($tablehead, $kolomhead++, "perihal");
	xlsWriteLabel($tablehead, $kolomhead++, "asal_surat");
	xlsWriteLabel($tablehead, $kolomhead++, "tgl_masuk");
	xlsWriteLabel($tablehead, $kolomhead++, "no_surat");
	xlsWriteLabel($tablehead, $kolomhead++, "lampiran");
	xlsWriteLabel($tablehead, $kolomhead++, "informasi_instruksi");
	xlsWriteLabel($tablehead, $kolomhead++, "keterangan");
	xlsWriteLabel($tablehead, $kolomhead++, "dokumen");

	foreach ($this->surat_masuk_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->indeks);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kode);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_urut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_penyelesaian);
	    xlsWriteLabel($tablebody, $kolombody++, $data->perihal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->asal_surat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_masuk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_surat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->lampiran);
	    xlsWriteLabel($tablebody, $kolombody++, $data->informasi_instruksi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->keterangan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->dokumen);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=surat_masuk.doc");

        $data = array(
            'surat_masuk_data' => $this->surat_masuk_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('surat_masuk_html',$data);
    }

};

/* End of file Surat_masuk.php */
/* Location: ./application/controllers/Surat_masuk.php */