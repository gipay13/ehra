<?php
defined('BASEPATH') or exit('No direct script access allowed');

function indo_date($date)
{
	$d = substr($date, 8, 2);
	$m = substr($date, 5, 2);
	$y = substr($date, 0, 4);

	return $d . '/' . $m . '/' . $y;
}
