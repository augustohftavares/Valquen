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
$route['criar_administrador'] = "Auth/index_";
$route['registar_conta'] = "Auth/register";
$route['entrar'] = "Auth/login";

/*
 * DASHBOARD
 */
$route['dashboard'] = "Dashboard/index";

/*
 * Users
 */
$route['utilizadores'] = "User/index";
$route['detalhes_utilizador/(:num)'] = "User/Details/$1";
$route['editar_utilizador/(:num)'] = "User/Edit/$1";
$route['editar_utilizador_'] = "User/Update";

/*
 * Produtos
 */
$route['produtos'] = "Product/index";
$route['adicionar_produto'] = "Product/add";
$route['adicionar_produto_'] = "Product/Save";
$route['editar_produto/(:num)'] = "Product/Edit/$1";
$route['editar_produto_'] = "Product/Update";
$route['detalhes_produto/(:num)'] = "Product/Detail/$1";
$route['eliminar_produto/(:num)'] = "Product/Delete/$1";
