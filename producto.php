
<?php
class producto{
#propiedad
public $Idproducto;
public $Nombre;
public $Caracteristicas;
public $Producto_Disponible;
public $precio;
public $Idtipoproducto;

#metodos
public function mostrar(){
        /* $this es para invocar*/
        echo "<p><b>el Idproducto es:</b> $this->Idproducto <br><b> El nombre es:</b> $this->Nombre
        <br><b> Caracteristicas:</b> $this->Caracteristicas
        <br><b> Producto_Disponible: </b> $this->Producto_Disponible
        <br><b>Precio:</b>".number_format($this->precio,0)."
        <br><b> Idtipoproducto:</b> $this->Idtipoproducto</p>";
    }
}

$produ=$_GET['Idproducto'];
$nom=$_GET['Nombre'];
$car =$_GET['Caracteristicas'];
$prec =$_GET['precio'];
$tipopro =$_GET['Idtipoproducto'];
if (isset($_GET['Producto_Disponible'])) {
    $dispo=$_GET['Producto_Disponible'];
} else{
    $dispo=0;
}

$prodt=new producto();
$prodt->Idproducto=$produ;
$prodt->Nombre=$nom;
$prodt->Caracteristicas=$car;
$prodt->Producto_Disponible=$dispo;
$prodt->precio=$prec;
$prodt->Idtipoproducto=$tipopro;
$prodt->mostrar ();
    

?>