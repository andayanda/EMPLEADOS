<?php   
// sueldo mensual segun fijo * horas trabajadas a 9,39€
//calcularSueldo ()
include("Empleado.php");
//creo al clase EmpleadoHoras
class EmpleadoHoras extends Empleado{
    public $horas;
}

//creo un empleado o instancia
$empleadoHoras1= new EmpleadoHoras("5226555y","AntoniaPerez",25,"Ventas",300);

echo $empleadoHoras1->verInfo();
//no sé cómo mostrar las horas porque el atributo es del hijo y el método verInfo es del padre
?>