<section id="acercade" class="politecnia color-gris text-justify" style="padding: 30px;background-color: #006060;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1 class="text-white text-center"><a class="text-white" href="https://www.politecnia.net" target="_blank">Politecnia.net</a> <small>plataforma web para enseñanza y aprendizaje en línea</small></h1>
                </div>
                <br>                    
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <br>
                <?php
                function service_api_politecnia(){
                    return json_decode(file_get_contents('http://www.politecnia.net/api/publicaciones'),true);;
                }                
                ?>
                
                <?php
                $resul = service_api_politecnia();
                $datos = '';
                $datos .= '<h5 class="text-uppercase text-white">Publicaciones recientes</h5>';
                $datos .= '<div class="mensaje">';
                foreach($resul as $info){
                    $datos .= '<p style="margin:0px;"><a style="color:white;" target="_blank" href="http://www.politecnia.net/publicaciones/ver/'.$info['id'].'"><i class="fa fa-product-hunt"></i> '.$info['tema'].'</a></p>';
                    $datos .= '<hr style="margin:0px;"></hr>';
                }
                $datos .= '</div>';
                $datos .= '<div class="accion"></div>';
                print_r ($datos);
                ?>                
            </div>
            <div class="col-md-1">
             
            </div>
            <div class="col-md-5">
                <a href="http://www.politecnia.net" target="_blank">
                    <img id="bottom" src="<?php echo get_template_directory_uri(); ?>/img/politecnia-sitio-web.jpg" class="d-block w-100" alt="politecnia">    
                </a>             
            </div>                
        </div>
    </div>
</section>