<?php 

class Conexion{

    static public function conectar(){
        #nombre del servidor; nombre bd; usuario; contraseña        
        $link = new PDO("mysql:host=localhost;dbname=peliculas","root");
        $link ->exec("set names utf8");


        return $link;
    }














}