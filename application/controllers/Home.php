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
		$this->load->view('inicio_view', $datos);
    }
    
	public function partidas_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Partidas';
		$datos['partidas'] = $this->PM->getAll();
	    $this->load->view('partidas_view', $datos);
	}

	public function fotos_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Fotos';
		$datos['fotos'] = $this->FM->getAll();
		$content = $this->load->view('fotos_view', $datos);
	}

	public function frases_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Frases';
		$datos['frase'] = $this->FRM->getAll();
		$this->load->view('frases_view', $datos);
	}

	public function celular_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Celular';
		$this->load->view('celular_view', $datos);
	}

	public function partida_get($id)
	{
		$datos['titulo'] = 'Taller de Ajedrez - Partida';
		$datos['partidas'] = $this->PM->getOne($id);
		$this->load->view('partida_view', $datos);
	}

	public function album_get($id)
	{
		$datos['titulo'] = 'Taller de Ajedrez - Álbum';
		$datos['album'] = $this->FM->getOne($id);
		$this->load->view('album_view', $datos);
	}

	public function partidas_amistosas_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Partidas Amistosas';
		$this->load->view('partidas_amistosas_view', $datos);
	}

	public function partida_tringov_fischer_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Partida Tringov Fischer';
		$this->load->view('partida_tringov_fischer_view', $datos);
	}

	public function contacto_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Contacto';		
		$this->load->view('contacto_view', $datos);
	}

	public function admin_get()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Login Administrador';
		$this->load->view('admin/login', $datos);
	}

	public function admin_post()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Panel';
		$this->load->view('admin/panel', $datos);
	}

	public function new_game()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Nueva Partida';
		$this->load->view('admin/new_game', $datos);
	}

	public function new_game_insert()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Nueva Partida';
		$this->load->view('admin/new_game_insert', $datos);
	}

	public function close_session()
	{
		$datos['titulo'] = 'Taller de Ajedrez - Cerrar Sesión';
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
		$this->load->view('funcionalidades', $datos);
	}

}