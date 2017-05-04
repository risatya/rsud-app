<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Iskp_1_model extends CI_Model
{

    public $table = 'iskp_1';
    public $id = 'id_iskp1';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
	
	// get specified
	function get_specified($bulan, $tahun, $bangsal)
    {
		$this->db->join('data_pasien_iskp1', 'data_pasien_iskp1.no_rm = iskp_1.no_rm');
        $this->db->where('bulan', $bulan);
        $this->db->where('tahun', $tahun);
        $this->db->where('bangsal', $bangsal);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows() {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit
    function index_limit($limit, $start = 0) {
        $this->db->order_by($this->id, $this->order);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
    
    // get search total rows
    function search_total_rows($keyword = NULL) {
        $this->db->like('id_iskp1', $keyword);
	$this->db->or_like('id_pasien', $keyword);
	$this->db->or_like('gelang_identitas_masuk_bangsal', $keyword);
	$this->db->or_like('keterangan', $keyword);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get search data with limit
    function search_index_limit($limit, $start = 0, $bulan = NULL, $tahun = NULL, $bangsal = NULL) {
        //$this->db->order_by($this->id, $this->order);
		$this->db->join('data_pasien_iskp1', 'data_pasien_iskp1.no_rm = iskp_1.no_rm');
        $this->db->where('data_pasien_iskp1.bangsal', $bangsal);
		$this->db->where('data_pasien_iskp1.bulan', $bulan);
		$this->db->where('data_pasien_iskp1.tahun', $tahun);
		$this->db->limit($limit, 0);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Iskp_1_model.php */
/* Location: ./application/models/Iskp_1_model.php */