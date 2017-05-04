<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Surat_keputusan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('surat_diajukan_model');
        $this->load->model('surat_keputusan_model');
        $this->load->model('member_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'surat_keputusan/index/';
        $config['total_rows'] = $this->surat_keputusan_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'surat_keputusan.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $surat_keputusan = $this->surat_keputusan_model->index_limit($config['per_page'], $start);

        $data = array(
            'surat_keputusan_data' => $surat_keputusan,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_keputusan_list', $data);
		$this->load->view('backend/_template/footer');
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'surat_keputusan/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'surat_keputusan/index/';
        }

        $config['total_rows'] = $this->surat_keputusan_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'surat_keputusan/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $surat_keputusan = $this->surat_keputusan_model->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'surat_keputusan_data' => $surat_keputusan,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_keputusan_list', $data);
		$this->load->view('backend/_template/footer');
    }

    public function read($id) 
    {
        $row = $this->surat_keputusan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_sk' => $row->id_sk,
		'nama_sk' => $row->nama_sk,
		'no_sk' => $row->no_sk,
		'tanggal_sk' => $row->tanggal_sk,
		'tanggal_revisi' => $row->tanggal_revisi,
		'status' => $row->status,
		'kategori' => $row->kategori,
		'dokumen' => $row->dokumen,
	    );
			$this->load->view('backend/_template/header');
			$this->load->view('backend/_template/sidebar');
            $this->load->view('surat_keputusan_read', $data);
			$this->load->view('backend/_template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_keputusan'));
        }
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('surat_keputusan/create_action'),
	    'id_sk' => set_value('id_sk'),
	    'nama_sk' => set_value('nama_sk'),
	    'no_sk' => set_value('no_sk'),
	    'tanggal_sk' => set_value('tanggal_sk'),
	    'tanggal_revisi' => set_value('tanggal_revisi'),
	    'status' => set_value('status'),
	    'kategori' => set_value('kategori'),
	    'dokumen' => set_value('dokumen'),
	);
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_keputusan_form', $data);
		$this->load->view('backend/_template/footer');
    }
    
	public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $config['upload_path'] = "./uploads/surat_keputusan/";
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
					'nama_sk' => $this->input->post('nama_sk',TRUE),
					'no_sk' => $this->input->post('no_sk',TRUE),
					'tanggal_sk' => $this->input->post('tanggal_sk',TRUE),
					'tanggal_revisi' => $this->input->post('tanggal_revisi',TRUE),
					'status' => $this->input->post('status',TRUE),
					'kategori' => $this->input->post('kategori',TRUE),
					'dokumen' => $this->upload->file_name,
				);
				
				$this->surat_keputusan_model->insert($data);
				$this->session->set_flashdata('message', 'Create Record Success');
				redirect(site_url('surat_keputusan'));
			}
		}
	}
	
	public function diajukan_diteruskan($id){
		/* proses setelah surat masuk dibuat kemudian ada form diajukan / diteruskan kepada bagian atau instalasi tertentu
		proses merupakan checkbox yang akan looping masuk ke table surat_diajukan_diteruskan */
		$member1 = $this->member_model->get_all1();
		$member2 = $this->member_model->get_all2();
		$member3 = $this->member_model->get_all3();
		
		$row = $this->surat_keputusan_model->get_by_id($id);
        if ($row) {
        $data = array(
			'member_data1' => $member1,
			'member_data2' => $member2,
			'member_data3' => $member3,
			'button' => 'Create',
            'action' => site_url('surat_keputusan/diajukan_diteruskan_create_action'),
			'id_surat_diajukan' => set_value('id_surat_diajukan'),
			'id_surat' => set_value('id_surat'),
			'id_member' => set_value('indeks'),
			'status' => set_value('status'),
			'nama_sk' => $row->nama_sk,
			'no_sk' => $row->no_sk,
			'id_sk' => $row->id_sk,
	    );	
		$this->load->view('backend/_template/header');
        $this->load->view('backend/_template/sidebar');
        $this->load->view('surat_keputusan_diajukan_form', $data);
		$this->load->view('backend/_template/footer');
		}else{
			$this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_keputusan'));
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
		redirect(site_url('surat_diajukan/surat_keputusan'));
    }
    
    public function update($id) 
    {
        $row = $this->surat_keputusan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('surat_keputusan/update_action'),
		'id_sk' => set_value('id_sk', $row->id_sk),
		'nama_sk' => set_value('nama_sk', $row->nama_sk),
		'no_sk' => set_value('no_sk', $row->no_sk),
		'tanggal_sk' => set_value('tanggal_sk', $row->tanggal_sk),
		'tanggal_revisi' => set_value('tanggal_revisi', $row->tanggal_revisi),
		'status' => set_value('status', $row->status),
		'kategori' => set_value('kategori', $row->kategori),
		'dokumen' => set_value('dokumen', $row->dokumen),
	    );
			$this->load->view('backend/_template/header');
			$this->load->view('backend/_template/sidebar');
            $this->load->view('surat_keputusan_form', $data);
			$this->load->view('backend/_template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_keputusan'));
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
				$config['upload_path'] = "./uploads/surat_keputusan";
				$config['allowed_types'] = 'gif|jpg|png|JPEG|zip|rar|pdf|xls|doc|tar|ppt|docx';
				$config['max_size']      = '10240';
				//$config['max_width']     = '1200';
				//$config['max_height']    = '1200';
				$config['file_name'] = url_title($this->input->post('dokumen'));
				$config['encrypt_name']  = TRUE;
				unlink('./uploads/surat_keputusan/'.$row);
				$this->upload->initialize($config); //meng set config yang sudah di atur
				if( !$this->upload->do_upload('dokumen')){
					echo $this->upload->display_errors();
				}else{
					$data = array(
						'nama_sk' => $this->input->post('nama_sk',TRUE),
						'no_sk' => $this->input->post('no_sk',TRUE),
						'tanggal_sk' => $this->input->post('tanggal_sk',TRUE),
						'tanggal_revisi' => $this->input->post('tanggal_revisi',TRUE),
						'status' => $this->input->post('status',TRUE),
						'kategori' => $this->input->post('kategori',TRUE),
						'dokumen' => $this->upload->file_name,
					);
				$this->surat_keputusan_model->update($this->input->post('id_sk', TRUE), $data);
				$this->session->set_flashdata('message', 'Update Record Success');
				redirect(site_url('surat_keputusan'));
				} 
			}else{
				//echo 'gambar kosong';
				$data = array(
					'nama_sk' => $this->input->post('nama_sk',TRUE),
					'no_sk' => $this->input->post('no_sk',TRUE),
					'tanggal_sk' => $this->input->post('tanggal_sk',TRUE),
					'tanggal_revisi' => $this->input->post('tanggal_revisi',TRUE),
					'status' => $this->input->post('status',TRUE),
					'kategori' => $this->input->post('kategori',TRUE),
					'dokumen' => $this->input->post('hidden',TRUE),
				);
				

            $this->surat_keputusan_model->update($this->input->post('id_sk', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('surat_keputusan'));
			}
		}
    }
    
    public function delete1($id) 
    {
        $row = $this->surat_keputusan_model->get_by_id($id);

        if ($row) {
            $this->surat_keputusan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('surat_keputusan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_keputusan'));
        }
    }
	
	public function delete($id) 
    {
        $row = $this->surat_keputusan_model->get_by_id($id);
        if ($row) {
			 $data = array(
				'dokumen' => $row->dokumen,
			);
			$dokumen = $data['dokumen'];
			//echo $gambar;
			unlink('./uploads/surat_keputusan/'.$dokumen);
            $this->surat_keputusan_model->delete($id);
			$this->surat_diajukan_model->delete_all_surat_keputusan($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('surat_keputusan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('surat_keputusan'));
        } 
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_sk', ' ', 'trim|required');
	$this->form_validation->set_rules('no_sk', ' ', 'trim|required');
	$this->form_validation->set_rules('tanggal_sk', ' ', 'trim|required');
	$this->form_validation->set_rules('tanggal_revisi', ' ', 'trim|required');
	$this->form_validation->set_rules('status', ' ', 'trim|required');
	$this->form_validation->set_rules('id_sk', 'id_sk', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "surat_keputusan.xls";
        $judul = "surat_keputusan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "nama_sk");
	xlsWriteLabel($tablehead, $kolomhead++, "no_sk");
	xlsWriteLabel($tablehead, $kolomhead++, "tanggal_sk");
	xlsWriteLabel($tablehead, $kolomhead++, "tanggal_revisi");
	xlsWriteLabel($tablehead, $kolomhead++, "status");
	xlsWriteLabel($tablehead, $kolomhead++, "dokumen");

	foreach ($this->surat_keputusan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_sk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_sk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_sk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal_revisi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);
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
        header("Content-Disposition: attachment;Filename=surat_keputusan.doc");

        $data = array(
            'surat_keputusan_data' => $this->surat_keputusan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('surat_keputusan_html',$data);
    }

};

/* End of file Surat_keputusan.php */
/* Location: ./application/controllers/Surat_keputusan.php */