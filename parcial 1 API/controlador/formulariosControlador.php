<?php
class controladorFormularios{

    //registro
    static public function ctrRegistro(){

        if(isset($_POST["registroGenero"])){
                return "ok";
                //return $_POST["registroGenero"]."<br>".$_POST["registroDuracion"]."<br>".$_POST["registroTitulo"]."<br>";
        }

    }
    // operaciones crud, no me alcanzo el tiempo :()

    static public function consultarPeliculas(){
        $tabla = "registros";
        $respuesta = formularios::seleccionar($tabla);
        return respuesta;

    }









}