
<?php
print("	Mi primer código");
print "<br>";
$a=10;
$b=3;
$suma=$a+$b;
echo "numero 1: ";
echo $a;
echo "<br>";
echo "numero 2: ".$b. "<br>";
$resultado =$a+$b;
echo "resultado de la suma: $resultado";
?> 
<!--VARIABLES-->
<?php
//Numericas
$edad=22;
echo "Variable tipo nuemrica: " .$edad. "<br>";
// texto
$mes="septiembre";
echo "Variable tipo texto ".$mes. "<br>";
//booleana
$respuesta=true;
echo "Variable tipo booleano: ".$respuesta. "<br>";
//arreglo 
$colores=array("amarillo", "azul","rojo");
echo "Variable tipo arreglo: ".$colores[0]. "<br>";
//arreglo asociativo
$clientes=array("cedula"=>54355,"nombre"=>"maria");
echo "Variable tipo arreglo asociativo: ".$clientes['nombre']."<br>";
//Variable tipo objeto
$frutas=(object)["fruta1"=>"pera", "fruta2"=>"piña"];
echo "Variable tipo objeto: ".$frutas->fruta2;

//funcion para conocer tipo de variable
echo "<br><b>cambiar tipo de variable</b></br>";
echo gettype ($edad);
echo gettype($mes);
echo gettype ($respuesta);
echo gettype($colores);
echo gettype($clientes);
echo gettype($frutas);

//cambiar tipo de variable
echo "<br><b>cambiar tipo de variable </b><br>";
//settype es para cambiar el tipo de variable
settype($edad, "double");
echo gettype($edad);

//preguntar si variable existe
isset($mes);

//método var_dump
echo "<b>Metodo var_dump</b><br>";
//entero
$edad=22;
echo "Variable tipo numerica: ".$edad."<br>";
var_dump($edad);
echo "<br>";
//texto
$mes="septiembre";
echo "Variable tipo texto: ".$mes."<br>";
var_dump($mes);
echo "<br>";
//booleana
$respuesta=true;
echo "Variable tipo booleano: ".$respuesta. "<br>";
var_dump($respuesta);
echo "<br>";
//arreglo 
$colores=array("amarillo","azul","rojo");
echo "Variable tipo arreglo: ".$colores[0]."<br>";
var_dump($colores);
echo "<br>";
//arreglo asociativo
$clientes=array("cédula"=>54355, "nombre"=>"maria");
echo "variable tipo arreglo asociativo: ".$clientes['nombre']. "<br>";
//variable tipo objeto
$frutas=(object)["fruta1"=>"pera", "fruta2"=>"piña"];
echo "Variable tipo objeto: ".$frutas->fruta2. "<br>";
var_dump($frutas);
echo"<br>";
?>
<!--FUNCIONES-->
<?php
echo "<b>funcion sin parámetro</b><br>";
function saludo(){
	echo "hola<br>";
}
saludo();
echo "<b>funcion con parámetro</b><br>";
function saludo2($adios){
	echo $adios;
}
saludo2("chao");
echo "otro ejemplo: <br>";

function sumar ($num1, $num2){
	$resultado=$num1+$num2;
	echo $resultado;
}
sumar(2,4);
echo "<br><b>funcion con retorno</b><br>";

function retorno($retornar){
	return $retornar;
}
echo retorno ("valor enviado");
?>

