<?php
class Busqueda_model extends CI_Model
{
  public function buscarPartidas()
  {
    $palabraClave = $_GET['PalabraClave'];

    $aKeyword = explode(" ", $palabraClave);

    if (!empty($aKeyword[0])) {
      for($i = 0; $i < count($aKeyword); $i++) {
        $query = "SELECT * FROM partidas WHERE
          blancas like '%{$aKeyword[$i]}%' OR
          negras like '%{$aKeyword[$i]}%' OR
          resultado like '%{$aKeyword[$i]}%' OR
          fecha like '%{$aKeyword[$i]}%' OR
          evento like '%{$aKeyword[$i]}%'";
      }
      
      $resultado = $this->db->query($query);
      $busqueda = $resultado->result_array();

      /* $busqueda = [
        [
          'partida_id' => 'partida_id',
          'blancas' => 'resultadoblancas',
          'negras' => 'resultadonegras',
          'resultado' => 'resultadoresultado',
          'fecha' => 'resultadofecha',
          'evento' => 'resultadoevento'
        ],
        ...,
        ..., etc.
      ]; */

      /* $palabraClave = array('PalabraClave' => $palabraClave); // ( $palabraClave = $_GET['PalabraClave'] )
      array_push($busqueda, $palabraClave); */

      /* $busqueda = [
        [
          'partida_id' => 'partida_id',
          'blancas' => 'resultadoblancas',
          'negras' => 'resultadonegras',
          'resultado' => 'resultadoresultado',
          'fecha' => 'resultadofecha',
          'evento' => 'resultadoevento'
        ],
        ...,
        ..., etc.,
        [
          'PalabraClave' => $palabraclave
        ]
      ]; */

      return $busqueda;
    }
  }
    
  public function buscarFotos()
  {
    $aKeyword = explode(" ", $_GET['PalabraClave']);

    if (!empty($aKeyword[0])) {
      for($i = 0; $i < count($aKeyword); $i++) {
        $query = "SELECT * FROM albums WHERE
          album like '%{$aKeyword[$i]}%' OR
          lugar like '%{$aKeyword[$i]}%' OR
          fecha like '%{$aKeyword[$i]}%'";
      }
      
      $resultado = $this->db->query($query);
      $busqueda = $resultado->result_array();
      return $busqueda;
    }
  }

  public function buscarFrases()
  {
    $aKeyword = explode(" ", $_GET['PalabraClave']);

    if (!empty($aKeyword[0])) {
      for($i = 0; $i < count($aKeyword); $i++) {
        $query = "SELECT * FROM frases WHERE
          frase like '%{$aKeyword[$i]}%'
          OR autor like '%{$aKeyword[$i]}%'";
      }
      
      $resultado = $this->db->query($query);
      $busqueda = $resultado->result_array();
      return $busqueda;
    }
  }
}
?>
