<?php
/** el INDEX: en el mostraremos la salida de las vistas al usuario y tambien a traves 
 * de el enviaremos las distintas acciones que el usuario envie al controlador
 */

 /*
  * require() establece que el codigo del archivo invocado es requerido, es decir, obligatorio
    para el funcionamiento del programa. por ello, si el archivo especificado en la funcion
    require() no se encuentra saltara un error "php fatal error" y el programa php se detendra    
  */

/**
 * la version require_once() funciona de la misma manera que sus respectivo require() salvo que, 
 * al utilizar la version once, se impide la carga de un mismo archivo mas de una vez 
 */
/**
 * su requerimos el mismo codigo mas de una vez corremos el riesgo de declaraciones de variables
 * funciones o clases
 */
require_once "controlador/plantillasControlador.php";
require_once "controlador/formulariosControlador.php";
require_once "datos/conexion.php";





$conexion = Conexion::conectar();
echo '<pre>'; print_r($conexion); echo '</pre>';
$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();