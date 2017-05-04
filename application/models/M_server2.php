<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_server2 extends CI_Model
{
	private $db2;
    public $id = 'no_rm';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
		$this->db2 = $this->load->database('server_2', TRUE);
    }
	
	// get total rows from db2
    function get_all() {
		$this->db2->order_by($this->id, $this->order);
        return $this->db2->get('ass_pasien2')->result();
    }

    // get data with limit
    function index_limit($limit, $start = 0) {
        $this->db2->order_by($this->id, $this->order);
        $this->db2->limit($limit, $start);
        return $this->db2->get('ass_pasien2')->result();
    }
    
    // get search total rows
    function search_total_rows1($keyword = NULL) {
		$this->db2->like('no_rm', $keyword);
		$this->db2->or_like('tgl_masuk', $keyword);
		$this->db2->or_like('tgl_lahir', $keyword);
		$this->db2->or_like('nama', $keyword);
		$this->db2->or_like('bangsal', $keyword);
		$this->db2->or_like('dokter', $keyword);
		$this->db2->or_like('bulan', $keyword);
		$this->db2->or_like('tahun', $keyword);
		$this->db2->from('ass_pasien2');
        return $this->db2->count_all_results();
    }

    // get search data with limit
    function search_index_limit1($limit, $start = 0, $keyword = NULL) {
        $this->db2->order_by($this->id, $this->order);
		$this->db2->like('no_rm', $keyword);
		$this->db2->or_like('tgl_masuk', $keyword);
		$this->db2->or_like('tgl_lahir', $keyword);
		$this->db2->or_like('nama', $keyword);
		$this->db2->or_like('bangsal', $keyword);
		$this->db2->or_like('dokter', $keyword);
		$this->db2->or_like('bulan', $keyword);
		$this->db2->or_like('tahun', $keyword);
		$this->db2->limit($limit, $start);
        return $this->db2->get('ass_pasien2')->result();
    }
	
	// get search total rows
    function search_total_rows2($bulan = NULL, $tahun = NULL, $bangsal = NULL) {
		$this->db2->order_by($this->id, $this->order);
		$this->db2->where('bangsal', $bangsal);
		$this->db2->where('bulan', $bulan);
		$this->db2->where('tahun', $tahun);
		$this->db2->from('ass_pasien2');
        return $this->db2->count_all_results();
    }

    // get search data with limit
    function search_index_limit2($limit, $start = 0, $bulan = NULL, $tahun = NULL, $bangsal = NULL) {
        $this->db2->order_by($this->id, $this->order);
		$this->db2->where('bangsal', $bangsal);
		$this->db2->where('bulan', $bulan);
		$this->db2->where('tahun', $tahun);
		$this->db2->limit($limit, $start);
        return $this->db2->get('ass_pasien2')->result();
    }

   

}
