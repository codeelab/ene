<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Inicio_model','Registro_model'));
        $this->load->helper('url','form','security');
        $this->load->database('default');
    }



	public function view($pagina  = 'inicio')
	{
		if (!file_exists(APPPATH.'views/paginas/'.$pagina.'.php'))
		{
			show_404();
		}

		$data['titulo'] = ucfirst('ENE MORELIA - '.date('Y'));
		$data['title'] = strtoupper('ENE MORELIA');
		$data['menu'] = $this->Inicio_model->menu();
		$data['escuela'] = $this->Inicio_model->escuela();
		$data['costo'] = $this->Inicio_model->costo();
		$data['ponente'] = $this->Inicio_model->ponente();
		$data['talleres'] = $this->Inicio_model->taller();
        $data['medios'] = $this->Inicio_model->medio();

		$this->load->view('template/header',$data);
		$this->load->view('paginas/'.$pagina, $data);
		$this->load->view('template/footer');

	}

    public function taller()
    {
        $taller_id   = $this->security->xss_clean($this->input->post('taller'));
        $array  = $this->Registro_model->alumnosENEtaller($taller_id);

        echo json_encode($array);

    }


} //CIERRE DE LA CLASE
