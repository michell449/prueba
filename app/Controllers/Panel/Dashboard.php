<?php
    namespace App\Controllers\Panel;
    use App\Controllers\BaseController;

    class Dashboard extends BaseController {

        private $view = 'panel/dashboard';

        private function load_data(){
            $data = array();
            //Datos de la página
            $data['nombre_pagina'] = 'Dashboard';
            $data['titulo_pagina'] = 'Dashboard';

            //Queries SQL : models

            return $data;
        }//end load_data

        private function make_view($name_view = '', $content = array()){
            return view($name_view, $content);
        }//end 

        public function index() {
            //Mostrar una vista
            return $this->make_view($this->view, $this->load_data());
        }//end index
    }//end Dashboard
