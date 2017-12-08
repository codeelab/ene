<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }


    public function alumnosEne($matricula)
    {
        $this->db->limit(1);
        $this->db->like('matricula', $matricula);
        return $this->db->get('matricula')->result_array();
    }




}

/* End of file Registro_model.php */
/* Location: ./application/models/Registro_model.php */