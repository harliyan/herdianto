<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	function bulan_2d($bulan){
		if (strlen($bulan) == 1) {
			$bulan = '0'.$bulan;
		}
		return $bulan;
	}

	function bulan_3str($bulan){
		    if ($bulan == '1'  || $bulan == 1 || $bulan == '01') {
			$bulan = 'JAN';
		}elseif($bulan == '2'  || $bulan == 2 || $bulan == '02'){
			$bulan = 'FEB';
		}elseif($bulan == '3'  || $bulan == 3 || $bulan == '03'){
			$bulan = 'MAR';
		}elseif($bulan == '4'  || $bulan == 4 || $bulan == '04'){
			$bulan = 'APR';
		}elseif($bulan == '5'  || $bulan == 5 || $bulan == '05'){
			$bulan = 'MEI';
		}elseif($bulan == '6'  || $bulan == 6 || $bulan == '06'){
			$bulan = 'JUN';
		}elseif($bulan == '7'  || $bulan == 7 || $bulan == '07'){
			$bulan = 'JUL';
		}elseif($bulan == '8'  || $bulan == 8 || $bulan == '08'){
			$bulan = 'AGU';
		}elseif($bulan == '9'  || $bulan == 9 || $bulan == '09'){
			$bulan = 'SEP';
		}elseif($bulan == '10'  || $bulan == 10){
			$bulan = 'OKT';
		}elseif($bulan == '11'  || $bulan == 11){
			$bulan = 'NOV';
		}elseif($bulan == '12'  || $bulan == 12){
			$bulan = 'DES';
		}
		return $bulan;
	}

	function nama_bulan($bulan){
		    if ($bulan == '1'  || $bulan == 1 || $bulan == '01') {
			$bulan = 'JANUARI';
		}elseif($bulan == '2'  || $bulan == 2 || $bulan == '02'){
			$bulan = 'FEBRUARI';
		}elseif($bulan == '3'  || $bulan == 3 || $bulan == '03'){
			$bulan = 'MARET';
		}elseif($bulan == '4'  || $bulan == 4 || $bulan == '04'){
			$bulan = 'APRIL';
		}elseif($bulan == '5'  || $bulan == 5 || $bulan == '05'){
			$bulan = 'MEI';
		}elseif($bulan == '6'  || $bulan == 6 || $bulan == '06'){
			$bulan = 'JUNI';
		}elseif($bulan == '7'  || $bulan == 7 || $bulan == '07'){
			$bulan = 'JULI';
		}elseif($bulan == '8'  || $bulan == 8 || $bulan == '08'){
			$bulan = 'AGUSTUS';
		}elseif($bulan == '9'  || $bulan == 9 || $bulan == '09'){
			$bulan = 'SEPTEMBER';
		}elseif($bulan == '10'  || $bulan == 10){
			$bulan = 'OKTOBER';
		}elseif($bulan == '11'  || $bulan == 11){
			$bulan = 'NOVEMBER';
		}elseif($bulan == '12'  || $bulan == 12){
			$bulan = 'DESEMBER';
		}
		return $bulan;
	}

// ------------------------------------------------------------------------
// ------------------------------------------------------------------------
// ------------------------------------------------------------------------
/* End of file get_session.php */
/* Location: ./application/helpers/konversi_helper.php */