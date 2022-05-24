<?php
    require '../modelo/Alumno.php';

    $daniel = new Alumno('20.922.555-7','Daniel marchant','20','22','informatica');
    $mati = new Alumno('20.922.4332-7','tiasM marchant','22','33','spico');

    echo $daniel->saludar();

    echo '</br></br>';
    echo $mati->saludar();
    echo '</br>';
    echo $daniel->saludar();

    $estudiantes = array();

    $estudiantes['0'] = $mati;
    $estudiantes['1'] = $daniel;

    

    foreach($estudiantes as $gg){
        echo '</br>';
        echo '<h1>',$gg->getNombre(), '</h1>';
        echo '<section><article><p> Carrera del alumno:', $gg->getCarrera(), '</p></article></section>';
    }

    
    echo '</br>';


    


?>