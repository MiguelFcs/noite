<?php
    //Comentarios em PHP - linha
     /*

    */

    //echo "Hello World - Meu nome é Miguel";
    $idade = 21;
    $nome = "Miguel";
    $altura = 1.65;
    $solteiro = true;
   // $solteiro = 1;
   // echo $solteiro;

   //echo 10 < 12;
   //CONST IDADE = 10;

   /*echo IDADE;
    if(10 > 12)
    {
        echo "Mentira";
    }
    else
    {
        echo "10 não é maior que 12";
    }

    /*$nota1 = 6;
    if ($nota1 >= 6)
    {
        echo "Aprovado";
        
    }else if($nota1 < 6 && $nota1 >= 2)
        echo "ainda tem chance";
    }
    
    $nota1 = 6;
    $nota2 = 5;
    $media = $nota1 + $nota2;
    $media = $media/2;

    echo $nota1;     
    echo $nota2;
    echo $media;
    
    if ($media >= 6)
    {
        echo "Aprovado";

    } 
    else
    {
        echo "Reprovado";
    }
    */
    $nome = "teste";
   //echo "<br <br> Mi " . $nome . " nando " . "<br>";
    do{
        $contadora++;

    }while(10 < $contadora);

        $cont = 0;
        while($cont < 10){
            $cont++;

    }

    for($i = 0; $i < 10; $i++)
    {
        if($i % 2 == 0){
            echo "<p>" . $i . " é par<p>";
        }else{
            echo "<p>" . $i . " é impar<p>";
        }
    }


?>