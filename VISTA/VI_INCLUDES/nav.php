

<?php
//Redirigimos las rutas de nuestra aplicación
$pagina = $_SERVER['PHP_SELF'];
$arrayDir = preg_split('/\//',$pagina);
//Ruta relativa usada en páginas
$dirRoot = '/'.$arrayDir[1].'/';
//Ruta completa usada en includes
$incRoot = $_SERVER['DOCUMENT_ROOT'].$dirRoot;



echo "<p style='font-size:large;'><h4>Empresas del sector</h4></p>

<ul class='lista-normal'>
  
<li class='li_barra_lateral'><a href='".$dirRoot."VISTA/VI_EMPRESAS/empresa1.php' class='enlace_sidebar'>CRAKENMAKER</a></li>
<li class='li_barra_lateral'><a href='".$dirRoot."VISTA/VI_EMPRESAS/empresa2.php' class='enlace_sidebar'>TECNOTRONICS</a></li>
<li class='li_barra_lateral'><a href='".$dirRoot."VISTA/VI_EMPRESAS/empresa3.php' class='enlace_sidebar'>CONDORNET</a></li>
<li class='li_barra_lateral'><a href='".$dirRoot."VISTA/VI_EMPRESAS/empresa4.php' class='enlace_sidebar'>ROCINET</a></li>
<li class='li_barra_lateral'><a href='".$dirRoot."VISTA/VI_EMPRESAS/empresa5.php' class='enlace_sidebar'>TECHSPIDER</a></li>
<li class='li_barra_lateral'><a href='".$dirRoot."VISTA/VI_EMPRESAS/empresa6.php' class='enlace_sidebar'>BACKORCOMING</a></li>
<li class='li_barra_lateral'><a href='".$dirRoot."VISTA/VI_EMPRESAS/empresa7.php' class='enlace_sidebar'>NETOKYDOKY</a></li>

</ul>";

echo "<img src='".$dirRoot."VISTA/IMAGENES/logoAsdete.png' alt='Logo Asdete' height='100' width='150'  />";

echo "<div style='margin-top:10px;'></div>";

echo "<p style='font-size:large;'><h4>Somos Asdete</h4></p>

<ul class='lista-normal'>

<li class='li_barra_lateral'><a href='".$dirRoot."VISTA/VI_UTILS/calendarios.php' class='enlace_sidebar'>Calendarios laborales</a></li>
<li class='li_barra_lateral'><a href='".$dirRoot."VISTA/VI_UTILS/empleo.php' class='enlace_sidebar'>Tu empleo</a></li>
<li class='li_barra_lateral'><a href='".$dirRoot."VISTA/VI_UTILS/formacion.php' class='enlace_sidebar'>Forma T</a></li>
<li class='li_barra_lateral'><a href='".$dirRoot."VISTA/VI_UTILS/prestamos.php' class='enlace_sidebar'>Prestamos</a></li>

</ul>";



?>