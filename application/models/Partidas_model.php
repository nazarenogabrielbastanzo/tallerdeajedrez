<?php
class Partidas_model extends CI_Model
{
  public function getAllGames()
  {
    $result = $this->db->query('SELECT * FROM partidas');
    $games = $result->result_array();
    return $games;
  }

  public function getRango() {
    return 25;
  }

  public function getAll($pagina)
  {
    $result1 = $this->db->query('SELECT * FROM partidas');
    $partidas1 = $result1->result_array();
    $offset = ($pagina > 0 && $pagina < sizeof($partidas1)) ? (($pagina * $this->getRango()) - $this->getRango()) : (sizeof($partidas1));

    $orden = 'DESC';

    $result = $this->db->query('SELECT * FROM partidas ORDER BY partida_id ' . $orden . ' LIMIT ' . $this->getRango() . ' OFFSET ' . $offset);
    $partidas = $result->result_array();
    return $partidas;
  }

  public function getOne($id)
  {
    $result = $this->db->query('SELECT * FROM partidas WHERE partida_id = ' . $id);
    $partidas = $result->result_array();
    return $partidas;
  }

  public function nueva($partida_id, $blancas, $negras, $resultado, $fecha, $evento, $vinculo)
  {
    $datos = array(
      'partida_id' => $partida_id,
      'blancas' => $blancas,
      'negras' => $negras,
      'resultado' => $resultado,
      'fecha' => $fecha,
      'evento' => $evento,
      'vinculo' => $vinculo
    );
    if ( $this->db->insert('partidas', $datos) ) {
      return true;
    } else {
      return false;
    }
  }
}
?>
