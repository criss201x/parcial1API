<?php

$peliculas = controladorFormularios();

?>
<div class="d-flex justify-content-center">
    
    <form class="p-5 bg-light" method="post">
        <div class="form-group">
            <label for="genero">Genero:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-film"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="genero" name="registroGenero">
            </div>
        </div>
        <div class="form-group">
            <label for="duracion">Duracion:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-film"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="duracion" name="registroDuracion">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Titulo:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-film"></i>
                    </span>
                </div>
                <input type="text" class="form-control" id="titulo" name="registroTitulo">
            </div>
        </div>
                <?php 
                $registro = controladorFormularios::ctrRegistro();
                if($registro == "ok"){
                    // elimina variables post!!!! evita la doble agregacion de un formulario si se refresca la pagina
                    echo '<script>
                        if (window.history-replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                    </script>';

                    echo '<div class="alert alert-success">Pelicula agregada!</div>';
                }

                //echo $registro;
                ?>
        <button type="submit" class="btn btn-primary">enviar</button>
    </form>
</div>