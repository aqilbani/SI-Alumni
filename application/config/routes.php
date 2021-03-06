<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "main_ctrl";
$route['404_override'] = '';

/* Custom Routes */

// Log Me Out
$route['logmeout'] = 'main_ctrl/logout';

// Admin Page
$route['admincp'] = 'admin_ctrl';
$route['admincp/alumni'] = 'admin_ctrl/page_management_alumni';
$route['admincp/alumni/(:num)'] = 'admin_ctrl/page_alumni_list_jurusan/$1';
$route['admincp/alumni/(:num)/(:num)'] = 'admin_ctrl/page_alumni_list/$1/$2';

// Alumni Page
$route['alumni'] = 'alumni_ctrl';
$route['alumni/e/update_alumni'] = 'alumni_ctrl/AJAX_Update_Alumni';
$route['alumni/e/tambah_kerja'] = 'alumni_ctrl/AJAX_Tambah_Kerja';
$route['alumni/update/pekerjaan'] = 'alumcni_ctrl/update_pekerjaan';

// Pengguna Alumni Page
$route['pa'] = 'pa_ctrl';
$route['loker'] = 'loker_ctrl';
 
/* End of file routes.php */
/* Location: ./application/config/routes.php */