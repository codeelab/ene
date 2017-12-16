<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('login_model','Inicio_model'));
        $this->load->library(array('session','form_validation','email','user_agent'));
        $this->load->helper(array('url','form'));
        $this->load->database('default');
    }

    public function index()
    {
        switch ($this->session->userdata('puesto')) {
            case '':
                $data['titulo'] = ucfirst('ENE MORELIA - '.date('Y'));
                $data['title'] = strtoupper('ENE MORELIA');
                $data['escuela'] = $this->Inicio_model->escuela();
                $data['menu'] = $this->Inicio_model->menu();
                $this->session->set_flashdata('correcto', 'Usuario registrado correctamente!');
                $this->load->view('template/header',$data);
                $this->load->view("template/menu");
                $this->load->view('paginas/login');
                $this->load->view("template/footer");
                break;
            case '1':
                redirect(base_url().'admin/index');
                break;
            case '2':
                redirect(base_url().'organizador/index');
                break;
            case '3':
                redirect(base_url().'sncyt/index');
                break;
            default:
                $data['titulo'] = ucfirst('ENE MORELIA - '.date('Y'));
                $data['title'] = strtoupper('ENE MORELIA');
                $data['escuela'] = $this->Inicio_model->escuela();
                $data['menu'] = $this->Inicio_model->menu();
                $this->session->set_flashdata('error', 'Usuario registrado correctamente!');
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
                $this->index();
            }else{

                $username = $this->input->post('username');
                $password = sha1($this->input->post('password'));

                $check_user = $this->login_model->login($username,$password);

                if($check_user == TRUE)
                {
                    $data = array(
                    'is_logued_in'  =>      TRUE,
                    'id_usuarios'   =>      $check_user->id_usuarios,
                    'puesto'        =>      $check_user->puesto,
                    'nombre'        =>      $check_user->nombre,
                    'a_paterno'     =>      $check_user->a_paterno,
                    'a_materno'     =>      $check_user->a_materno,
                    'username'      =>      $check_user->username,
                    'password'      =>      $check_user->password
                    );
                    $this->session->set_userdata($data);
                    $this->index();
                }else {
                     $this->session->set_flashdata('correcto', 'Usuario registrado correctamente!');
                    redirect('login');
        }
            }
    }

    public function salir()
    {
        $array_sesiones = array('user' => '', 'nombre' => '', 'a_paterno' => '', 'a_materno' => '');
        $this->session->unset_userdata($array_sesiones);
        $this->session->sess_destroy();
        redirect("login");
    }




}
