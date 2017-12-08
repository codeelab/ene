<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio_model extends CI_Model {

    public function menu()
    {
        return $this->db->select('id_menu, nombre, url, orden')
                        ->from('menu')
                        ->order_by('orden', 'ASC')
                        ->get()->result();
    }

    public function escuela()
    {
        return $this->db->select('id_escuela, nombre_corto, nombre_completo, direccion, colonia, telefono1, telefono2, convocatoria, twitter, facebook, instagram, youtube')
                        ->from('escuela')
                        ->get()->result();
    }

    public function costo()
    {
        return $this->db->select('*')
                        ->from('costos')
                        ->get()->result();
    }

    public function ponente()
    {
        return $this->db->select('*')
                        ->from('ponentes')
                        ->get()->result();
    }

    public function taller()
    {
        return $this->db->select('*')
                        ->from('taller')
                        ->get()->result();
    }

    public function medio()
    {
        return $this->db->select('*')
                        ->from('medios')
                        ->get()->result();
    }







} // FIN DE LA CLAE MODELO