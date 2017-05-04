<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ppi_tb_nilai_model extends CI_Model
{

    public $table = 'ppi_tb_nilai';
    public $id = 'id_nilai';
    public $order = 'ASC';

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
		$this->db->join('ppi_tb_infeksi', 'ppi_tb_infeksi.id_infeksi = ppi_tb_nilai.id_infeksi');
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
	
	function get_checked($tgl, $no_rm)
    {
        $this->db->where('tanggal', $tanggal);
        $this->db->where('bulan', $bulan);
        $this->db->where('tahun', $tahun);
        $this->db->where('id_infeksi', 1);
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
        $this->db->like('id_nilai', $keyword);
		$this->db->or_like('id_infeksi', $keyword);
		$this->db->or_like('nilai', $keyword);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get search data with limit
    function search_index_limit($limit, $start = 0, $keyword = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_nilai', $keyword);
		$this->db->or_like('id_infeksi', $keyword);
		$this->db->or_like('nilai', $keyword);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
	
	// get search data with limit
    function search_index_laporan( $bulan = NULL, $tahun = NULL, $bangsal = NULL, $jenis = NULL) {
        $this->db->order_by($this->id, $this->order);
		$this->db->join('ppi_tb_infeksi', 'ppi_tb_infeksi.id_infeksi = ppi_tb_nilai.id_infeksi');
        $this->db->where('ppi_tb_nilai.bulan', $tahun);
		$this->db->where('ppi_tb_nilai.tahun', $bangsal);
		$this->db->where('ppi_tb_nilai.bangsal', $bulan);
		$this->db->where('ppi_tb_infeksi.id_infeksi', $jenis);
        return $this->db->get($this->table)->result();
    }
	
	// get search data with limit
    function get_sorted($bulan = NULL, $tahun = NULL, $bangsal = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->where('tahun', $tahun);
		$this->db->where('bangsal', $bangsal);
		$this->db->where('bulanw', $bulan);
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

/* End of file Data_pasien_model.php */
/* Location: ./application/models/Data_pasien_model.php */