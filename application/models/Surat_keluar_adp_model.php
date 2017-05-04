<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Surat_keluar_adp_model extends CI_Model
{

    public $table = 'surat_keluar_adp';
    public $id = 'id_surat';
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
        $this->db->like('id_surat', $keyword);
	$this->db->or_like('indeks', $keyword);
	$this->db->or_like('kode', $keyword);
	$this->db->or_like('no_surat', $keyword);
	$this->db->or_like('perihal', $keyword);
	$this->db->or_like('tujuan_surat', $keyword);
	$this->db->or_like('tgl_keluar', $keyword);
	$this->db->or_like('lampiran', $keyword);
	$this->db->or_like('diajukan_teruskan', $keyword);
	$this->db->or_like('informasi_instruksi', $keyword);
	$this->db->or_like('keterangan', $keyword);
	$this->db->or_like('dokumen2', $keyword);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get search data with limit
    function search_index_limit($limit, $start = 0, $keyword = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_surat', $keyword);
	$this->db->or_like('indeks', $keyword);
	$this->db->or_like('kode', $keyword);
	$this->db->or_like('no_surat', $keyword);
	$this->db->or_like('perihal', $keyword);
	$this->db->or_like('tujuan_surat', $keyword);
	$this->db->or_like('tgl_keluar', $keyword);
	$this->db->or_like('lampiran', $keyword);
	$this->db->or_like('diajukan_teruskan', $keyword);
	$this->db->or_like('informasi_instruksi', $keyword);
	$this->db->or_like('keterangan', $keyword);
	$this->db->or_like('dokumen2', $keyword);
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

}

/* End of file Surat_keluar_model.php */
/* Location: ./application/models/Surat_keluar_model.php */