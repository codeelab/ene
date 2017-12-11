<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function alumnosENE($matricula)
    {
        $this->db->select('nombre, a_paterno, a_materno');
        $this->db->where('matricula',$matricula);
        $query = $this->db->get('matricula');
        return $query->result();
    }

    public function alumnosENEtaller($taller_id)
    {
        $this->db->select('cupo');
        //$this->db->where('cupo = 12');
        $this->db->where('id_taller',$taller_id);
        $query = $this->db->get('taller');
        return $query->result();
    }

    public function verifica_username($username)
    {
        $this->db->where('username',$username);
        $consulta = $this->db->get('usuarios');
         if($consulta->num_rows() == 1)
         {
            $row = $consulta->row();
            return $row->username;
         }
    }

    function disponibilidad_usuario($username)
    {
        if(!$this->form_validation->is_unique($username, 'usuarios.username')){

            return false;

        }else{
            return true;
        }
    }

    public function registro_alumnoENE($datas)
    {
        return $this->db->insert('usuarios',$datas);
    }

    public function tutoras($id)
    {
        $this->db->select('nombre, a_paterno, a_materno');
        $this->db->where('escuela',$id);
        $query = $this->db->get('tutoras');
        return $query->result();
    }



}

/* End of file Registro_model.php */
/* Location: ./application/models/Registro_model.php */