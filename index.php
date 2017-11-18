<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
                        
        <?php
      /*$cor = "amarelo";
      $cor = "vermelho";
      echo $cor. "<br>";
      
      define("MEU_CARRO", "audi");
        echo MEU_CARRO;
      
      $vai_chover = true;
      echo $vai_chover. "<br>";
      
      $idade = 28;
      echo $idade . "<br>";
      
      $pi = 3.14;
      echo $pi . "<br>";
      
      $frase = "Hello World";
      echo $frase . "<br>";
      
      $marcasDeCarros = array("Gol", "Fiat", "Ford", "Renault");
      echo $marcasDeCarros[0]. "<br>";
      
      var_dump(Olá);
      echo "<br>";
      var_dump(34.4444);
      echo "<br>";
      var_dump(array("maça", "maracuja"));
      echo "<br>";
      
      $a = 3;
      $b = 5;
      $c = $a+$b;
      $d = $a-$b;
      $e = $a*$b;
      $f = $a/$b;
      $g = $a%$b;
      echo "A soma é: " . $c. "<br>"
      echo "A subtração é: " . $d . "<br>";
      echo "A multiplicação é: " . $e . "<br>";
      echo "A divisão é: " . $f . "<br>";
      echo "O módulo é: " . $g. "<br>";
      
      $x = 1;
      $y = 2; 
      $soma= $x+$y;
      echo "A soma é: " . $soma;
      
      $a = 1;
      $b = 3; 
      
      //a>b
      if ($a>$b) {
        echo "A é maior que B";
      }
      else if ($a<$b) {
        echo "A é menor que B";
      }
      else if ($a==$b) {
        echo "A é igual a B";
      }
      else {
       echo "A é diferente de B";
      }
      */
      $i = 1;
      
      while($i< 10)
      {
        $i = $i +1;
        if($i%2 == 0)
        {echo $i . " é um número par!" . "<br>";}
        else
        {echo $i . " é um número ímpar!" . "<br>";}
        
      }
      
      echo "<br>";
      
      for ($a = 1; $a<=10; $a++)
      {
        if($a % 2 == 0)
        {
          echo $a . " é um número par!" . "<br>";
        }
        else
        {
          echo $a . " é um número ímpar!" . "<br>";
        }
      }
      
      echo "<br>";
      
      $cor = vermelha;
      switch($cor)
      {
        case "amarelo": 
          echo "carro amarelo";
          break;
        case "azul";
          echo "carro azul";
          break;
        default:
          echo "não temos essa cor de carro";
      }
      
      echo "<br>";
      echo "<br>";
      
      function soma($a, $b){
        $resultado = $a + $b;
        return $resultado;
      }
      
      $a=10.2;
      $b=6;
      $retornoFuncao = soma($a, $b);
      echo $retornoFuncao;
      
      echo "<br>";
      echo "<br>";
      
      
     $frutas = array("Maça", "morango", "laranja");
      foreach ($frutas as $fruta){
        echo "A fruta é " . $fruta ."<br>";
      }
      
      echo "<br>";
      echo "<br>";
      
      
     $comidas = array("estrogonofe", "moqueca de camarão", "lasanha");
      foreach ($comidas as $comida){
        echo "Minha comida predileta é " . $comida ."<br>";
      }
      echo "<br>";
      echo "Adicionando item: ";
      echo "<br>";
      array_push($comidas, "Sopa de Cebola");
      foreach ($comidas as $comida){
        echo "Minha comida predileta é " . $comida ."<br>";
      }
      echo "<br>";
      echo "Removendo item: ";
      echo "<br>";
      array_pop($comidas);
      foreach ($comidas as $comida){
        echo "Minha comida predileta é " . $comida ."<br>";
      }
     $result = count($comidas);
      echo $result;
      
      

        ?>

    </body>
</html>