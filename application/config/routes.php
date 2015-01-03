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

$route['default_controller']    = "administration/dashboard/index";
$route['404_override'] = '';

$route['signin']                = "users/auth/signin";
$route['signout']               = "users/auth/signout";

$route['tickets']               = "administration/tickets/index";
$route['tickets/add']           = "administration/tickets/add";
$route['tickets/edit/(:num)']   = "administration/tickets/edit/$1";
$route['tickets/delete/(:num)'] = "administration/tickets/delete/$1";


$route['groups']                  = "administration/groups/index";
$route['groups/add']              = "administration/groups/add";
$route['groups/edit']             = "administration/groups/edit";
$route['groups/edit/(:num)']      = "administration/groups/edit/$1";
//$route['groups/delete/(:num)']  = "administration/groups/delete/$1";

$route['status']                = "administration/status/index";
//$route['status/edit/(:num)']    = "administration/status/edit/$1";
//$route['status/delete/(:num)']  = "administration/status/delete/$1";

//$route['users']                 = "administration/users/index";
//$route['users/edit/(:num)']     = "administration/users/edit/$1";
//$route['users/delete/(:num)']   = "administration/users/delete/$1";

/* End of file routes.php */
/* Location: ./application/config/routes.php */