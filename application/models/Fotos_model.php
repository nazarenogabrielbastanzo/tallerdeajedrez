<?php
class Fotos_model extends CI_Model
{
    public function getAllFotos()
    {
        $result = $this->db->query('SELECT * FROM albums');
        $fotos = $result->result_array();
        return $fotos;
    }

    public function getRango() {
        return 7;
    }

    public function getAll($pagina) 
    {
      $rango = $this->getRango(); // Cantidad de fotos a mostrar por página.
      $result1 = $this->db->query('SELECT * FROM albums');
      $fotos1 = $result1->result_array();
      $offset = ($pagina > 0 && $pagina < sizeof($fotos1)) ? (($pagina * $rango) - $rango) : (sizeof($fotos1));

      $orden = 'DESC';

      $result = $this->db->query('SELECT * FROM albums ORDER BY album_id ' . $orden . ' LIMIT ' . $rango . ' OFFSET ' . $offset);
      $photos = $result->result_array();
      return $photos;
    }

    public function getOne($id)
    {
        $result = $this->db->query('SELECT * FROM albums WHERE album_id = ' . $id);
        $album = $result->result_array();
        return $album;
    }
}
?>