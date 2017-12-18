<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Alumnos_model','Inicio_model'));
        $this->load->helper('url','form','security');
        $this->load->database('default');
    }



    public function view($pagina  = 'index')
    {
        if (!file_exists(APPPATH.'views/alumnos/'.$pagina.'.php'))
        {
            show_404();
        }

        $data['titulo'] = ucfirst('ENE MORELIA - '.date('Y'));
        $data['title'] = strtoupper('ENE MORELIA');
        $data['menu'] = $this->Inicio_model->menu();
        $data['escuela'] = $this->Inicio_model->escuela();


        $this->load->view('template/header',$data);
        $this->load->view('template/menu');
        $this->load->view('alumnos/'.$pagina, $data);
        $this->load->view('template/footer');

    }


}

/* End of file Alumnos.php */
/* Location: ./application/controllers/Alumnos.php */