<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengumuman_model extends CI_Model
{

    public $table = 'pengumuman';
    public $id = 'id_pengumuman';
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
	
	// get data by id
    function get_by_id_join($id)
    {
        $this->db->where($this->id, $id);
        $this->db->join('member', 'member.id_user = pengumuman.id_member');
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
	
	// get data with limit and join
    function index_limit_join($limit, $start = 0) {
        $this->db->order_by($this->id, $this->order);
        $this->db->join('member', 'member.id_user = pengumuman.id_member');
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
    
    // get search total rows
    function search_total_rows($keyword = NULL) {
        $this->db->like('id_pengumuman', $keyword);
		$this->db->or_like('id_member', $keyword);
		$this->db->or_like('nama_pengumuman', $keyword);
		$this->db->or_like('keterangan', $keyword);
		$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get search data with limit
    function search_index_limit($limit, $start = 0, $keyword = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_pengumuman', $keyword);
		$this->db->or_like('id_member', $keyword);
		$this->db->or_like('nama_pengumuman', $keyword);
		$this->db->or_like('keterangan', $keyword);
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

/* End of file Pengumuman_model.php */
/* Location: ./application/models/Pengumuman_model.php */