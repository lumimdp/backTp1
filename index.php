<!DOCTYPE HTML>
<html lang="es">
<head>
</head>
<body>

<?php

echo "Hola Mundo";

$saludo = "<br>Hola mundo<br>";
echo $saludo;

$a= 61;
$b= 30;

$suma = $a + $b;
$resta = $a - $b;
$multiplica = $a * $b;
$divide = $a / $b;
$resto = $a % $b;

echo "Suma: ". $suma."<br>";
echo "Resta: ". $resta."<br>";
echo "Multiplicacion: ". $multiplica."<br>";
echo "Division: ". (int) ($divide)."<br>";
echo "Resto: ". (int) ($resto);


$celsius = 20;

$fahrenheit = ($celsius * 9/5) + 32;

echo "<br>Celsius a fahrenheit = ".$celsius." ºC => ".$fahrenheit." ºF";


$base = 18;
$altura = 12;

$perimetroR = ($base + $altura) * 2;
$areaR = $base * $altura;

echo "<br>Rectangulo perimetro : ".$perimetroR;
echo "<br>Rectangulo area : ".$areaR;

$pi = 3.14;
$radio = 30;

$perimetroC = $pi *($radio * 2);
$areaC = $pi * ($radio**2);

echo "<br>Circulo perimetro : ".$perimetroC;
echo "<br>Circulo area : ".$areaC; 



?>

</body>
</html>