<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('ceknilai'))
{	
	function ceknilai($tgl_masuk, $no_rm)
	{
		$CI =& get_instance();
		$CI->load->model('pi_tb_nilai_model');
		if ($CI->pi_tb_nilai_model->get_checked($tgl_masuk, $no_rm)) {
		return TRUE;
	}else{
		return FALSE;
	}
	}
}

