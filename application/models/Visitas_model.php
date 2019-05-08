<?php
class Visitas_model extends CI_Model
{
  public function updateVisitas($visita)
  {
    if ($this->db->query("UPDATE visitas SET visitas = '$visita'")) {
      return true;
    } else {
      return false;
    }
  }

  public function updateVisitasFacebook($vf)
  {
    if ($this->db->query("UPDATE visitas SET visitas_facebook = '$vf'")) {
      return true;
    } else {
      return false;
    }
  }

  public function insertVisitas($visita) {
    $datos = array(
      'visitas' => $visita,
      'fecha_inicio' => '06/04/2019'
    );
    if ($this->db->insert('visitas', $datos)) {
      return true;
    } else {
      return false;
    }
  }

  public function getVisitas()
  {
    $resultado = $this->db->query('SELECT * FROM visitas');
    $visitas = $resultado->result_array();
    return $visitas;
  }

  public function getVisitasFacebook()
  {
    $res = $this->db->query('SELECT * FROM visitas');
    $vf = $res->result_array();
    return $vf;
  }
}