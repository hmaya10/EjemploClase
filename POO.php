<?php
//codigo imperativo
$automovil1=(object) ["marca"=> "Toyota", "serie"=>"prado"];
$automovil2=(object) ["marca"=> "Hyundai", "serie"=>"tucson"];

function mostrar ($automovil){
	echo "<p>Hola! soy un $automovil->marca, de la serie $automovil->serie </p>";
}

mostrar($automovil1);
mostrar($automovil2);
?>

<?php
class Automovil{
	#propiedades
	public $marca;
	public $serie;
	public $modelo;

	#metodos
	public function mostrar(){
		/* $this es para invocar*/
		echo "<p>Hola! soy un $this->marca, de la serie $this->serie, modelo $this->modelo</p>";
	}
}

$aut1=new Automovil();
$aut1-> marca="Toyota";
$aut1-> serie="prado";
$aut1-> modelo="2010";
$aut1->mostrar ();
?>

