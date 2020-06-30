<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//1-Crear una funcion que muestre si un numero es par o impar
function determinarParImpar(int $numero): string 
{
    if($numero%2==0){
        return "El numero es par";
    }else{
        return "El numero es impar";
    }
}
//2-Crear una funcion que determine el mayor de dos numeros
function determinarNumeroMayor(int $n1 , int $n2): int 
{
    echo "el numero mayor es ";
    if($n1>$n2){
        return $n1;
    }else{
        return $n2;
    }
}
//3-Crear una funcion para calcular el cuadrado de un numero 
function cuadrado(int $n1): int
{
    echo "$n1^2 = ";
    return $n1*$n1;
}
//RESULTADOS
echo determinarParImpar(9);
echo "<br><br>";
echo determinarNumeroMayor(5,0);
echo "<br><br>";
echo cuadrado(9);
?>
</body>
</html>