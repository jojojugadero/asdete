<?php
//Redirigimos las rutas de nuestra aplicación
$pagina = $_SERVER['PHP_SELF'];
$arrayDir = preg_split('/\//',$pagina);
//Ruta relativa usada en páginas
$dirRoot = '/'.$arrayDir[1].'/';
//Ruta completa usada en includes
$incRoot = $_SERVER['DOCUMENT_ROOT'].$dirRoot;


session_start();
include $incRoot."CONTROLADOR/ControlEstilos.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asdete</title>
    <link rel="stylesheet" href="<?php echo $dirRoot; ?>VISTA/ESTILOS/estilos.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

  
</head>


<body class="cuerpo_contenedor<?php echo $sufijo_estilo; ?>">

    <!--Incluimos la cabecera -->
    <header class="cabecera<?php echo $sufijo_estilo; ?>">
        <?php include $incRoot."VISTA/VI_INCLUDES/cabecera.php" ?>
    </header>


    <!--En la parte izquierda seleccionamos las empresas de una lista en HTML -->
       <nav class="navega<?php echo $sufijo_estilo; ?>"><p style="font-size:large;">Empresas del sector</p>

                     <?php include $incRoot."VISTA/VI_INCLUDES/nav.php" ?>
</nav>
        <aside class="barra<?php echo $sufijo_estilo; ?>"><p style="font-size:large;">Contactos</p>

            <!--En la parte derecha ponemos los contactos de la web con una lista en HTML -->
            <?php include $incRoot."VISTA/VI_INCLUDES/aside.php" ?>

        </aside>

            <article class="skynet<?php echo $sufijo_estilo; ?>">
                <a href="<?php echo $dirRoot; ?>VISTA/index.php">Indice</a> > <a href="<?php echo $url_volver; ?>">Volver</a>

                <h1>Forma T</h1>
                <!--Contenedores DIV donde mostraremos nuestros cursos realizado con BOOTSTRAP -->
                <div class="container contenedorCarrusel ">
                    <div class="container">
                    <div class="row blog">
                        <div class="col-md-12">
                        <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                            </ol>
                           
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                <div class="col-md-4" >
                                    <div class="item-box-blog">
                                    <div class="item-box-blog-image">
                                      
                                        <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Mayo 2022</span> </div>
                                    
                                        <figure> <img alt="" src="<?php echo $dirRoot; ?>VISTA/IMAGENES/RE_logoAsdete.png"> </figure>  
                                                                        </div>
                                    <div class="item-box-blog-body">
                                      
                                        <div class="item-box-blog-heading">
                                        <a href="#" tabindex="0">
                                            <h5>Asdete administrador</h5>
                                        </a>
                                        </div>
                                      
                                        <div class="item-box-blog-data" style="padding: px 15px;">
                                        <p><i class="fa fa-user-o"></i> Estudia <i class="fa fa-comments-o"></i> con nosotros</p>
                                        </div>
                                     
                                        <div class="item-box-blog-text">
                                        <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                        </div>
                                        <div class="mt"> <a href="mailto:formacionasdete@asdete.com?Subject=Formación" tabindex="0" class="btn bg-blue-ui white read">Inscribite</a>  </div>
                                      
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-4" >
                                    <div class="item-box-blog">
                                    <div class="item-box-blog-image">
                                    
                                        <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Mayo 2022</span> </div>
                                    
                                        <figure> <img alt="" src="<?php echo $dirRoot; ?>VISTA/IMAGENES/CSS.png"> </figure>  
                                    </div>
                                    <div class="item-box-blog-body">
                                       
                                        <div class="item-box-blog-heading">
                                        <a href="#" tabindex="0">
                                            <h5>CSS</h5>
                                        </a>
                                        </div>
                                    
                                        <div class="item-box-blog-data" style="padding: px 15px;">
                                        <p><i class="fa fa-user-o"></i> Estudia <i class="fa fa-comments-o"></i> CSS</p>
                                        </div>
                                     
                                        <div class="item-box-blog-text">
                                        <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                        </div>
                                        <div class="mt"> <a href="mailto:formacionasdete@asdete.com?Subject=Formación" tabindex="0" class="btn bg-blue-ui white read">Inscribite</a> </div>
                                     
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-4" >
                                    <div class="item-box-blog">
                                    <div class="item-box-blog-image">
                                      
                                        <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Mayo 2022</span> </div>
                                     
                                        <figure> <img alt="" src="<?php echo $dirRoot; ?>VISTA/IMAGENES/HTML.png"> </figure>  
                                    </div>
                                    <div class="item-box-blog-body">
                                    
                                        <div class="item-box-blog-heading">
                                        <a href="#" tabindex="0">
                                            <h5>HTML</h5>
                                        </a>
                                        </div>
                                       
                                        <div class="item-box-blog-data" style="padding: px 15px;">
                                        <p><i class="fa fa-user-o"></i> Estudia <i class="fa fa-comments-o"></i> HTML</p>
                                        </div>
                                   
                                        <div class="item-box-blog-text">
                                        <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                        </div>
                                        <div class="mt"> <a href="mailto:formacionasdete@asdete.com?Subject=Formación" tabindex="0" class="btn bg-blue-ui white read">Inscribite</a> </div>
                                      
                                    </div>
                                    </div>
                                </div>
                                </div>
                               
                            </div>
                         
                            <div class="carousel-item ">
                                <div class="row">
                                <div class="col-md-4" >
                                    <div class="item-box-blog">
                                    <div class="item-box-blog-image">
                                        
                                        <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Mayo 2022</span> </div>
                                       
                                        <figure> <img alt="" src="<?php echo $dirRoot; ?>VISTA/IMAGENES/java.png"> </figure>  
                                    </div>
                                    <div class="item-box-blog-body">
                                       
                                        <div class="item-box-blog-heading">
                                        <a href="#" tabindex="0">
                                            <h5>JAVA</h5>
                                        </a>
                                        </div>
                                       
                                        <div class="item-box-blog-data" style="padding: px 15px;">
                                        <p><i class="fa fa-user-o"></i> Estudia <i class="fa fa-comments-o"></i> JAVA</p>
                                        </div>
                                      
                                        <div class="item-box-blog-text">
                                        <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                        </div>
                                        <div class="mt"> <a href="mailto:formacionasdete@asdete.com?Subject=Formación" tabindex="0" class="btn bg-blue-ui white read">Inscribite</a> </div>
                                      
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-4" >
                                    <div class="item-box-blog">
                                    <div class="item-box-blog-image">
                                   
                                        <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Mayo 2022</span> </div>
                                     
                                        <figure> <img alt="" src="<?php echo $dirRoot; ?>VISTA/IMAGENES/JAVASCRIPT.png"> </figure>  
                                    </div>
                                    <div class="item-box-blog-body">
                                       
                                        <div class="item-box-blog-heading">
                                        <a href="#" tabindex="0">
                                            <h5>JAVASCRIPT</h5>
                                        </a>
                                        </div>
                                   
                                        <div class="item-box-blog-data" style="padding: px 15px;">
                                        <p><i class="fa fa-user-o"></i> Estudia <i class="fa fa-comments-o"></i> Javascript</p>
                                        </div>
                                      
                                        <div class="item-box-blog-text">
                                        <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                        </div>
                                        <div class="mt"> <a href="mailto:formacionasdete@asdete.com?Subject=Formación" tabindex="0" class="btn bg-blue-ui white read">Inscribite</a> </div>
                                      
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-4" >
                                    <div class="item-box-blog">
                                    <div class="item-box-blog-image">
                                  
                                        <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Mayo 2022</span> </div>
                                      
                                        <figure> <img alt="" src="<?php echo $dirRoot; ?>VISTA/IMAGENES/RE_CARPETAS.png"> </figure>  
                                    </div>
                                    <div class="item-box-blog-body">
                                      
                                        <div class="item-box-blog-heading">
                                        <a href="#" tabindex="0">
                                            <h5>OFIMATICA</h5>
                                        </a>
                                        </div>
                                       
                                        <div class="item-box-blog-data" style="padding: px 15px;">
                                        <p><i class="fa fa-user-o"></i> Estudia <i class="fa fa-comments-o"></i> Ofimatica</p>
                                        </div>
                                      
                                        <div class="item-box-blog-text">
                                        <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                        </div>
                                        <div class="mt"> <a href="mailto:formacionasdete@asdete.com?Subject=Formación" tabindex="0" class="btn bg-blue-ui white read">Inscribite</a> </div>
                                      
                                    </div>
                                    </div>
                                </div>
                                </div>
                                
                            </div>
                            
                            </div>
                           
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>

            </article>
            <footer class="pie<?php echo $sufijo_estilo; ?>"> <?php include $incRoot."VISTA/VI_INCLUDES/pie.php" ?></footer>

</body>

</html>