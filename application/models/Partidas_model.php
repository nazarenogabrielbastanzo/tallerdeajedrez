<?php
class Partidas_model extends CI_Model
{
    public function getAll() 
    {
        $result = $this->db->get('partidas');
        $partidas = $result->result_array();
        return $partidas;
    }

    public function getOne($id)
    {
        $result = $this->db->query('SELECT * FROM partidas WHERE partida_id = ' . $id);
        $partidas = $result->result_array();
        return $partidas;
    }

    public function nueva($blancas, $negras, $resultado, $fecha, $evento, $vinculo)
    {
        $datos = array(
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