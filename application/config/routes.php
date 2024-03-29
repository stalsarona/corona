<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] = 'screening_c';
$route['analisa/(:any)'] = 'screening_c/card_analisa/$1';
$route['404_override'] = 'screening_c/error';
$route['informasi-covid19/v2'] = 'covid_informasi/newCovidDashboard_v2';
$route['informasi-covid19'] = 'covid_informasi/newCovidDashboard_V4';
$route['informasi/pemeriksaan-covid19'] = 'poskes';
$route['import/v1'] = 'ImportData';
$route['import/v2'] = 'ImportData/v2';
$route['importdata/(:any)'] = 'ImportData/V3/$1';
//$route['informasi-covid19'] = 'Covid_informasi/error';
$route['signin'] = 'AuthCovid';
$route['signout'] = 'AuthCovid/signout_pendataan';
$route['pendataan'] = 'Covid_informasi/pendataan';
$route['laporan'] = 'screening_c/laporan';
$route['login'] = 'LoginCovid';
$route['logout'] = 'LoginCovid/signout';
$route['translate_uri_dashes'] = FALSE;
