<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	function session_getall(){
		return @$_SESSION['logged_in'];
	}

	function session_getusername(){
		return @$_SESSION['logged_in']['username'];
	}
	function session_getid(){
		return @$_SESSION['logged_in']['id'];
	}

	function session_getnip(){
		return @$_SESSION['logged_in']['nip'];
	}

	function session_getnama(){
		return @$_SESSION['logged_in']['nama'];
	}

	function session_getlevel(){
		return @$_SESSION['logged_in']['level'];
	}

// ------------------------------------------------------------------------
// ------------------------------------------------------------------------
// ------------------------------------------------------------------------
/* End of file get_session.php */
/* Location: ./application/helpers/get_session.php */