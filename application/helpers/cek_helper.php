<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('cek'))
{	
	function cek($tgl_masuk, $no_rm)
	{
		$CI =& get_instance();
		$CI->load->model('data_pasien_model');
		if ($CI->data_pasien_model->get_checked($tgl_masuk, $no_rm)) {
		return TRUE;
	}else{
		return FALSE;
	}
	}
}

