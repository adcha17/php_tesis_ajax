 <?php 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('_build_json')) {

	function _build_json($_status = FALSE,$_message=FALSE){

	if($_status)
		exit(json_encode(array('status'=>$_status,'message'=>$_message)));
	else   
		exit(json_encode(array('status'=>FALSE,'message'=>$_message)));
	}
}

if (!function_exists('_is_ajax_request')) {

	function _is_ajax_request(){

		$CI = &get_instance();

		if (!$CI->input->is_ajax_request()) 
			_build_json();

	}
}

if (!function_exists('_is_post')) {

	function _is_post(){

		if ($_SERVER['REQUEST_METHOD'] !== 'POST')
			_build_json(FALSE);

	}

}

if (!function_exists('_validate_empty')) {

	function _validate_empty($_input,$_message){

		$CI = &get_instance();

		$_str = trim($_input);
		if (empty($_str))
			_build_json(FALSE, $_message);

		return $_str;

	}
}
