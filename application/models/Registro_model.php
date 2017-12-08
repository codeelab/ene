<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }


    public function matriculasEne($matricula)
    {
        $this->db->select('matricula');
        $this->db->like('matricula', $matricula);
        $query = $this->db->get('matricula');
        return $query->result();
    }

    public function alumnosENE($matricula)
    {
        $this->db->select('nombre, a_paterno, a_materno');
        //$this->db->where('matricula = 131611330000');
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


    public function guardar()
    {
        echo 'guardado';
    }





}

/* End of file Registro_model.php */
/* Location: ./application/models/Registro_model.php */