<?php   
// sueldo mensual = base 1091,13€  mas complementos de 192,85 sgun anticuedad
//calcularSueldo ()
include("Empleado.php");
//creo la clase EmpladoFijo
class EmpladoFijo extends Empleado{
    private $years;
    public function __construct($i,$n,$e,$p,$y){
       echo "Objeto Empleado fijo creado <br/>";
            
	}
    //setter y getter
    public function setYears($y){$this->years=$y;}
	public function getYears(){return $this->years;}
}
//creo un empleado o instancia
$empladoFijo1=new EmpleadoFijo("231554y","Pepi Perez",35,"Produccion",5);

echo $empladoFijo1->verInfo();
?>