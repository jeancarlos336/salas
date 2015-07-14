<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class sesion extends CI_Controller {

  
    public function index(){
        $usuario="";
        $password="";
        $usuario=  $this->input->post('Usuario');
        $password= $this->input->post('Password');
        
        $this->usuario=$usuario;
        $this->password=$password;
        
        $this->load->view('sesion\index.php'); 
        
    }
 
    public function cerrarSesion() {
        $this->load->view('\sesion\sesion.php');
    }

}
