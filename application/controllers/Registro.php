<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Registro_model');
        $this->load->library(array('session','form_validation','user_agent'));
        $this->load->helper(array('url','form','security'));
        $this->load->database('default');
    }

        public function buscarAlumno()
        {
            $matricula = $this->security->xss_clean($this->input->post('matricula',TRUE));
            $data = $this->Registro_model->matriculasEne($matricula);
            $array  = array();
                foreach ($data as $row) {
                    $array[] = $row->matricula;
                    echo json_encode($array);
                }
            //print_r($data);
            //exit;
            //echo json_encode($data);
        }


        public function alumno()
        {
                    //$mat = '131611330000';
                    $matricula  = $this->security->xss_clean($this->input->post('matricula'));
                    $array       = $this->Registro_model->alumnosENE($matricula);

                    echo json_encode($array);

        }


        public function registro_alumno()
        {
            if($this->input->post("submit"))
            {
                $this->load->library('form_validation');
                $this->form_validation->set_rules('matricula', 'Matricula', 'required');


                $this->form_validation->set_message('required', 'El campo %s es obligatorio');


                if ($this->form_validation->run() == FALSE)
                {
                    //echo 'error';
                    $this->session->set_flashdata("error", "No se ha concretado tu registro, revisa que todos los campos esten llenos.");
                    redirect('alumno');
                }
                else
                {
                    $this->session->set_flashdata("error", "Hubo un problema al intentar registrase, intentelo de nuevo!");
                    redirect('alumno');
                }
            }else{
                    $this->session->set_flashdata("error", "No se han cargado datos!");
                    redirect('alumno');
            }

        }












}

/* End of file Registro.php */
/* Location: ./application/controllers/Registro.php */