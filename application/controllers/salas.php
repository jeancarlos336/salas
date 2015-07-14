<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class salas extends CI_Controller {

  
    public function index(){
        $id_sala="";
        $nombre="";
        $ubicacion="";
        $capacidad="";
        
        $id_sala= $this->input->post('Id_sala');
        $nombre= $this->input->post('Nombre');
        $ubicacion= $this->input->post('Ubicacion');
        $capacidad= $this->input->post('Capacidad');
        
        $this->id_sala=$id_sala;
        $this->nombre=$nombre;
        $this->ubicacion=$ubicacion;
        $this->capacidad=$capacidad;

        $this->load->view('salas\index.php'); 
        
    }
 
}
