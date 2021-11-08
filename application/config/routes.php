<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Route Survey
$route['survey/ehra/(:any)'] = 'survey/index_ehra/$1';
$route['survey/rumahsehat/(:any)'] = 'survey/index_rumahsehat/$1';
$route['survey/responden'] = 'responden/index';

// Route Dashboard
$route['admin/dashboard'] = 'dashboard';
$route['admin/pertanyaan'] = 'pertanyaan';
$route['admin/hasil'] = 'hasil';
$route['admin/user'] = 'user';

// Route Laporan
$route['admin/laporan/infoumum'] = 'laporan/index_infoumum';
$route['admin/laporan/sampah'] = 'laporan/index_sampah';
$route['admin/laporan/limbah'] = 'laporan/index_limbah';
$route['admin/laporan/drainase'] = 'laporan/index_drainase';
$route['admin/laporan/sumberair'] = 'laporan/index_sumberair';
$route['admin/laporan/higiene'] = 'laporan/index_higiene';
$route['admin/laporan/diare'] = 'laporan/index_diare';
$route['admin/laporan/pengamatan'] = 'laporan/index_pengamatan';
$route['admin/laporan/areaberesiko'] = 'laporan/index_areaberesiko';
