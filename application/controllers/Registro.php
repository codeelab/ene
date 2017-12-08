<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Registro_model');
        $this->load->helper('url','form','security');
        $this->load->database('default');
    }

        public function buscarAlumno()
        {
            $matricula = $this->security->xss_clean($this->input->post('matricula'));
            $data = $this->Registro_model->alumnosEne($matricula);
            //print_r($data);
            //exit;
            echo json_encode($data);
        }


}

/* End of file Registro.php */
/* Location: ./application/controllers/Registro.php */