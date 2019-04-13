<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct()
  {
	  parent::__construct();
  }

	public function index()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Partidas - Fotos - Frases';
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

	public function fotos_get($pagina)
	{
		$datos['titulo'] = 'Taller de Ajedrez - Fotos';
    $datos['current'] = 'Fotos';
		$datos['fotos'] = $this->FM->getAll($pagina);
		$datos['photos'] = $this->FM->getAllFotos();
		$datos['pagina'] = $pagina;
		
		$totalAlbums = sizeof($datos['photos']);
		$cantidadAlbumsPorPagina = sizeof($datos['fotos']);
		$rango = $this->FM->getRango();
		// Ver consulta SQL
		$primera = $totalAlbums - ($pagina - 1) * $rango;
		$ultima = $cantidadAlbumsPorPagina == $rango ? $totalAlbums - $pagina * $rango + 1 : 1;

		$datos['totalAlbums'] = $totalAlbums;
		$datos['primera'] = $primera;
		$datos['ultima'] = $ultima;

		$this->load->view('fotos_view', $datos);
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
		$this->load->view('partida_view', $datos);
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
		$this->load->view('admin/new_game', $datos);
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

}
