<?php
    function breadcrumb_panel($title = '', $nav = array())  {
        // dd($nav);
        $html = '
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">'.$title.'</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="nav-icon fas fa-home"></i>Inicio</a></li>';
                        foreach ($nav as $k) {
                            if($k["href"] == '#'){
                                $html.='<li class="breadcrumb-item active"><i class="nav-icon '.$k["icon"].'"></i>'.$k["tarea"].'</li>';
                            }
                            else{
                                $html.='<li class="breadcrumb-item"><a href="'.$k["href"].'"><i class="nav-icon '.$k["icon"].'"></i>'.$k["tarea"].'</a></li>';
                            }
                            
                        }//end 
                        // 
                        // <li class="breadcrumb-item active">Nuevo Uusario</li>
                    $html.='</ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        ';
        return $html;
    }//end breadcrumb_panel
?>