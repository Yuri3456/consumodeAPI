<?php

    $url = "https://swapi.dev/api/people/?page=2";
    $resultado = json_decode(file_get_contents($url));
    //var_dump($resultado);

    foreach($resultado->results as $ator){
        echo "Ator: " . $ator->name . "<br>";
        echo "Altura" . $ator->height . " cm<br>";

        foreach($ator->films as $filme){
            echo "Filme: " . $filme . "<br>";
        } 

        echo "<hr>";

    }