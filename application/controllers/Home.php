<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Partidas - Torneos - Fotos - Frases';
		$datos['current'] = 'Inicio';
		$this->load->view('inicio_view', $datos);
	}

	public function partidas_get($pagina)
	{
		$datos['titulo'] = 'Taller de Ajedrez - Partidas (Página ' . $pagina . ')';
		$datos['current'] = 'Partidas';
		$datos['partidas'] = $this->PM->getAll($pagina);
		$datos['games'] = $this->PM->getAllGames();
		$datos['pagina'] = $pagina;

		// Para aclarar los rangos de cada página:
		$totalPartidas = sizeof($datos['games']);
		$cantidadPartidasPorPagina = sizeof($datos['partidas']);
		$rango = $this->PM->getRango();
		// Para orden ASC (ver la consulta SQL):
		//$primera = ($pagina * $rango) - ($rango - 1);
		//$ultima = $cantidadPartidasPorPagina == $rango ? $pagina * $rango : $totalPartidas;

		$primera = $totalPartidas - ($pagina - 1) * $rango;
		$ultima = $cantidadPartidasPorPagina == $rango ? $totalPartidas - $pagina * $rango + 1 : 1;

		$datos['primera'] = $primera;
		$datos['ultima'] = $ultima;
		$datos['totalPartidas'] = $totalPartidas;
		// :Para aclarar los rangos de cada página

		$this->load->view('partidas_view', $datos);
	}

	public function resultados_busqueda_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Resultados de la Búsqueda';
		$datos['current'] = 'Resultados de la Búsqueda';
		$datos['resultadosPartidas'] = $this->BM->buscarPartidas();
		$datos['resultadosFotos'] = $this->BM->buscarFotos();
		$datos['resultadosFrases'] = $this->BM->buscarFrases();
		$this->load->view('resultados-busqueda_view', $datos);
	}

	public function fotos_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Fotos';
		$datos['current'] = 'Fotos';
		$this->load->view('fotos_view', $datos);
	}

	public function fotos2_get($id)
	{
		$datos['titulo'] = 'Taller de Ajedrez - Fotos';
		$datos['current'] = 'Fotos del Álbum ' . $id;
		$datos['id'] = $id;
		$this->load->view('fotos2_view', $datos);
	}

	public function frases_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Frases';
		$datos['current'] = 'Frases';
		$datos['frase'] = $this->FRM->getAll();
		$this->load->view('frases_view', $datos);
	}

	public function dispositivos_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Dispositivos';
		$datos['current'] = 'Dispositivos';
		$this->load->view('dispositivos_view', $datos);
	}

	public function partida_get($id)
	{
		$datos['titulo'] = 'Taller de Ajedrez - Partida ' . $id;
		$datos['current'] = 'Partida';
		$datos['partida'] = $this->PM->getOne($id);
		$datos['games'] = $this->PM->getAllGames();
		$datos['id'] = $id;
		$this->load->view('visor/partida_view', $datos);
	}

	public function album_get($id)
	{
		$datos['titulo'] = 'Taller de Ajedrez - Álbum';
		$datos['current'] = 'Fotos';
		$datos['album'] = $this->FM->getOne($id);
		$this->load->view('album_view', $datos);
	}

	public function partidas_amistosas_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Partidas Amistosas';
		$datos['current'] = 'Partidas Amistosas';
		$this->load->view('partidas_amistosas_view', $datos);
	}

	public function partida_tringov_fischer_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Partida Tringov vs. Fischer';
		$datos['current'] = 'Partida Tringov vs. Fischer';
		$this->load->view('partida_tringov_fischer_view', $datos);
	}

	public function contacto_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Contacto';
		$datos['current'] = 'Contacto';
		$this->load->view('contacto_view', $datos);
	}

	public function admin_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Login Administrador';
		$datos['current'] = 'Login Administrador';
		$this->load->view('admin/login', $datos);
	}

	public function admin_post()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Panel';
		$datos['current'] = 'Panel';
		$this->load->view('admin/panel', $datos);
	}

	public function new_game()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Nueva Partida';
		$datos['current'] = 'Nueva Partida';

		if ($_POST) {
			$this->guardar_archivo();
		}

		$this->load->view('admin/new_game', $datos);
	}

	private function guardar_archivo()
	{
		$mi_archivo = 'upload';
		$config['upload_path'] = "assets/img/tooltips/";
		//$config['file_name'] = "nombre_archivo";
		$config['allowed_types'] = "jpg|png";
		$config['max_size'] = "5000";
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload($mi_archivo)) {
			//*** ocurrio un error
			echo $this->upload->display_errors();
			return;
		}

		//var_dump($this->upload->data());
	}

	public function new_game_insert()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Nueva Partida';
		$datos['current'] = 'Nueva Partida';
		$this->load->view('admin/new_game_insert', $datos);
	}

	public function close_session()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Cerrar Sesión';
		$datos['current'] = 'Cerrar Sesión';
		$this->load->view('admin/cerrar_sesion', $datos);
	}

	public function nueva_frase_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Nueva Frase';
		$this->load->view('admin/nueva_frase_get', $datos);
	}

	public function nueva_frase_post()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Nueva Frase';
		$this->load->view('admin/nueva_frase_post', $datos);
	}

	public function nuevo_album_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Nuevo Álbum';
		$this->load->view('admin/nuevo_album_get', $datos);
	}

	public function funcionalidades()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Funcionalidades';
		$datos['current'] = 'Funcionalidades';
		$this->load->view('funcionalidades', $datos);
	}

	public function politicas_de_privacidad()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Políticas de Privacidad';
		$datos['current'] = 'Politicas de Privacidad';
		$this->load->view('politicas_de_privacidad_view', $datos);
	}

	public function registro_admin()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Nuevo admin';
		$datos['current'] = 'Nuevo Admin';
		$this->load->view('admin/nuevo-admin', $datos);
	}

	public function torneos_get() {
		$datos['titulo'] = 'Taller de Ajedrez - Torneos';
		$datos['current'] = 'Torneos';
		$this->load->view('visor/torneos_view', $datos);
	}

	public function noticias_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Noticias';
		$datos['current'] = 'Noticias';
		$this->load->view('noticias_view', $datos);
	}

	public function buscar_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Buscar';
		$datos['current'] = 'Buscar';
		$this->load->view('buscar_view', $datos);
	}
}
