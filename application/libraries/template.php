<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Template{
	
	function show($view, $data = array()){
		
		//Get current CI Instance
		$CI =& get_instance();

		//Load Templates views
		$CI->load->view('templates/header', $data);
		$CI->load->view($view, $data);
		$CI->load->view('templates/footer', $data);
	}

	function menu($view){
		//Get current CI Instance
		$CI =& get_instance();

		//Load Template Menu
		$CI->load->view('template/menu', array('view'=>$view));
	}
}

/* End of file templates.php */
/* Location: ./application/controllers/welcome.php */