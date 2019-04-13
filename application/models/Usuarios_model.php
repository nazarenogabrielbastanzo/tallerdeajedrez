<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{
    public function nuevo($username, $password)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $data = array(
            'username' => $username,
            'contrasena' => $password
        );
        $this->db->insert('usuarios', $data);
    }

    public function verificar($username, $password)
    {
        $result = $this->db->get('usuarios');
        $usuario = $result->result_array();
        if ( $username == $usuario[0]['username'] &&  password_verify($password, $usuario[0]['contrasena']) ) {
            return true;
        } else {
            return false;
        }
    }

}
?>