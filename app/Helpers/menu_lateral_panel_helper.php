<?php
function configurar_menu_panel(){
    // Permite almacenar todas las opciones dentro del menú
    $menu = array();
    
    // Permitir identificar las características de la opción
    $menu_opcion = array();
    
    // Permitir identificar las características de la subopción que se encuentra en la opción principal
    $menu_sub_opcion = array();

    // --- TAREA DASH ---
    $menu_opcion = array();
    $menu_opcion['is_active'] = FALSE;
    $menu_opcion['href'] = route_to("dashboard");
    $menu_opcion['text'] = 'Dashboard';
    $menu_opcion['icon'] = 'fa fa-battery-full';
    $menu_opcion['submenu'] = array();
    $menu['dashboard'] = $menu_opcion;

    // --- OPCIÓN B ---
    $menu_opcion = array();
    $menu_opcion['is_active'] = FALSE;
    $menu_opcion['href'] = "#";
    $menu_opcion['text'] = 'Opción B';
    $menu_opcion['icon'] = 'fa fa-area-chart';
    $menu_opcion['submenu'] = array();

    // Submenú Opción B1
    $menu_sub_opcion = array();
    $menu_sub_opcion['is_active'] = FALSE;
    $menu_sub_opcion['href'] = route_to('dashboard');
    $menu_sub_opcion['text'] = 'Opción B1';
    $menu_sub_opcion['icon'] = 'fa fa-battery-three-quarters';
    
    // Se agrega al submenu de Opción B
    $menu_opcion['submenu']['opcionb1'] = $menu_sub_opcion;

    // Submenú Opción B2
    $menu_sub_opcion = array();
    $menu_sub_opcion['is_active'] = FALSE;
    $menu_sub_opcion['href'] = route_to('dashboard');
    $menu_sub_opcion['text'] = 'Opción B2';
    $menu_sub_opcion['icon'] = 'fa fa-battery-half';

    // Se agrega al submenu de Opción B
    $menu_opcion['submenu']['opcionb2'] = $menu_sub_opcion;

    $menu['opcionB'] = $menu_opcion;

    return $menu;
}

function crear_menu_panel(){
    $menu = configurar_menu_panel();
    //dd($menu); // Esto imprime el menú para depuración, puedes quitarlo si no lo necesitas

    $html = '';
    $html .= '
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">Menú Lateral</li>';
        foreach ($menu as $opcion) {
           //dd($opcion); 
           if($opcion["href"] != "#"){
                $html.='
                        <li class="nav-item">
                    <a href="'.$opcion["href"].'" class="nav-link'.(($opcion["is_active"]) == TRUE ? "active" : "" ).'">
                        <i class="'.$opcion["icon"].' nav-icon"></i>
                        <p>'.$opcion["text"].'</p>
                    </a>
                </li>
                ';
           }
           else{
            $html.= '
                        <li class="nav-item">
                    <a href="#" class="nav-link'.(($opcion["is_active"]) == TRUE ? "active" : "" ).'">
                        <i class="nav-icon '.$opcion["icon"].'"></i>
                            <p>
                                '.$opcion["text"].'
                                <i class="right fas fa-angle-left"></i>
                            </p>
                    </a>';
                    if (sizeof($opcion["submenu"]) > 0 ) {

                        $html.='<ul class="nav nav-treeview">';
                        foreach ($opcion["submenu"] as $key => $sub_opcion_menu) {
                            $html.='
                            <li class="nav-item">
                                <a href="#" class="nav-link '.(($sub_opcion_menu["is_active"] == TRUE) ? "active" : "" ).'">
                                    <i class="'.$sub_opcion_menu["icon"].' nav-icon"></i>
                                    <p>'.$sub_opcion_menu["text"].' 2</p>
                                </a>
                            </li>
                            ';
                        }       
                        $html.='</ul>';             
                    }
                    
                $html.'</li>
                    ';
           }
        }
    $html.= '</ul>';
    return $html;
}