<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Surat_diajukan_model extends CI_Model
{

    public $table = 'surat_diajukan_diteruskan';
    public $id = 'id_surat_diajukan';
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
	
	// get all by status surat masuk
    function get_all_masuk()
    {
        $this->db->order_by($this->id, $this->order);
		$this->db->where('status', 'Surat Masuk');
        return $this->db->get($this->table)->result();
    }
	
	// get all by status surat keluar
    function get_all_keluar()
    {
        $this->db->order_by($this->id, $this->order);
		$this->db->where('status', 'Surat Keluar');
        return $this->db->get($this->table)->result();
    }
	
	// get all by status surat keluar
    function get_all_keputusan()
    {
        $this->db->order_by($this->id, $this->order);
		$this->db->where('status', 'Surat Keputusan');
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
	
	// get total rows surat masuk
    function total_rows_surat_masuk() {
        $this->db->from($this->table);
		$this->db->where('status', 'Surat Masuk');
        return $this->db->count_all_results();
    }
	
	// get total rows surat keluar
    function total_rows_surat_keluar() {
        $this->db->from($this->table);
		$this->db->where('status', 'Surat Keluar');
        return $this->db->count_all_results();
    }
	
	// get total rows surat keputusan
    function total_rows_surat_keputusan() {
        $this->db->from($this->table);
		$this->db->where('status', 'Surat Keputusan');
        return $this->db->count_all_results();
    }

    // get data with limit
    function index_limit($limit, $start = 0) {
        $this->db->order_by($this->id, $this->order);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
	
	// get data with limit masuk
    function index_limit_masuk($limit, $start = 0) {
        $this->db->order_by($this->id, $this->order);
		$this->db->join('member', 'member.id_user = surat_diajukan_diteruskan.id_member');
		$this->db->join('surat_masuk', 'surat_masuk.id_surat = surat_diajukan_diteruskan.id_surat');
        $this->db->limit($limit, $start);
		$this->db->where('status', 'Surat Masuk');
        return $this->db->get($this->table)->result();
    }
    
	// get data with limit keluar
    function index_limit_keluar($limit, $start = 0) {
        $this->db->order_by($this->id, $this->order);
		$this->db->join('member', 'member.id_user = surat_diajukan_diteruskan.id_member');
		$this->db->join('surat_keluar', 'surat_keluar.id_surat = surat_diajukan_diteruskan.id_surat');
        $this->db->limit($limit, $start);
		$this->db->where('surat_diajukan_diteruskan.status', 'Surat Keluar');
        return $this->db->get($this->table)->result();
    }
	
	// get data with limit keputusan
    function index_limit_keputusan($limit, $start = 0) {
        $this->db->order_by($this->id, $this->order);
		$this->db->join('member', 'member.id_user = surat_diajukan_diteruskan.id_member');
		$this->db->join('surat_keputusan', 'surat_keputusan.id_sk = surat_diajukan_diteruskan.id_surat');
        $this->db->limit($limit, $start);
		$this->db->where('surat_diajukan_diteruskan.status', 'Surat Keputusan');
        return $this->db->get($this->table)->result();
    }
	
    // get search total rows
    function search_total_rows($keyword = NULL) {
        $this->db->like('id_surat_diajukan', $keyword);
	$this->db->or_like('id_surat', $keyword);
	$this->db->or_like('id_member', $keyword);
	$this->db->or_like('status', $keyword);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }
	
	// get search total rows surat masuk
	function search_total_rows_surat_masuk($keyword = NULL) {
        $this->db->like('id_surat_diajukan', $keyword);
		$this->db->or_like('id_surat', $keyword);
		$this->db->or_like('id_member', $keyword);
		$this->db->or_like('status', $keyword);
		$this->db->where('status', 'Surat Masuk');
		$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get search data with limit
    function search_index_limit_surat_masuk($limit, $start = 0, $keyword = NULL) {
		$this->db->join('surat_masuk', 'surat_masuk.id_surat = surat_diajukan_diteruskan.id_surat');
		$this->db->join('member', 'member.id_user = surat_diajukan_diteruskan.id_member');
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_surat_diajukan', $keyword);
		// $this->db->or_like('surat_diajukan_diteruskan.id_surat', $keyword);
		// $this->db->or_like('id_member', $keyword);
		// $this->db->or_like('status', $keyword);
		$this->db->or_like('indeks', $keyword);
		$this->db->or_like('surat_masuk.kode', $keyword);
		$this->db->or_like('surat_masuk.no_urut', $keyword);
		$this->db->or_like('surat_masuk.tgl_penyelesaian', $keyword);
		$this->db->or_like('surat_masuk.perihal', $keyword);
		$this->db->or_like('surat_masuk.asal_surat', $keyword);
		$this->db->or_like('surat_masuk.tgl_masuk', $keyword);
		$this->db->or_like('surat_masuk.no_surat', $keyword);
		$this->db->or_like('surat_masuk.lampiran', $keyword);
		$this->db->or_like('surat_masuk.informasi_instruksi', $keyword);
		$this->db->or_like('surat_masuk.keterangan', $keyword);
		$this->db->or_like('surat_masuk.dokumen', $keyword);
		$this->db->or_like('member.nama', $keyword);
		$this->db->where('statuss', 'Surat Masuk');
		$this->db->limit($limit, $start);
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
	
	// delete data by id surat
    function delete_all_surat_masuk($id)
    {
        $this->db->where('id_surat', $id);
        $this->db->where('status', 'Surat Masuk');
        $this->db->delete($this->table);
    }
	
	// delete data by id surat
    function delete_all_surat_keluar($id)
    {
        $this->db->where('id_surat', $id);
        $this->db->where('status', 'Surat Keluar');
        $this->db->delete($this->table);
    }
	
	// delete data by id surat
    function delete_all_surat_keputusan($id)
    {
        $this->db->where('id_surat', $id);
        $this->db->where('status', 'Surat Keputusan');
        $this->db->delete($this->table);
    }

}

/* End of file Surat_diajukan_model.php */
/* Location: ./application/models/Surat_diajukan_model.php */