<?php
    function ImprimirQuebra(){
        echo"<br>";
        echo"<hr>";
        echo"<br>";
    }
    function ImprimirTexto($texto)
    {
        echo $texto."<br>"."<hr>";
    }

    $meuTexto = "Aqui vai uma string de qualquer tipo de dado". "32";
    echo "Miguel";
    ImprimirQuebra();
    ImprimirTexto($meuTexto);
    ImprimirQuebra();


    function Adicao($numero1, $numero2)
    {
      return $numero1+$numero2;
    }
    function Subtracao($numero1, $numero2)
    {
       return $numero1 - $numero2;
    }
    function Multiplicacao($numero1, $numero2)
    {
       return $numero1 * $numero2;
    }
    function Divisao($numero1, $numero2)
    {
       return $numero1/$numero2;
    }
    function Media ($numero1, $numero2)
    {
       return Adicao($numero1,$numero2)/2;
    }

    ImprimirTexto(Subtracao(12,8));
    ImprimirTexto(Adicao(12,8));
    ImprimirTexto(Multiplicacao(12,8));
    ImprimirTexto(Divisao(12,8));
    ImprimirTexto(Media(12,8));

    function calculadora($numero1,$numero2,$operacao)
    {
        if ($operacao == "+"){
            ImprimirTexto(Adicao($numero1,$numero2));
        }else if ($operacao == "-"){
            ImprimirTexto(Subtracao($numero1,$numero2));
        }else if ($operacao == "*"){
            ImprimirTexto(Multiplicacao($numero1,$numero2));
        }else if ($operacao == "/"){
            ImprimirTexto(Divisao($numero1,$numero2));
        }else if ($operacao == "m"){
            ImprimirTexto(Media($numero1,$numero2));
        }else {
            ImprimirTexto("Operação Invalida");
        }
    }
    calculadora(12,8,"+");

?>