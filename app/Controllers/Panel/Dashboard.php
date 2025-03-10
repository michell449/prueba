<?php
    namespace App\Controllers\Panel;
    use App\Controllers\BaseController;

    class Dashboard extends BaseController {
        private $view = 'panel/dashboard';
    private function load_data()
    {
        $data = array();
       
        //Datos de la pagina
        $data['nombre_pagina'] = 'Dashboard';
        $data['titulo_pagina'] = 'Usuarios Todos';

        //load helper
        helper('breadcrumb');
        $navegacion = array(
            array(
                'href' => route_to('/dashboard'),
                'tarea' => 'Usuario',
                'icon' => 'fa fa-user',

            ),
        
            array(
                'href' => '#',
                'tarea' => 'Usuario Nuevo',
                'icon' => 'fa fa-user',

            ),

        );

        $data['breadcrumb'] = breadcrumb_panel( $data['titulo_pagina'],$navegacion); 

        //Queries SQL


        return $data;
    }//end load_data
    private function make_view($name_view = '', $content = array()) {
        $content['menu_lateral'] = crear_menu_panel();
        return view($name_view, $content);

    }


    public function index()
    {
        return $this->make_view($this->view, $this->load_data());
    }//end index
    }//end Dashboard
