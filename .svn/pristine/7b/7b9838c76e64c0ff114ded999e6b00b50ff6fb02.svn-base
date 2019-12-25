<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function datetime_id($date, $format = 'd-m-Y H:i:s') {
	$date = date_create_from_format($format, $date);
    return date_format($date, 'Y-m-d H:i:s');
}

function datetime_id_format($date, $format = 'Y-m-d H:i:s') {
	$date = date_create_from_format($format, $date);
    return date_format($date, 'd-m-Y H:i:s');
}

function date_lahir_id($tmp_lahir, $date) {
	return $tmp_lahir.', '.date('d-m-Y', strtotime($date));
}