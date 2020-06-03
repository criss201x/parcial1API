<?php

Class ControladorPlantilla{

    /**
     * llamada a la plantilla
     */
    public function ctrTraerPlantilla(){
        #include() se utiliza para invocar el archivo que contiene el codigo html o php    
        include "vistas/plantilla.php";
    }

}