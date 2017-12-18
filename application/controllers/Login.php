<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Login_model','Inicio_model'));
        $this->load->library(array('session','form_validation','email','user_agent'));
        $this->load->helper(array('url','form','security'));
        $this->load->database('default');
    }

    public function index()
    {
        switch ($this->session->userdata('rol_id')) {
            case '':
                $data['titulo'] = ucfirst('ENE MORELIA - '.date('Y'));
                $data['title'] = strtoupper('ENE MORELIA');
                $data['escuela'] = $this->Inicio_model->escuela();
                $data['menu'] = $this->Inicio_model->menu();
                $this->session->set_flashdata('error', 'Usuario no registrado!');
                $this->load->view('template/header',$data);
                $this->load->view("template/menu");
                $this->load->view('paginas/login');
                $this->load->view("template/footer");
                break;
            case '1':
                redirect(base_url().'super/index');
                break;
            case '2':
                redirect(base_url().'admin/index');
                break;
            case '3':
                redirect(base_url().'estadisticas/index');
                break;
            case '4':
                redirect(base_url().'contabilidad/index');
                break;
            case '5':
                redirect(base_url().'alumnos/index');
                break;
            case '6':
                redirect(base_url().'calidad/index');
                break;
            case '7':
                redirect(base_url().'estudiantes/index');
                break;
            case '8':
                redirect(base_url().'asistentes/index');
                break;
            case '9':
                redirect(base_url().'material/index');
                break;
            case '10':
                redirect(base_url().'pagos/index');
                break;
            case '11':
                redirect(base_url().'registro/index');
                break;
            default:
                $data['titulo'] = ucfirst('ENE MORELIA - '.date('Y'));
                $data['title'] = strtoupper('ENE MORELIA');
                $data['escuela'] = $this->Inicio_model->escuela();
                $data['menu'] = $this->Inicio_model->menu();
                $this->session->set_flashdata('error', 'Usuario no registrado!');
                $this->load->view('template/header',$data);
                $this->load->view("template/menu");
                $this->load->view('paginas/login');
                $this->load->view("template/footer");
                break;
        }
    }


    public function acceso()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Nombre de Usuario', 'required|trim|max_length[150]|xss_clean');
        $this->form_validation->set_rules('password', 'Contraseña', 'required|trim|min_length[5]|max_length[150]|xss_clean');


        $this->form_validation->set_message('required', '%s requerido');
        $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s caracteres.');
        $this->form_validation->set_message('max_length', 'El %s no puede tener más de %s carácteres');

            if($this->form_validation->run() == FALSE)
            {
                $data['titulo'] = ucfirst('ENE MORELIA - '.date('Y'));
                $data['title'] = strtoupper('ENE MORELIA');
                $data['escuela'] = $this->Inicio_model->escuela();
                $data['menu'] = $this->Inicio_model->menu();
                $this->load->view('template/header',$data);
                $this->load->view("template/menu");
                $this->load->view('paginas/login');
                $this->load->view("template/footer");
            }else{

                $username = $this->input->post('username');
                $password = sha1($this->input->post('password'));

                $check_user = $this->Login_model->login($username,$password);

                if($check_user == TRUE)
                {
                    $data = array(
                    'is_logued_in'  =>      TRUE,
                    'id_usuarios'   =>      $check_user->id_usuarios,
                    'nombre'        =>      $check_user->nombre,
                    'a_paterno'     =>      $check_user->a_paterno,
                    'a_materno'     =>      $check_user->a_materno,
                    'c_personal'    =>      $check_user->c_personal,
                    'username'      =>      $check_user->username,
                    'rol_id'        =>      $check_user->rol_id
                    );
                    $this->session->set_userdata($data);
                    $this->index();
                }else {
                     $this->session->set_flashdata('error', 'Usuario no registrado!');
                    redirect('login');
                }
            }
    }

    public function salir()
    {
        $array_sesiones = array('id_usuarios' => '', 'nombre' => '', 'a_paterno' => '', 'a_materno' => '', 'c_personal' => '', 'username' => '', 'rol_id' => '');
        $this->session->unset_userdata($array_sesiones);
        $this->session->sess_destroy();
        redirect('login','refresh');
    }




}
