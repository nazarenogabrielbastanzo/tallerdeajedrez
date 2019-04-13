<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frases_model extends CI_Model
{
    public function nueva ( $frase, $autor )
    {
        $datos = array(
            'frase' => $frase,
            'autor' => $autor
        );
        if ( $this->db->insert('frases', $datos) ) {
            return true;
        } else {
            return false;
        }
    }

    public function getAll()
    {
        $result = $this->db->get('frases');
        $frases = $result->result_array();
        return $frases;
    }
}