<?php
/*
    $carros = array();
    $carros = array("BMW", "Saveiro", "Gol", "Palio");
    //echo"<br>";
    //echo $carros [1];
    //echo"<br>";
    //echo $carros [0];
    echo"<pre>";
    print_r($carros);
    echo"</pre>";

    $nomes = ["Talita", "Julia", "Miguel", "Maicon"];
    $nomes[675] = "Andre";
    $nomes[465] = "Matheus";
    $nomes[34] = "Luis Fernando";

    echo"<pre>";
    print_r($nomes);
    echo"</pre>";

    $salas = array("lab01" => 40, "lab02" => 32);
    $salas["lab03"] = 30;

    $salas[0] = "24";

    echo"<pre>";
    print_r($salas);
    echo"</pre>";

    echo $salas["lab02"];

    $tabuada = array(0,1,2,3,4);

    $tabuada [0] = array(0,1,2,3,4);
    $tabuada [1] = array(0,1,2,3,4);
    $tabuada [2] = array(0,1,2,3,4);
    $tabuada [3] = array(0,1,2,3,4);

    $tabuada[4]= array();
    $tabuada[4][0] = 0;
    $tabuada[4][1] = 4;
    $tabuada[4][2] = 8;
    $tabuada[4][3] = 12;
    $tabuada[4][4] = 16;


    echo"<pre>";
    print_r($tabuada);
    echo"</pre>";
    */

    $armarios = array();
    $armarios["Joias"] = array("Brinco", "Corrente", "Piercing"); 
    $armarios["Eletronico"] = array();
    $armarios["Ferragem"] = array();

    array_push($armarios["Eletronico"], "Eletronicos"); // adiciona um elemento no final do array

    $armarios["Ferragem"][0] = "Ferragens"; // adicona as informações em formato de matriz

    echo"<pre>";
    print_r($armarios);
    echo"</pre>";


?>