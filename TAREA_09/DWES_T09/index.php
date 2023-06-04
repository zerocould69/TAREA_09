<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>@import url('estilo.css');</style>
    <?php require('buscador.php');?>
    <title>Mundo Star Wars</title>

<body>

<div class=formulario>
        
        <form method="GET" action="">
            <fieldset>
                <legend>Busca tus personajes favoritos</legend>

                <label for="numero">Nombre del personaje <br>(admite búsquedas parciales)</label>
                <input type="text" name="id" id="id" value="<?php $id ?>" />                    
                <input class="boton" type="submit" value="Buscar" name="mostrar">
                
            </fieldset>
            <table class=tabla><?php buscador(); ?></table>//Llamamos a la función buscador()
        </form>
    </div>

</body>

</html>