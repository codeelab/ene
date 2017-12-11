<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Registro_model','Inicio_model'));
        $this->load->library(array('session','form_validation','user_agent'));
        $this->load->helper(array('url','form','security'));
        $this->load->database('default');
    }

    public function view($pagina  = 'alumno')
    {
        if (!file_exists(APPPATH.'views/paginas/'.$pagina.'.php'))
        {
            show_404();
        }

        $data['titulo'] = ucfirst('ENE MORELIA - '.date('Y'));
        $data['title'] = strtoupper('ENE MORELIA');
        $data['escuela'] = $this->Inicio_model->escuela();
        $data['menu'] = $this->Inicio_model->menu();
        $data['talleres'] = $this->Inicio_model->talleres();
        $data['medios'] = $this->Inicio_model->medio();
        $data['taller'] = $this->Inicio_model->taller();
        $data['instituto'] = $this->Inicio_model->institucion();

        $this->load->view('template/header',$data);
        $this->load->view('paginas/'.$pagina, $data);
        $this->load->view('template/footer');

    }

        public function buscarAlumno()
        {
            $resultado = $this->db->get('matricula');
            echo json_encode($resultado->result());
        }


        public function alumno()
        {
            //$matricula = '131611330000';
            $matricula   = $this->security->xss_clean($this->input->post('matricula'));
            $array       = $this->Registro_model->alumnosENE($matricula);

            echo json_encode($array);

        }

        public function escuela_tutora()
        {
            //$id = '1';
            $id   = $this->security->xss_clean($this->input->post('escuela_id'));
            $array       = $this->Registro_model->tutoras($id);

            echo json_encode($array);

        }

        public function validate_email($c_personal)
        {
              if (preg_match('/^[A-Z0-9._%+-]+@(?:[A-Z]{4}|gmail|yahoo|outlook|hotmail)+\.(com|mx|es)+$/i', $c_personal))
              {
                return true; // it matched, return true or false if you want opposite
              }
              else
              {
                $this->form_validation->set_message('validate_email', 'Sólo esta permitido el uso de Correos: Gmail, Yahoo, Outlook, Hotmail!');
                return false;
              }
        }

         //validamos el username con ajax
        public function comprobar_usuario_ajax()
        {
            $username = $this->input->post('username');
            $comprobar_username = $this->Registro_model->verifica_username($username);
            if ($comprobar_username == $username) {
                $this->form_validation->set_message('comprobar_usuario_ajax', 'El usuario: <b>'.$username.'</b> ,ya existe ¿Quieres volver a intentarlo?.!');
                return FALSE;
            } else {
                echo '<div style="display:none">1</div>';
                return TRUE;
            }
        }


        //---------------------------------
        // VERIFICAR LA DISPONIBILIDAD DEL USUARIO
        //---------------------------------
        function checar_usuario()
        {
            $username = trim($this->input->post('username'));
            $get_result = $this->Registro_model->disponibilidad_usuario($username);
            if(!$get_result )
            echo '<span class="text-danger">El Usuario ya existe. ¿Quieres volver a intentarlo?.</span>';
            else
            echo '<span class="text-success">Usuario disponible</span>';
        }

        public function registro_alumno()
        {

            $this->form_validation->set_rules('matricula', 'Matricula', 'trim|required|numeric|xss_clean');
            $this->form_validation->set_rules('c_personal', 'Correo Personal', 'trim|required|callback_validate_email|valid_email|xss_clean');
            $this->form_validation->set_rules('c_personal2', 'Confirmación Correo', 'trim|required|callback_validate_email|valid_email|matches[c_personal]|xss_clean');
            $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|xss_clean');
            $this->form_validation->set_rules('a_paterno', 'Apellido Paterno', 'trim|required|xss_clean');
            $this->form_validation->set_rules('a_materno', 'Apellido Materno', 'trim|required|xss_clean');
            $this->form_validation->set_rules('terminos', 'Terminos', 'trim|required|xss_clean');
            $this->form_validation->set_rules('username', 'Usuario', 'required|trim|min_length[2]|max_length[100]|callback_comprobar_usuario_ajax|xss_clean');

            $this->form_validation->set_message('required', 'El campo %s es obligatorio');


            if ($this->form_validation->run() == FALSE)
            {
                $this->view();
            }
            else
            {
                $datas = array(
                    'matricula'    => $this->security->xss_clean($this->input->post('matricula')),
                    'nombre'       => $this->security->xss_clean($this->input->post('nombre')),
                    'a_paterno'    => $this->security->xss_clean($this->input->post('a_paterno')),
                    'a_materno'    => $this->security->xss_clean($this->input->post('a_materno')),
                    'c_personal'   => $this->security->xss_clean($this->input->post('c_personal')),
                    'username'     => $this->security->xss_clean($this->input->post('username')),
                    'password'     => $this->security->xss_clean($this->input->post('password')),
                    'terminos'     => $this->security->xss_clean($this->input->post('terminos')),
                    'rol_id'       => $this->security->xss_clean($this->input->post('rol_id')),
                    'status_id'    => $this->security->xss_clean($this->input->post('status_id'))
                );
                $this->Registro_model->registro_alumnoENE($datas);
                redirect('exito');
            }
        }





}

/* End of file Registro.php */
/* Location: ./application/controllers/Registro.php */