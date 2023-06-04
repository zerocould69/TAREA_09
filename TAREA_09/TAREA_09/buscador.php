   <?php
    /**
     * @author Jose Luis Sanchez Muñoz
     * Este archivo utiliza la api SWAPI que contiene todos los personajes de Star Wars.    
     */
    /**
     * La función buscador() analiza el documento JSON de la api y retorna los resultados en una tabla.
     * @link http://swapi.dev/api/people/?search=
     */
    function buscador()
    {

        if (isset($_GET["mostrar"]) && isset($_GET["id"])) {

            $id = $_GET['id'];

            $app_info = file_get_contents('http://swapi.dev/api/people/?search=' . $id);
            $app_info = json_decode($app_info);
            
            if ($app_info) {
                echo "<th>Nombre</th><th>Género</th><th>Año de nacimiento</th><th>Color</th>";
                foreach ($app_info->results as $fila) {
                    echo "<tr>";
                    echo "<td>" . $fila->name . "</td>"
                        . "<td>" . $fila->gender . "</td>"
                        . "<td>" . $fila->birth_year . "</td>"
                        . "<td>" . $fila->skin_color . "</td>";
                    echo "</tr>";
                }
            } else {
                echo '<div>¡No hemos encontrado ningún personaje!</div>';
            }
        }
    }
    ?> 