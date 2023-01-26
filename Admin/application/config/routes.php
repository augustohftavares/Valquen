<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| URI ROUTING
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
 * AUTHENTICATION
 */
$route['iniciar_sessao'] = "Auth/index";
$route['terminar_sessao'] = "Auth/logout";
$route['criar_conta'] = "Auth/index";
$route['entrar'] = "Auth/login";



/*
 * DASHBOARD
 */
$route['dashboard'] = "Dashboard/index";

/*
 * Users
 */
 $route['utilizadores'] = "User/index";
