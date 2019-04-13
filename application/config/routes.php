<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = 'errors/error_404';
$route['403'] = 'errors/error_403';
$route['translate_uri_dashes'] = FALSE;

$route['partidas']['GET'] = 'home/partidas_get';
$route['fotos']['GET'] = 'home/fotos_get';
$route['frases']['GET'] = 'home/frases_get';
$route['celular']['GET'] = 'home/celular_get';
// A donde dice (:any) podes usar (:num) todo depende del dato que recibas, si es un string o numero.
$route['partida-(:num)']['GET'] = 'home/partida_get/$1';
$route['album-(:num)']['GET'] = 'home/album_get/$1';
$route['partidas-amistosas']['GET'] = 'home/partidas_amistosas_get';
$route['partida-tringov-fischer']['GET'] = 'home/partida_tringov_fischer_get';

$route['contacto']['GET'] = 'home/contacto_get';
$route['contacto']['POST'] = 'home/contacto_get';

$route['admin']['GET'] = 'home/admin_get';
$route['admin']['POST'] = 'home/admin_get';

$route['panel']['GET'] = 'home/admin_post';
$route['panel']['POST'] = 'home/admin_post';

$route['new-game']['GET'] = 'home/new_game';
$route['new-game']['POST'] = 'home/new_game';

$route['cerrar-sesion']['GET'] = 'home/close_session';

$route['nueva-frase']['GET'] = 'home/nueva_frase_get';
$route['nueva-frase']['POST'] = 'home/nueva_frase_post';

$route['nuevo-album']['GET'] = 'upload_files';
$route['nuevo-album']['POST'] = 'upload_files';

$route['funcionalidades']['GET'] = 'home/funcionalidades';