<?php

    $aciertos = 0;
    $pregunta1 = $_POST["pregunta1"];
    $pregunta2 = $_POST["pregunta2"];
    $pregunta3 = $_POST["pregunta3"];
    $pregunta4 = $_POST["pregunta4"];
    $pregunta5 = $_POST["pregunta5"];
    $pregunta6 = $_POST["pregunta6"];
    $pregunta7 = $_POST["pregunta7"];
    $pregunta8 = $_POST["pregunta8"];
    $pregunta9 = $_POST["pregunta9"];
    $pregunta10 = $_POST["pregunta10"];

    //valida pregunta 1 1. ¿Lenguaje de programación que se utiliza para WEB?
    echo "<h3> 1. ¿Cuántos carros hay en circulación en el mundo? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta1." ---- Correcta = Más de 1000 millones de carros</h5>";
    if($pregunta1 == "Más de 1000 millones de carros"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    //Valido pregunta 2 s una plataforma informática de lenguaje de programación creada por Sun Microsystems en 1995.
    echo "<h3> 2.   es el nombre de la escultura de los Rolls Roys. </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta2." ---- Correcta = el espíritu del éxtasis</h5>";
    if(strtoupper($pregunta2) == "el espíritu del éxtasis"){
        $aciertos++;
    }

    //Pregunta 3 - se deben validar 2 opciones sql y mongo
    echo "<h3> 3. ¿Cuáles son los 2 carros más vendidos de la historia? (Selecciona 2) </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta3." ---- Correcta = Ford F y Toyota Corolla</h5>";
    $p3_respuestas_correctas = 0;

    if(count($pregunta3) == 2){
        for($i=0; $i<count($pregunta3); $i++){
            if($pregunta3[$i] == "Toyota Corolla" || $pregunta3[$i] == "Ford F"){
                $p3_respuestas_correctas ++;
            }
        }
        if($p3_respuestas_correctas == 2){
            $aciertos++;
        }
    }

    //////
    echo "<h3> 4. ¿Cómo se llamó originalmente la marca automovilística Jaguar? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta4." ---- Correcta = SS Cars</h5>";
    if($pregunta4 == "SS Cars"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    //////
    echo "<h3> 5.   es la mayor fabricante de carros del mundo. </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta5." ---- Correcta = toyota</h5>";
    if(strtoupper($pregunta5) == "toyota"){
        $aciertos++;
    }

    /////
    echo "<h3> 6. ¿A quién pertenece la marca de carros SEAT? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta6." ---- Correcta = Volkswagen</h5>";
    if($pregunta6 == "Volkswagen"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    //////
    echo "<h3> 7.   es la fábrica dueña del automovil Mini. </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta7." ---- Correcta = BMW</h5>";
    if(strtoupper($pregunta7) == "toyota"){
        $aciertos++;
    }

    //////
    echo "<h3> 8. ¿Qué carro tiene un precio por encima de 4 millones de euros? (Selecciona 2) </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta8." ---- Correcta = Pagani Huayra Codalunga y Bugatti Mistral</h5>";
    $p8_respuestas_correctas = 0;

    if(count($pregunta8) == 2){
        for($i=0; $i<count($pregunta8); $i++){
            if($pregunta8[$i] == "Pagani Huayra Codalunga" || $pregunta8[$i] == "Bugatti Mistral"){
                $p8_respuestas_correctas ++;
            }
        }
        if($p8_respuestas_correctas == 2){
            $aciertos++;
        }
    }

    /////
    echo "<h3> 9. ¿De qué nacionalidad son los carros Hyundai? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta9." ---- Correcta = Sur coreana</h5>";
    if($pregunta9 == "Sur coreana"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    /////
    echo "<h3> 10. ¿Cuál es el carro más rápido del mundo? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta10." ---- Correcta = Koenigsegg Jesko Absolut</h5>";
    if($pregunta10 == "Koenigsegg Jesko Absolut"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }
    
    echo "CALIFICACIÓN FINAl = " . ($aciertos * 10) . "%";

?>