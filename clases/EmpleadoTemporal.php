<?php   
// sueldo mensual fijo igual para todos 1349,27€
//calcularSueldo ()
include("Empleado.php");
//creo un empleado o instancia
$empleado1=new Empleado("5213374y","Loli Perez",25,"contabilidad");

echo $empleado1->verInfo();

?>

?>