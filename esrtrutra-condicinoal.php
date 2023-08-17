<?php

$nome= "matheus henrique";
$email="matheusnb.2008@gmail.com";
$senha="12345678";
$idade=24;
echo"<h1>estutura condicinoal</h1>";
echo"<hr>";
echo "exemplo de if()";
echo "<h5>exemplo de if </h5>";
if($idade >= 18){
    echo"o usuário $nome é maior de idade";
}
echo"<hr>";
echo "<h5>exemplo de if e else </h5>";
if($senha == "12345678"){
   echo "a senha é valida";
}else{
    echo "a senha invalida";
}
echo"<hr>";
echo "<h5>exemplo de if e elsif else </h5>";
if($idade <=18){
    echo" jovem ";
}else if($iade <=21){
    echo "adulto";
}else{
    echo"velho";
}
echo"<hr>";
echo "<h5>exemplo de if ternario </h5>";

echo ($idade >=18)? "maior de idade":"menor de idade";

echo"<hr>";
echo "<h5>exemplo de condição para formuluario de login</h5>";
if($email=="matheus@teste.com"&& $senha == "12345678"){
    echo"usuário atuenticado";
}else{
    echo"usuário  ou senha inválido";
}
echo"<br>";
echo " <h5>verificicar se o número e par ou imapar/</h5>";


$numero = 10;

if($numero  %2 == 0){
     echo "para";
}else{
    echo "impara";
}
"<br>";
echo ('w');
$diaSemana = date('w');
if( $diaSemana ==0){
    echo"domingo";
  }elseif ($diaSemana ==1){
   echo"segunda";
   } elseif ($diaSemana ==2 ){
    echo"terça";
   } elseif($diaSemana == 3){
    echo "quarto";
   }elseif($diaSemana == 4){
    echo"quinta";
   }elseif($diaSemana == 5){
    echo "sexte";
   }elseif($diaSemana == 6){
    echo "sábado";
   }
