

<?php
class Calculadora{
#propiedad
public $num1;
public $num2;
public $operador;

#metodos
public function sumar ($n1,$n2){
	$resultado= ($n1+$n2);
	echo"El resultado" .$resultado;
}
public function restar ($n1,$n2){
	$resultado= ($n1-$n2);
	echo"El resultado" .$resultado;
}
public function multiplicar ($n1,$n2){
	$resultado= ($n1*$n2);
	echo"El resultado" .$resultado;
}
public function dividir ($n1,$n2){
	$resultado=($n1/$n2);
	echo"El resultado" .$resultado;
}
}

$nume1=$_GET['numero1'];
$nume2 =$_GET['numero2'];
$ope =$_GET['operacion'];

$n1=new Calculadora();
$n1-> num1;
$n1-> num2;
switch ($ope) {
        case '+':
            $n1->sumar ($nume1,$nume2);
            break;
        case '-':
            $n1->restar ($nume1,$nume2);
            break;
        case '*':
            $n1->multiplicar ($nume1,$nume2);
            break;
        case '/':
        if ($nume2!=0){
            $n1->dividir ($nume1,$nume2);
        }
        else{
        	echo "ERROR no se puede dividir por 0..";

        }
            break;
       default:
          echo "no eligio ninguna operacion";
            break;
    }
    

?>
