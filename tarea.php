<?php
// a. Declaración de Variables:
$integerVar = 10; // integer
$floatVar = 20.5; // float
$stringVar = "Hola, mundo!"; // string
$booleanVar = true; // boolean
$arrayVar = array(1, 2, 3, 4, 5); // array

// b. Operaciones Aritméticas:
$suma = $integerVar + $floatVar;
$producto = $integerVar * $floatVar;
echo "La suma de \$integerVar y \$floatVar es: $suma\n"; // La suma de $integerVar y $floatVar es: 30.5
echo "El producto de \$integerVar y \$floatVar es: $producto\n"; // El producto de $integerVar y $floatVar es: 205

// c. Manipulación de Cadenas:
$otraCadena = " Esto es PHP.";
$cadenaConcatenada = $stringVar . $otraCadena;
$longitudCadena = strlen($cadenaConcatenada);
echo "La cadena concatenada es: $cadenaConcatenada\n"; // La cadena concatenada es: Hola, mundo! Esto es PHP.
echo "La longitud de la cadena concatenada es: $longitudCadena\n"; // La longitud de la cadena concatenada es: 28

// d. Uso de Condicionales:
if ($booleanVar) {
    echo "La variable booleana es true\n"; // La variable booleana es true
} else {
    echo "La variable booleana es false\n";
}

// e. Creación de un Array:
echo "El tercer elemento del arreglo es: " . $arrayVar[2] . "\n"; // El tercer elemento del arreglo es: 3
?>

