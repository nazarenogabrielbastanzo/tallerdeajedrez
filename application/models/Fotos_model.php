<?php
class Fotos_model extends CI_Model
{
    public function getAll() 
    {
        $result = $this->db->get('albums');
        $fotos = $result->result_array();
        return $fotos;
    }

    public function getOne($id)
    {
        $result = $this->db->query('SELECT * FROM albums WHERE album_id = ' . $id);
        $album = $result->result_array();
        return $album;
    }
}
?>