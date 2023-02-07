<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
*/
$route['default_controller'] = 'StartPage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
 * AUTH PAGE
 */
$route['iniciar_sessao'] = 'Auth/log';
$route['registo'] = 'Auth/reg';
$route['registar'] = 'Auth/register';
$route['entrar'] = 'Auth/login';
$route['terminar_sessao'] = 'Auth/logout';
$route['perfil'] = 'Auth/account_details';


/*
 * CONTACT PAGE
 */
$route['atendimento_ao_cliente'] = 'Contact/index';
$route['enviar_formulario'] = 'Contact/Save';
