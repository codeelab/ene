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

    public function talleres()
    {
        return $this->db->select('*')
                        ->from('taller')
                        ->get()->result();
    }

    public function taller(){
        $options = $this->db->select('id_taller, nombres')
                        ->get('taller')->result();
        $options_arr;
        $options_arr['#'] = 'Elije un taller';
        // Format for passing into form_dropdown function
        foreach ($options as $option) {
            $options_arr[$option->id_taller] = $option->nombres;
        }
        return $options_arr;
    }

    public function medio(){
        $options = $this->db->select('id_medio, nombre_medio')
                        ->get('medios')->result();
        $options_arr;
        $options_arr[''] = 'Elije un Medio';
        // Format for passing into form_dropdown function
        foreach ($options as $option) {
            $options_arr[$option->id_medio] = $option->nombre_medio;
        }
        return $options_arr;
    }


    public function institucion(){
        $options = $this->db->select('id_institucion, nombre_ins')
                        ->get('institucion')->result();
        $options_arr;
        $options_arr[''] = 'Elije tu Institución Educativa';
        // Format for passing into form_dropdown function
        foreach ($options as $option) {
            $options_arr[$option->id_institucion] = $option->nombre_ins;
        }
        return $options_arr;
    }





} // FIN DE LA CLAE MODELO