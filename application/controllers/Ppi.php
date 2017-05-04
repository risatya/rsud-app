<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ppi extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ppi_tb_nilai_model');
        $this->load->model('ppi_tb_infeksi_model');
        $this->load->library('form_validation');
    }
	
	public function index()
    {
		$this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
        $this->load->view('ppi_front');
		$this->load->view('backend/_template/footer');
    }
	
	public function search() 
    {
        $bulan = $this->input->post('bulan', TRUE);
        $tahun = $this->input->post('tahun', TRUE);
        $bangsal = $this->input->post('bangsal', TRUE);
		$t = date($tahun); //Mengambil tahun saat ini
		$b = date($bulan); //Mengambil bulan saat ini
        $ppi = $this->ppi_tb_infeksi_model->get_all();
		
        $data = array(
            'ppi_data' => $ppi,
            't' => $t,
            'b' => $b,
        );
		$this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
        $this->load->view('ppi_result', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function search_laporan() 
    {
        $bulan = $this->input->post('bulan', TRUE);
        $tahun = $this->input->post('tahun', TRUE);
        $bangsal = $this->input->post('bangsal', TRUE);
		$t = date($tahun); //Mengambil tahun saat ini
		$b = date($bulan); //Mengambil bulan saat ini
		$jenis1 = 1;
		$jenis2 = 2;
		$jenis3 = 3;
		$jenis4 = 4;
		$jenis5 = 5;
		$jenis6 = 6;
		$jenis7 = 7;
		$jenis8 = 8;
		$jenis9 = 9;
		$jenis10 = 10;
		$jenis11 = 11;
		$jenis12 = 12;
		$jenis13 = 13;
		$jenis14 = 14;
		$jenis15 = 15;

        $ppi1 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis1);
        $ppi2 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis2);
        $ppi3 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis3);
        $ppi4 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis4);
        $ppi5 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis5);
        $ppi6 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis6);
        $ppi7 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis7);
        $ppi8 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis8);
        $ppi9 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis9);
        $ppi10 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis10);
        $ppi11 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis11);
        $ppi12 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis12);
        $ppi13 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis13);
        $ppi14 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis14);
        $ppi15 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis15);
		$start = $this->uri->segment(4, 0);
        $data = array(
            'ppi_data1' => $ppi1,
			'ppi_data2' => $ppi2,
			'ppi_data3' => $ppi3,
			'ppi_data4' => $ppi4,
			'ppi_data5' => $ppi5,
			'ppi_data6' => $ppi6,
			'ppi_data7' => $ppi7,
			'ppi_data8' => $ppi8,
			'ppi_data9' => $ppi9,
			'ppi_data10' => $ppi10,
			'ppi_data11' => $ppi11,
			'ppi_data12' => $ppi12,
			'ppi_data13' => $ppi13,
			'ppi_data14' => $ppi14,
			'ppi_data15' => $ppi15,
            'start' => $start,
			't' => $t,
            'b' => $b,
        );
		$this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
        $this->load->view('ppi_result_laporan', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function laporan()
    {
		$ppi = $this->ppi_tb_infeksi_model->get_all();
        $data = array(
            'ppi_data' => $ppi,
        );
		$this->load->view('backend/_template/header');
		$this->load->view('backend/_template/sidebar');
        $this->load->view('ppi_front_laporan', $data);
		$this->load->view('backend/_template/footer');
    }
	
	public function create_action() 
    {
		$total_checkbox_num = $this->input->post('total_rows', TRUE);
		for($i = 1; $i <= $total_checkbox_num; $i++) {
			if($this->input->post('nilai_a'.$i, TRUE)) {
				$data1 = array(
					'id_infeksi' => $this->input->post('infeksi_1', TRUE),
					'tanggal' => $this->input->post('tanggal_a'.$i, TRUE),
					'nilai' => $this->input->post('nilai_a'.$i, TRUE),
					'bulan' => $this->input->post('bulan', TRUE),
					'tahun' => $this->input->post('tahun', TRUE),
					'bangsal' => $this->input->post('bangsal', TRUE),
				);
				$this->ppi_tb_nilai_model->insert($data1);
			}
			
			if($this->input->post('nilai_b'.$i, TRUE)) {
				$data2 = array(
					'id_infeksi' => $this->input->post('infeksi_2', TRUE),
					'tanggal' => $this->input->post('tanggal_b'.$i, TRUE),
					'nilai' => $this->input->post('nilai_b'.$i, TRUE),
					'bulan' => $this->input->post('bulan', TRUE),
					'tahun' => $this->input->post('tahun', TRUE),
					'bangsal' => $this->input->post('bangsal', TRUE),
				);
				$this->ppi_tb_nilai_model->insert($data2);
			}
			
			if($this->input->post('nilai_c'.$i, TRUE)) {
				$data3 = array(
					'id_infeksi' => $this->input->post('infeksi_3', TRUE),
					'tanggal' => $this->input->post('tanggal_c'.$i, TRUE),
					'nilai' => $this->input->post('nilai_c'.$i, TRUE),
					'bulan' => $this->input->post('bulan', TRUE),
					'tahun' => $this->input->post('tahun', TRUE),
					'bangsal' => $this->input->post('bangsal', TRUE),
				);
				$this->ppi_tb_nilai_model->insert($data3);
			}
			
			if($this->input->post('nilai_d'.$i, TRUE)) {
				$data4 = array(
					'id_infeksi' => $this->input->post('infeksi_4', TRUE),
					'tanggal' => $this->input->post('tanggal_d'.$i, TRUE),
					'nilai' => $this->input->post('nilai_d'.$i, TRUE),
					'bulan' => $this->input->post('bulan', TRUE),
					'tahun' => $this->input->post('tahun', TRUE),
					'bangsal' => $this->input->post('bangsal', TRUE),
				);
				$this->ppi_tb_nilai_model->insert($data4);
			}
			
			if($this->input->post('nilai_e'.$i, TRUE)) {
				$data5 = array(
					'id_infeksi' => $this->input->post('infeksi_5', TRUE),
					'tanggal' => $this->input->post('tanggal_e'.$i, TRUE),
					'nilai' => $this->input->post('nilai_e'.$i, TRUE),
					'bulan' => $this->input->post('bulan', TRUE),
					'tahun' => $this->input->post('tahun', TRUE),
					'bangsal' => $this->input->post('bangsal', TRUE),
				);
				$this->ppi_tb_nilai_model->insert($data5);
			}
			
			if($this->input->post('nilai_f'.$i, TRUE)) {
				$data6 = array(
					'id_infeksi' => $this->input->post('infeksi_6', TRUE),
					'tanggal' => $this->input->post('tanggal_f'.$i, TRUE),
					'nilai' => $this->input->post('nilai_f'.$i, TRUE),
					'bulan' => $this->input->post('bulan', TRUE),
					'tahun' => $this->input->post('tahun', TRUE),
					'bangsal' => $this->input->post('bangsal', TRUE),
				);
				$this->ppi_tb_nilai_model->insert($data6);
			}
			
			if($this->input->post('nilai_g'.$i, TRUE)) {
				$data7 = array(
					'id_infeksi' => $this->input->post('infeksi_7', TRUE),
					'tanggal' => $this->input->post('tanggal_g'.$i, TRUE),
					'nilai' => $this->input->post('nilai_g'.$i, TRUE),
					'bulan' => $this->input->post('bulan', TRUE),
					'tahun' => $this->input->post('tahun', TRUE),
					'bangsal' => $this->input->post('bangsal', TRUE),
				);
				$this->ppi_tb_nilai_model->insert($data7);
			}
			
			if($this->input->post('nilai_h'.$i, TRUE)) {
				$data8 = array(
					'id_infeksi' => $this->input->post('infeksi_8', TRUE),
					'tanggal' => $this->input->post('tanggal_h'.$i, TRUE),
					'nilai' => $this->input->post('nilai_h'.$i, TRUE),
					'bulan' => $this->input->post('bulan', TRUE),
					'tahun' => $this->input->post('tahun', TRUE),
					'bangsal' => $this->input->post('bangsal', TRUE),
				);
				$this->ppi_tb_nilai_model->insert($data8);
			}
			
			if($this->input->post('nilai_i'.$i, TRUE)) {
				$data9 = array(
					'id_infeksi' => $this->input->post('infeksi_9', TRUE),
					'tanggal' => $this->input->post('tanggal_i'.$i, TRUE),
					'nilai' => $this->input->post('nilai_i'.$i, TRUE),
					'bulan' => $this->input->post('bulan', TRUE),
					'tahun' => $this->input->post('tahun', TRUE),
					'bangsal' => $this->input->post('bangsal', TRUE),
				);
				$this->ppi_tb_nilai_model->insert($data9);
			}
			
			if($this->input->post('nilai_j'.$i, TRUE)) {
				$data10 = array(
					'id_infeksi' => $this->input->post('infeksi_10', TRUE),
					'tanggal' => $this->input->post('tanggal_j'.$i, TRUE),
					'nilai' => $this->input->post('nilai_j'.$i, TRUE),
					'bulan' => $this->input->post('bulan', TRUE),
					'tahun' => $this->input->post('tahun', TRUE),
					'bangsal' => $this->input->post('bangsal', TRUE),
				);
				$this->ppi_tb_nilai_model->insert($data10);
			}
			
			if($this->input->post('nilai_k'.$i, TRUE)) {
				$data11 = array(
					'id_infeksi' => $this->input->post('infeksi_11', TRUE),
					'tanggal' => $this->input->post('tanggal_k'.$i, TRUE),
					'nilai' => $this->input->post('nilai_k'.$i, TRUE),
					'bulan' => $this->input->post('bulan', TRUE),
					'tahun' => $this->input->post('tahun', TRUE),
					'bangsal' => $this->input->post('bangsal', TRUE),
				);
				$this->ppi_tb_nilai_model->insert($data11);
			}
			
			if($this->input->post('nilai_l'.$i, TRUE)) {
				$data12 = array(
					'id_infeksi' => $this->input->post('infeksi_12', TRUE),
					'tanggal' => $this->input->post('tanggal_l'.$i, TRUE),
					'nilai' => $this->input->post('nilai_l'.$i, TRUE),
					'bulan' => $this->input->post('bulan', TRUE),
					'tahun' => $this->input->post('tahun', TRUE),
					'bangsal' => $this->input->post('bangsal', TRUE),
				);
				$this->ppi_tb_nilai_model->insert($data12);
			}
			
			if($this->input->post('nilai_m'.$i, TRUE)) {
				$data13 = array(
					'id_infeksi' => $this->input->post('infeksi_13', TRUE),
					'tanggal' => $this->input->post('tanggal_m'.$i, TRUE),
					'nilai' => $this->input->post('nilai_m'.$i, TRUE),
					'bulan' => $this->input->post('bulan', TRUE),
					'tahun' => $this->input->post('tahun', TRUE),
					'bangsal' => $this->input->post('bangsal', TRUE),
				);
				$this->ppi_tb_nilai_model->insert($data13);
			}
			
			if($this->input->post('nilai_n'.$i, TRUE)) {
				$data14 = array(
					'id_infeksi' => $this->input->post('infeksi_14', TRUE),
					'tanggal' => $this->input->post('tanggal_n'.$i, TRUE),
					'nilai' => $this->input->post('nilai_n'.$i, TRUE),
					'bulan' => $this->input->post('bulan', TRUE),
					'tahun' => $this->input->post('tahun', TRUE),
					'bangsal' => $this->input->post('bangsal', TRUE),
				);
				$this->ppi_tb_nilai_model->insert($data14);
			}
			
			if($this->input->post('nilai_o'.$i, TRUE)) {
				$data15 = array(
					'id_infeksi' => $this->input->post('infeksi_15', TRUE),
					'tanggal' => $this->input->post('tanggal_o'.$i, TRUE),
					'nilai' => $this->input->post('nilai_o'.$i, TRUE),
					'bulan' => $this->input->post('bulan', TRUE),
					'tahun' => $this->input->post('tahun', TRUE),
					'bangsal' => $this->input->post('bangsal', TRUE),
				);
				$this->ppi_tb_nilai_model->insert($data15);
			}
			
		}
		$this->session->set_flashdata('message', '<div class="alert alert-info">Data pasien dan data PPI Telah berhasil dimasukkan, data dapat dilihat di laporan</div>');
		redirect(site_url('ppi'));        
    }
	
	public function update($id) 
    {
        $row = $this->ppi_tb_nilai_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ppi/update_action'),
				'id_nilai' => set_value('id_nilai', $row->id_nilai),
				'nama_infeksi' => set_value('nama_infeksi', $row->nama_infeksi),
				'id_infeksi' => set_value('id_infeksi', $row->id_infeksi),
				'nilai' => set_value('nilai', $row->nilai),
				'tanggal' => set_value('tanggal', $row->tanggal),
				'bulan' => set_value('bulan', $row->bulan),
				'tahun' => set_value('tahun', $row->tahun),
				'bangsal' => set_value('bangsal', $row->bangsal),
				);
			$this->load->view('backend/_template/header');
			$this->load->view('backend/_template/sidebar');	
            $this->load->view('ppi_form', $data);
			$this->load->view('backend/_template/footer');	
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('iak_1'));
        }
    }
	
	public function update_action() 
    {
       
            $data = array(
				'id_infeksi' => $this->input->post('id_infeksi',TRUE),
				'nilai' => $this->input->post('nilai',TRUE),
				'tanggal' => $this->input->post('tanggal',TRUE),
				'bulan' => $this->input->post('bulan',TRUE),
				'tahun' => $this->input->post('tahun',TRUE),
				'bangsal' => $this->input->post('bangsal',TRUE),
			);

            $this->ppi_tb_nilai_model->update($this->input->post('id_nilai', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Data PPI Success');
            redirect(site_url('ppi/laporan'));
        
    }
	
	
	public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=ppi.doc");
		$bulan = $this->uri->segment(3); 
		$tahun = $this->uri->segment(4); 
		$bangsal = $this->uri->segment(5);
		
		$jenis1 = 1;
		$jenis2 = 2;
		$jenis3 = 3;
		$jenis4 = 4;
		$jenis5 = 5;
		$jenis6 = 6;
		$jenis7 = 7;
		$jenis8 = 8;
		$jenis9 = 9;
		$jenis10 = 10;
		$jenis11 = 11;
		$jenis12 = 12;
		$jenis13 = 13;
		$jenis14 = 14;
		$jenis15 = 15;

        $ppi1 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis1);
        $ppi2 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis2);
        $ppi3 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis3);
        $ppi4 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis4);
        $ppi5 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis5);
        $ppi6 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis6);
        $ppi7 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis7);
        $ppi8 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis8);
        $ppi9 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis9);
        $ppi10 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis10);
        $ppi11 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis11);
        $ppi12 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis12);
        $ppi13 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis13);
        $ppi14 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis14);
        $ppi15 = $this->ppi_tb_nilai_model->search_index_laporan($bangsal, $bulan, $tahun, $jenis15);
		$start = $this->uri->segment(4, 0);
        $data = array(
            'iak_1_data' => $this->iak_1_model->get_specified($bulan, $tahun, $bangsal),
            'start' => 0
        );
        
        $this->load->view('iak_1_html',$data);
    }
}