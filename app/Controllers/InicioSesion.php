<?php
namespace App\Controllers;

use Config\View;

class InicioSesion extends BaseController
{
    private $view = 'inicio';
    private function load_data(){
        $data = array();
        $data['nombre_pagina'] = 'InicioSesion';
        $data['titulo_pagina'] = 'Login';
       

        return  $data;
    }


    private function view_inicio($name_view = '', $content = array()){
        return view($name_view, $content);
    }//end 

    public function inicio()

    {
        //Mostrar una vista
        return $this->view_inicio($this->view, $this->load_data());
    }


    public function validar_sesion() {
        $email = $this->request->getPost('email');
        $pass = $this->request->getPost('password');
        // d($email);
        // dd($pass);
        $tabla_usuarios = new \App\Models\Tabla_usuarios;
        $data = $tabla_usuarios->validar_usuario($email, hash('sha256', $pass));
        dd($data);
    }
}  

